<?php
require __DIR__ . '/includes/site.php';
queen_header('Контакты','contacts');
$queenMapLongitude='30.210862';
$queenMapLatitude='59.840657';
$queenOrganizationId='184185076206';
$yandexMap='https://yandex.ru/maps/2/saint-petersburg/?ll='.
    rawurlencode($queenMapLongitude.','.$queenMapLatitude).
    '&mode=poi'.
    '&poi%5Bpoint%5D='.rawurlencode($queenMapLongitude.','.$queenMapLatitude).
    '&poi%5Buri%5D='.rawurlencode('ymapsbm1://org?oid='.$queenOrganizationId).
    '&pt='.rawurlencode($queenMapLongitude.','.$queenMapLatitude.',pm2rdm').
    '&z=19';
$yandexRoute=$yandexMap;
?>
<section class="page-hero">
    <div class="shell">
        <p class="eyebrow">Queen · Санкт-Петербург</p>
        <h1>Контакты</h1>
        <p>Студия красоты Queen находится в Красносельском районе Санкт-Петербурга, недалеко от метро «<?=queen_h(QUEEN_METRO)?>».</p>
    </div>
</section>
<section class="section">
    <div class="shell contact-grid">
        <div>
            <div class="content-card">
                <h2>Студия красоты Queen</h2>
                <div class="contact-list">
                    <div class="contact-item"><small>Адрес</small><strong><?=queen_h(QUEEN_ADDRESS)?></strong></div>
                    <div class="contact-item"><small>Ближайшее метро</small><strong>«<?=queen_h(QUEEN_METRO)?>»</strong></div>
                    <div class="contact-item"><small>Телефон</small><strong><a href="<?=queen_h(QUEEN_PHONE_HREF)?>"><?=queen_h(QUEEN_PHONE)?></a></strong></div>
                    <div class="contact-item"><small>ВКонтакте</small><strong><a href="<?=queen_h(QUEEN_VK_URL)?>" target="_blank" rel="noopener">vk.ru/luibovstudio</a></strong></div>
                    <div class="contact-item"><small>Режим работы</small><strong>По предварительной записи</strong></div>
                </div>
                <div class="hero-actions" style="margin-top:22px">
                    <button class="button button-dark js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Записаться онлайн</button>
                    <a class="button button-outline" href="<?=queen_h($yandexRoute)?>" target="_blank" rel="noopener">Построить маршрут</a>
                </div>
            </div>
        </div>
        <a class="map-placeholder" href="<?=queen_h($yandexMap)?>" target="_blank" rel="noopener" aria-label="Открыть точное расположение Queen в Яндекс Картах">
            <div><b>Queen на карте</b><p><?=queen_h(QUEEN_ADDRESS)?></p><span class="button button-light">Открыть точную точку</span></div>
        </a>
    </div>
</section>
<?php queen_footer(); ?>