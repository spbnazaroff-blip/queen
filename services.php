<?php
require __DIR__ . '/includes/site.php';
queen_header('Услуги и цены','services');
?>
<section class="page-hero page-hero-premium">
    <div class="shell">
        <p class="eyebrow">Прайс Queen</p>
        <h1>Услуги и цены</h1>
        <p>Актуальные направления, продолжительность и стоимость процедур. Выберите услугу и сразу откройте онлайн-запись на удобное время.</p>
    </div>
</section>

<section class="section page-benefits-section">
    <div class="shell visit-grid page-benefits-grid">
        <article><span>01</span><h3>Актуальный прайс</h3><p>Стоимость услуг загружается из системы записи Queen.</p></article>
        <article><span>02</span><h3>Понятная длительность</h3><p>Для доступных услуг указано ориентировочное время процедуры.</p></article>
        <article><span>03</span><h3>Запись из прайса</h3><p>Нажмите «Записаться» рядом с услугой и выберите свободное время.</p></article>
    </div>
</section>

<section class="section services-list-section">
    <div class="shell">
        <div class="section-head services-section-head"><div><p class="eyebrow">Выберите направление</p><h2>Прайс студии</h2></div><p>Услуги собраны по категориям. Если процедура зависит от длины волос, объёма работы или материалов, итоговую стоимость специалист уточнит до начала.</p></div>
        <div class="service-groups" data-queen-services><div class="loading-card"></div></div>
        <div class="notice" style="margin-top:22px">Окончательная стоимость сложных процедур может зависеть от длины волос, объёма работы и выбранных материалов. Специалист уточнит детали перед началом.</div>
    </div>
</section>

<section class="section final-cta-section">
    <div class="shell cta-panel cta-panel-premium">
        <div><p class="eyebrow">Выбрали услугу?</p><h2>Осталось выбрать удобное время</h2><p>Откройте онлайн-запись, выберите специалиста и свободное окно.</p></div>
        <button class="button button-light js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Записаться онлайн</button>
    </div>
</section>
<?php queen_footer(); ?>
