<?php
require __DIR__ . '/includes/site.php';
queen_header('Специалисты','masters');
?>
<section class="page-hero">
    <div class="shell">
        <p class="eyebrow">Команда Queen</p>
        <h1>Специалисты</h1>
        <p>Шесть реальных мастеров студии Queen: Евгения Мазурик, Назарова Любовь Владимировна, Назарова Екатерина Александровна, Разумова Анастасия, Ангелина и Оксана Некрасова. Фотографии, специализации, услуги и цены синхронизируются с Clientra.</p>
    </div>
</section>
<section class="section">
    <div class="shell">
        <div class="team-grid" data-queen-team><div class="loading-card"></div><div class="loading-card"></div><div class="loading-card"></div></div>
    </div>
</section>
<section class="section section-soft">
    <div class="shell cta-panel">
        <div><p class="eyebrow" style="color:#e7bdcd">Не знаете, кого выбрать?</p><h2>Откройте общую запись</h2><p>Посмотрите услуги каждого специалиста, актуальные цены и доступные часы.</p></div>
        <button class="button button-light js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Выбрать специалиста</button>
    </div>
</section>
<?php queen_footer(); ?>
