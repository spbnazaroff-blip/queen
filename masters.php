<?php
require __DIR__ . '/includes/site.php';
queen_header('Специалисты','masters');
?>
<section class="page-hero page-hero-premium">
    <div class="shell">
        <p class="eyebrow">Команда Queen</p>
        <h1>Специалисты</h1>
        <p>Познакомьтесь с командой Queen, направлениями работы и услугами. Для каждого специалиста доступен быстрый переход к онлайн-записи.</p>
    </div>
</section>

<section class="section masters-intro-section">
    <div class="shell intro-statement masters-intro">
        <p class="eyebrow">Выбор мастера</p>
        <h2>Команда,<br><em>к которой хочется возвращаться.</em></h2>
        <p>Выбирайте специалиста по направлению и нужной услуге. Актуальное расписание открывается непосредственно в форме записи.</p>
    </div>
</section>

<section class="section team-page-section">
    <div class="shell">
        <div class="team-grid" data-queen-team><div class="loading-card"></div><div class="loading-card"></div><div class="loading-card"></div></div>
    </div>
</section>

<section class="section section-dark section-dark-premium">
    <div class="shell cta-panel cta-panel-premium masters-cta-panel">
        <div><p class="eyebrow">Не знаете, кого выбрать?</p><h2>Откройте общую запись Queen</h2><p>Посмотрите доступные услуги, специалистов, цены и свободные часы в одном окне.</p></div>
        <button class="button button-light js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Выбрать специалиста</button>
    </div>
</section>
<?php queen_footer(); ?>
