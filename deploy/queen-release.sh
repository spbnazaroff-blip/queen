#!/usr/bin/env bash
set -Eeuo pipefail

BASE="/var/www/u3249400/data/www/denisnazarov.online/coding"
PROD_DIR="/var/www/u3249400/data/www/queen.denisnazarov.online"
CLIENTRA_PUBLIC="$BASE/clientra"
TEST_PUBLIC="$BASE/queen"
TEST_SOURCE="$BASE/sites/queen"
BACKUP_ROOT="/var/www/u3249400/data/DSCL/backups"
TS="$(date +%Y%m%d_%H%M%S)"
BACKUP="$BACKUP_ROOT/queen-canonical-$TS"
TMP="$(mktemp -d)"

cleanup() { rm -rf "$TMP"; }
trap cleanup EXIT

for cmd in git rsync php curl readlink; do
  command -v "$cmd" >/dev/null 2>&1 || { echo "MISSING_COMMAND=$cmd"; exit 10; }
done

mkdir -p "$BACKUP"

echo "=== QUEEN CANONICAL RELEASE ==="
echo "BACKUP=$BACKUP"

git clone --depth 1 git@github.com:spbnazaroff-blip/queen.git "$TMP/queen"
git clone --depth 1 git@github.com:spbnazaroff-blip/clientra.git "$TMP/clientra"

QUEEN_SHA="$(git -C "$TMP/queen" rev-parse HEAD)"
CLIENTRA_SHA="$(git -C "$TMP/clientra" rev-parse HEAD)"
echo "QUEEN_SHA=$QUEEN_SHA"
echo "CLIENTRA_SHA=$CLIENTRA_SHA"

php -l "$TMP/queen/includes/site.php" >/dev/null
php -l "$TMP/queen/index.php" >/dev/null
php -l "$TMP/queen/masters.php" >/dev/null
php -l "$TMP/queen/services.php" >/dev/null
php -l "$TMP/clientra/app/seed-queen-canonical-v5.php" >/dev/null
php -l "$TMP/clientra/app/seed-queen-real-team-v4.php" >/dev/null
php -l "$TMP/clientra/app/data.php" >/dev/null
echo "PHP_SYNTAX=PASS"

if [ -e "$CLIENTRA_PUBLIC" ]; then
  CLIENTRA_DIR="$(readlink -f "$CLIENTRA_PUBLIC")"
else
  echo "CLIENTRA_PATH_MISSING=$CLIENTRA_PUBLIC"
  exit 20
fi

mkdir -p "$BACKUP/clientra/app"
for rel in app/data.php app/seed-queen-real-team-v4.php; do
  if [ -f "$CLIENTRA_DIR/$rel" ]; then
    cp -a "$CLIENTRA_DIR/$rel" "$BACKUP/clientra/$rel"
  fi
done
if [ -f "$CLIENTRA_DIR/app/seed-queen-canonical-v5.php" ]; then
  cp -a "$CLIENTRA_DIR/app/seed-queen-canonical-v5.php" "$BACKUP/clientra/app/seed-queen-canonical-v5.php"
fi

install -m 0644 "$TMP/clientra/app/data.php" "$CLIENTRA_DIR/app/data.php"
install -m 0644 "$TMP/clientra/app/seed-queen-real-team-v4.php" "$CLIENTRA_DIR/app/seed-queen-real-team-v4.php"
install -m 0644 "$TMP/clientra/app/seed-queen-canonical-v5.php" "$CLIENTRA_DIR/app/seed-queen-canonical-v5.php"
echo "CLIENTRA_PATCH=PASS"

if [ -e "$TEST_PUBLIC" ]; then
  TEST_DIR="$(readlink -f "$TEST_PUBLIC")"
elif [ -d "$TEST_SOURCE" ]; then
  TEST_DIR="$TEST_SOURCE"
else
  mkdir -p "$TEST_SOURCE"
  TEST_DIR="$TEST_SOURCE"
fi

mkdir -p "$TEST_DIR" "$PROD_DIR" "$BACKUP/test" "$BACKUP/production"

rsync -a --delete \
  --exclude='.git/' \
  --exclude='image/' \
  --exclude='video/' \
  --backup --backup-dir="$BACKUP/test" \
  "$TMP/queen/" "$TEST_DIR/"
echo "TEST_SYNC=PASS"
echo "TEST_DIR=$TEST_DIR"

rsync -a --delete \
  --exclude='.git/' \
  --exclude='image/' \
  --exclude='video/' \
  --backup --backup-dir="$BACKUP/production" \
  "$TMP/queen/" "$PROD_DIR/"
echo "PRODUCTION_SYNC=PASS"
echo "PRODUCTION_DIR=$PROD_DIR"

API_URL="https://denisnazarov.online/coding/clientra/api/public.php?org=queen-spb&_=$TS"
API_JSON="$(curl -fsS --max-time 30 "$API_URL")"

printf '%s' "$API_JSON" | php -r '
$d=json_decode(stream_get_contents(STDIN),true);
if(!is_array($d)||empty($d["ok"])||!isset($d["staff"])||!is_array($d["staff"])) { fwrite(STDERR,"API_INVALID\n"); exit(31); }
$actual=array_values(array_map(function($m){return isset($m["public_slug"])?(string)$m["public_slug"]:"";},$d["staff"]));
$expected=array("evgeniya-mazurik","nazarova-lyubov-vladimirovna","nazarova-ekaterina-aleksandrovna","anastasiya-razumova","angelina","oksana-nekrasova");
sort($actual); sort($expected);
if($actual!==$expected) { fwrite(STDERR,"TEAM_MISMATCH=".json_encode($actual,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES)."\n"); exit(32); }
echo "CANONICAL_TEAM=PASS\nSTAFF_COUNT=6\n";
'

curl -fsS --max-time 30 -o /dev/null "https://denisnazarov.online/coding/queen/"
echo "TEST_HTTP=PASS"

if curl -fsS --max-time 30 -o /dev/null "https://queen.denisnazarov.online/"; then
  echo "PRODUCTION_HTTP=PASS"
else
  echo "PRODUCTION_HTTP=NOT_READY"
  echo "PRODUCTION_FILES_ARE_STAGED=$PROD_DIR"
  echo "ACTION_REQUIRED=Create_or_point_subdomain_queen.denisnazarov.online_to_$PROD_DIR"
  exit 40
fi

echo "RELEASE=PASS"
