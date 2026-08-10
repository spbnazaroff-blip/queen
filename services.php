<?php
require __DIR__ . '/includes/site.php';
queen_header('Услуги и цены','services');
?>
<section class="page-hero">
    <div class="shell">
        <p class="eyebrow">Прайс Queen</p>
        <h1>Услуги и цены</h1>
        <p>Актуальные услуги подтягиваются из Clientra. Когда владелец меняет цену или добавляет новую услугу, сайт обновляется автоматически.</p>
    </div>
</section>
<section class="section">
    <div class="shell">
        <div class="service-groups" data-queen-services><div class="loading-card"></div></div>
        <div class="notice" style="margin-top:22px">Окончательная стоимость сложных процедур может зависеть от длины волос, объёма работы и выбранных материалов. Специалист уточнит детали перед началом.</div>
    </div>
</section>
<?php queen_footer(); ?>
