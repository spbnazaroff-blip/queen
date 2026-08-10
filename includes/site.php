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
const QUEEN_METRO = 'Проспект Ветеранов';
const QUEEN_PHONE = '+7 (911) 158-14-42';
const QUEEN_PHONE_HREF = 'tel:+79111581442';
const QUEEN_VK_URL = 'https://vk.ru/luibovstudio';
const QUEEN_LOGO_URL = 'assets/images/brand/logo-queen.png';
const QUEEN_SITE_URL = 'https://denisnazarov.online/coding/queen/';
const QUEEN_SOCIAL_IMAGE_URL = 'https://denisnazarov.online/coding/queen/assets/images/og-queen.php?v=20260728-1';

function queen_header($title, $active)
{
    $fullTitle = $title === 'Главная' ? 'Студия красоты Queen — Санкт-Петербург' : $title . ' — студия красоты Queen';
    $description = 'Студия красоты Queen в Санкт-Петербурге: волосы, маникюр и педикюр, шугаринг, массаж и солярий. Удобная онлайн-запись к специалистам.';
    $nav = array(
        'home'=>array('Главная','index.php'),
        'services'=>array('Услуги и цены','services.php'),
        'masters'=>array('Специалисты','masters.php'),
        'solarium'=>array('Солярий','solarium.php'),
        'contacts'=>array('Контакты','contacts.php'),
    );
    ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="description" content="<?=queen_h($description)?>">
    <meta name="theme-color" content="#0a0a09">
    <title><?=queen_h($fullTitle)?></title>

    <link rel="canonical" href="<?=queen_h(QUEEN_SITE_URL)?>">

    <meta property="og:type" content="website">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:site_name" content="Queen — студия красоты">
    <meta property="og:url" content="<?=queen_h(QUEEN_SITE_URL)?>">
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
    <link rel="stylesheet" href="assets/css/gold-theme.css?v=20260731-2">
    <link rel="stylesheet" href="assets/css/development-notice.css?v=1.0">
</head>
<body data-api-url="<?=queen_h(QUEEN_CLIENTRA_API)?>" data-booking-url="<?=queen_h(QUEEN_BOOKING_URL)?>">
<header class="site-header">
    <div class="shell header-inner">
        <a class="brand" href="index.php" aria-label="Queen — главная">
            <span class="brand-mark"><img src="<?=queen_h(QUEEN_LOGO_URL)?>" alt="" width="48" height="48"></span>
            <span><strong>QUEEN</strong><small>студия красоты</small></span>
        </a>
        <button class="menu-toggle" type="button" aria-label="Открыть меню" data-menu-toggle><span></span><span></span><span></span></button>
        <nav class="main-nav" data-main-nav>
            <?php foreach ($nav as $key=>$item): ?>
                <a class="<?=$active===$key?'active':''?>" href="<?=queen_h($item[1])?>"><?=queen_h($item[0])?></a>
            <?php endforeach; ?>
        </nav>
        <button class="button button-dark header-book js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Записаться</button>
    </div>
</header>
<div class="project-development-notice" role="status">
    <div class="shell project-development-notice__inner">
        <strong>Сайт в разработке</strong>
        <span>Основные страницы и онлайн-запись уже работают, но фотографии, тексты и отдельные сценарии ещё дополняются и проверяются.</span>
    </div>
</div>
<main>
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
            <p>Красота, уход и время для себя в Санкт-Петербурге.</p>
        </div>
        <div><strong>Навигация</strong><a href="services.php">Услуги и цены</a><a href="masters.php">Специалисты</a><a href="solarium.php">Солярий</a></div>
        <div>
            <strong>Контакты</strong>
            <span><?=queen_h(QUEEN_ADDRESS)?></span>
            <span>Метро «<?=queen_h(QUEEN_METRO)?>»</span>
            <a href="<?=queen_h(QUEEN_PHONE_HREF)?>"><?=queen_h(QUEEN_PHONE)?></a>
            <a href="<?=queen_h(QUEEN_VK_URL)?>" target="_blank" rel="noopener">Сообщество ВКонтакте</a>
            <button class="footer-link js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Онлайн-запись</button>
        </div>
    </div>
    <div class="shell footer-bottom"><span>© <?=date('Y')?> Queen</span><span>Онлайн-запись работает на Clientra</span></div>
</footer>

<div class="booking-modal" data-booking-modal aria-hidden="true">
    <div class="booking-backdrop" data-booking-close></div>
    <section class="booking-dialog" role="dialog" aria-modal="true" aria-label="Онлайн-запись">
        <div class="booking-head"><strong>Онлайн-запись Queen</strong><button type="button" aria-label="Закрыть" data-booking-close>×</button></div>
        <iframe title="Онлайн-запись Queen" data-booking-frame loading="lazy"></iframe>
    </section>
</div>
<script src="assets/js/site.js?v=20260727-1"></script>
</body>
</html>
<?php
}
