<?php
require __DIR__ . '/includes/site.php';
queen_header('Контакты','contacts');
$queenOrganizationId='184185076206';
$yandexMap='https://yandex.ru/maps/2/saint-petersburg/?ll='.
    rawurlencode(QUEEN_LONGITUDE.','.QUEEN_LATITUDE).
    '&mode=poi'.
    '&poi%5Bpoint%5D='.rawurlencode(QUEEN_LONGITUDE.','.QUEEN_LATITUDE).
    '&poi%5Buri%5D='.rawurlencode('ymapsbm1://org?oid='.$queenOrganizationId).
    '&pt='.rawurlencode(QUEEN_LONGITUDE.','.QUEEN_LATITUDE.',pm2rdm').
    '&z=19';
$yandexRoute=$yandexMap;
?>
<section class="page-hero page-hero-premium">
    <div class="shell">
        <p class="eyebrow">Queen · Санкт-Петербург</p>
        <h1>Контакты</h1>
        <p>Студия красоты Queen находится в Красносельском районе Санкт-Петербурга. Постройте маршрут, позвоните или выберите удобное время онлайн.</p>
    </div>
</section>

<section class="section contacts-main-section">
    <div class="shell contact-grid contact-grid-premium">
        <div>
            <div class="content-card contact-card-premium">
                <p class="eyebrow">Ждём вас в Queen</p>
                <h2>Студия красоты Queen</h2>
                <div class="contact-list">
                    <div class="contact-item"><small>Адрес</small><strong><?=queen_h(QUEEN_ADDRESS)?></strong></div>
                    <div class="contact-item"><small>Ближайшее метро</small><strong>«<?=queen_h(QUEEN_METRO)?>»</strong></div>
                    <div class="contact-item"><small>Телефон</small><strong><a href="<?=queen_h(QUEEN_PHONE_HREF)?>"><?=queen_h(QUEEN_PHONE)?></a></strong></div>
                    <div class="contact-item"><small>ВКонтакте</small><strong><a href="<?=queen_h(QUEEN_VK_URL)?>" target="_blank" rel="noopener">vk.ru/luibovstudio</a></strong></div>
                    <div class="contact-item"><small>Посещение</small><strong>По предварительной записи</strong></div>
                </div>
                <div class="hero-actions contact-actions">
                    <button class="button button-dark js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Записаться онлайн</button>
                    <a class="button button-outline" href="<?=queen_h($yandexRoute)?>" target="_blank" rel="noopener">Построить маршрут</a>
                </div>
            </div>
        </div>
        <a class="map-placeholder map-placeholder-premium" href="<?=queen_h($yandexMap)?>" target="_blank" rel="noopener" aria-label="Открыть точное расположение Queen в Яндекс Картах">
            <div class="map-copy"><span class="map-pin" aria-hidden="true">⌖</span><p class="eyebrow">Точная точка</p><b>Queen на карте</b><p><?=queen_h(QUEEN_ADDRESS_SHORT)?><br>Санкт-Петербург</p><span class="button button-light">Открыть Яндекс Карты</span></div>
        </a>
    </div>
</section>

<section class="section section-soft contacts-info-section">
    <div class="shell visit-grid">
        <article><span>01</span><h3>Запишитесь заранее</h3><p>Так вы увидите доступные услуги, специалистов и свободное время.</p></article>
        <article><span>02</span><h3>Постройте маршрут</h3><p>Ссылка на карте ведёт к точной точке Queen в Яндекс Картах.</p></article>
        <article><span>03</span><h3>Нужен вопрос?</h3><p>Позвоните по номеру <?=queen_h(QUEEN_PHONE)?> или напишите в сообщество ВКонтакте.</p></article>
    </div>
</section>
<?php queen_footer(); ?>
