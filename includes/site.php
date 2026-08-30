<?php
if (!function_exists('queen_h')) {
    function queen_h($value)
    {
        return htmlspecialchars((string)$value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}

const QUEEN_CLIENTRA_API = 'https://denisnazarov.online/coding/clientra/api/public.php?org=queen-spb';
const QUEEN_BOOKING_URL = 'https://denisnazarov.online/coding/clientra/book/?org=queen-spb';
const QUEEN_ADDRESS = 'Санкт-Петербург, проспект Маршала Жукова, 54, корпус 6';
const QUEEN_ADDRESS_SHORT = 'Маршала Жукова, 54/6';
const QUEEN_METRO = 'Проспект Ветеранов';
const QUEEN_PHONE = '+7 (911) 158-14-42';
const QUEEN_PHONE_HREF = 'tel:+79111581442';
const QUEEN_VK_URL = 'https://vk.ru/luibovstudio';
const QUEEN_LOGO_URL = 'assets/images/brand/logo-queen.png';
const QUEEN_SITE_URL = 'https://queen.denisnazarov.online/';
const QUEEN_SOCIAL_IMAGE_URL = 'https://queen.denisnazarov.online/assets/images/og-queen.php?v=20260830-1';
const QUEEN_LATITUDE = '59.840657';
const QUEEN_LONGITUDE = '30.210862';

function queen_page_url($active)
{
    $paths = array(
        'home' => '',
        'services' => 'services.php',
        'masters' => 'masters.php',
        'solarium' => 'solarium.php',
        'contacts' => 'contacts.php',
    );
    return QUEEN_SITE_URL . (isset($paths[$active]) ? $paths[$active] : '');
}

function queen_page_description($active)
{
    $descriptions = array(
        'home' => 'Студия красоты Queen в Санкт-Петербурге на проспекте Маршала Жукова: волосы, маникюр и педикюр, шугаринг, массаж и солярий. Цены и онлайн-запись.',
        'services' => 'Актуальные услуги и цены студии красоты Queen в Санкт-Петербурге. Волосы, ногти, шугаринг, массаж, ресницы, брови и другие направления.',
        'masters' => 'Специалисты студии красоты Queen в Санкт-Петербурге. Выберите мастера, посмотрите услуги, цены и запишитесь онлайн.',
        'solarium' => 'Солярий Queen в Санкт-Петербурге: цены, рекомендации перед посещением и удобная предварительная запись.',
        'contacts' => 'Студия красоты Queen в Санкт-Петербурге: проспект Маршала Жукова, 54/6. Телефон, ВКонтакте, маршрут и онлайн-запись.',
    );
    return isset($descriptions[$active]) ? $descriptions[$active] : $descriptions['home'];
}

function queen_page_title($title, $active)
{
    $titles = array(
        'home' => 'Студия красоты Queen в Санкт-Петербурге | Маршала Жукова',
        'services' => 'Услуги и цены | Queen — студия красоты в Санкт-Петербурге',
        'masters' => 'Специалисты | Queen — студия красоты в Санкт-Петербурге',
        'solarium' => 'Солярий | Queen — студия красоты в Санкт-Петербурге',
        'contacts' => 'Контакты | Queen — студия красоты в Санкт-Петербурге',
    );
    return isset($titles[$active]) ? $titles[$active] : $title . ' | Queen';
}

function queen_header($title, $active)
{
    $fullTitle = queen_page_title($title, $active);
    $description = queen_page_description($active);
    $canonical = queen_page_url($active);
    $nav = array(
        'home'=>array('Главная','index.php'),
        'services'=>array('Услуги и цены','services.php'),
        'masters'=>array('Специалисты','masters.php'),
        'solarium'=>array('Солярий','solarium.php'),
        'contacts'=>array('Контакты','contacts.php'),
    );
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => array('BeautySalon', 'LocalBusiness'),
        'name' => 'Queen',
        'url' => QUEEN_SITE_URL,
        'image' => QUEEN_SOCIAL_IMAGE_URL,
        'telephone' => QUEEN_PHONE,
        'priceRange' => '₽₽',
        'address' => array(
            '@type' => 'PostalAddress',
            'streetAddress' => 'проспект Маршала Жукова, 54, корпус 6',
            'addressLocality' => 'Санкт-Петербург',
            'addressCountry' => 'RU',
        ),
        'geo' => array(
            '@type' => 'GeoCoordinates',
            'latitude' => QUEEN_LATITUDE,
            'longitude' => QUEEN_LONGITUDE,
        ),
        'sameAs' => array(QUEEN_VK_URL),
    );
    ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="description" content="<?=queen_h($description)?>">
    <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
    <meta name="theme-color" content="#090909">
    <meta name="format-detection" content="telephone=yes">
    <title><?=queen_h($fullTitle)?></title>

    <link rel="canonical" href="<?=queen_h($canonical)?>">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="Queen — студия красоты">
    <meta property="og:url" content="<?=queen_h($canonical)?>">
    <meta property="og:title" content="<?=queen_h($fullTitle)?>">
    <meta property="og:description" content="<?=queen_h($description)?>">
    <meta property="og:image" content="<?=queen_h(QUEEN_SOCIAL_IMAGE_URL)?>">
    <meta property="og:image:secure_url" content="<?=queen_h(QUEEN_SOCIAL_IMAGE_URL)?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">
    <meta property="og:image:alt" content="Queen — студия красоты в Санкт-Петербурге">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?=queen_h($fullTitle)?>">
    <meta name="twitter:description" content="<?=queen_h($description)?>">
    <meta name="twitter:image" content="<?=queen_h(QUEEN_SOCIAL_IMAGE_URL)?>">

    <link rel="icon" type="image/png" href="<?=queen_h(QUEEN_LOGO_URL)?>">
    <link rel="apple-touch-icon" href="<?=queen_h(QUEEN_LOGO_URL)?>">
    <link rel="stylesheet" href="assets/css/site.css?v=20260727-2">
    <link rel="stylesheet" href="assets/css/gold-theme.css?v=20260829-1">
    <link rel="stylesheet" href="assets/css/premium-v2.css?v=20260830-1">
    <link rel="stylesheet" href="assets/css/premium-pages.css?v=20260830-1">
    <link rel="stylesheet" href="assets/css/mobile-polish.css?v=20260830-2">

    <script type="application/ld+json"><?=json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)?></script>
</head>
<body data-api-url="<?=queen_h(QUEEN_CLIENTRA_API)?>" data-booking-url="<?=queen_h(QUEEN_BOOKING_URL)?>">
<a class="skip-link" href="#content">Перейти к содержанию</a>
<div class="site-topline">
    <div class="shell site-topline-inner">
        <a href="contacts.php" class="topline-address"><span class="topline-dot" aria-hidden="true"></span><?=queen_h(QUEEN_ADDRESS_SHORT)?> · Санкт-Петербург</a>
        <div class="topline-actions">
            <span>По предварительной записи</span>
            <a href="<?=queen_h(QUEEN_PHONE_HREF)?>"><?=queen_h(QUEEN_PHONE)?></a>
        </div>
    </div>
</div>
<header class="site-header">
    <div class="shell header-inner">
        <a class="brand" href="index.php" aria-label="Queen — главная">
            <span class="brand-mark"><img src="<?=queen_h(QUEEN_LOGO_URL)?>" alt="" width="48" height="48"></span>
            <span><strong>QUEEN</strong><small>студия красоты</small></span>
        </a>
        <button class="menu-toggle" type="button" aria-label="Открыть меню" aria-expanded="false" data-menu-toggle><span></span><span></span><span></span></button>
        <nav class="main-nav" aria-label="Основная навигация" data-main-nav>
            <?php foreach ($nav as $key=>$item): ?>
                <a class="<?=$active===$key?'active':''?>" href="<?=queen_h($item[1])?>"<?=$active===$key?' aria-current="page"':''?>><?=queen_h($item[0])?></a>
            <?php endforeach; ?>
        </nav>
        <button class="button button-dark header-book js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Записаться онлайн</button>
    </div>
</header>
<main id="content">
<?php
}

function queen_footer()
{
    ?>
</main>
<footer class="site-footer">
    <div class="shell footer-grid">
        <div>
            <a class="brand footer-brand" href="index.php"><span class="brand-mark"><img src="<?=queen_h(QUEEN_LOGO_URL)?>" alt="" width="48" height="48"></span><span><strong>QUEEN</strong><small>студия красоты</small></span></a>
            <p>Стильное пространство красоты и ухода в Санкт-Петербурге. Выберите услугу, специалиста и удобное время онлайн.</p>
        </div>
        <div><strong>Навигация</strong><a href="services.php">Услуги и цены</a><a href="masters.php">Специалисты</a><a href="solarium.php">Солярий</a><a href="contacts.php">Контакты</a></div>
        <div>
            <strong>Контакты</strong>
            <span><?=queen_h(QUEEN_ADDRESS)?></span>
            <span>Метро «<?=queen_h(QUEEN_METRO)?>»</span>
            <span>По предварительной записи</span>
            <a href="<?=queen_h(QUEEN_PHONE_HREF)?>"><?=queen_h(QUEEN_PHONE)?></a>
            <a href="<?=queen_h(QUEEN_VK_URL)?>" target="_blank" rel="noopener">Сообщество ВКонтакте</a>
            <button class="footer-link js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Онлайн-запись</button>
        </div>
    </div>
    <div class="shell footer-bottom"><span>© <?=date('Y')?> Queen</span><span>Санкт-Петербург · <?=queen_h(QUEEN_ADDRESS_SHORT)?></span></div>
</footer>

<div class="mobile-booking-bar" aria-label="Быстрая запись">
    <button class="js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>"><span>Записаться онлайн</span><small>выбрать услугу и время</small></button>
</div>

<div class="booking-modal" data-booking-modal aria-hidden="true">
    <div class="booking-backdrop" data-booking-close></div>
    <section class="booking-dialog" role="dialog" aria-modal="true" aria-label="Онлайн-запись">
        <div class="booking-head"><div><small>QUEEN</small><strong>Онлайн-запись</strong></div><button type="button" aria-label="Закрыть" data-booking-close>×</button></div>
        <iframe title="Онлайн-запись Queen" data-booking-frame loading="lazy"></iframe>
    </section>
</div>
<script src="assets/js/site.js?v=20260830-1"></script>
</body>
</html>
<?php
}
