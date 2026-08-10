<?php
require __DIR__ . '/includes/site.php';
queen_header('Главная','home');
?>
<section class="hero">
    <div class="shell hero-grid">
        <div>
            <p class="eyebrow">Студия красоты · Санкт-Петербург</p>
            <h1>Твоя красота.<br><em class="hero-tagline">Твоя уверенность.</em></h1>
            <p class="hero-copy">Волосы, ногтевой сервис, шугаринг, массаж и солярий — в одном пространстве, где можно остановиться и позаботиться о себе.</p>
            <div class="hero-actions">
                <button class="button button-dark js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Записаться онлайн</button>
                <a class="button button-outline" href="services.php">Посмотреть услуги</a>
            </div>
            <div class="hero-note">
                <div><b>5</b><span>основных направлений</span></div>
                <div><b>Онлайн</b><span>запись без звонка</span></div>
                <div><b>СПб</b><span>проспект Маршала Жукова, 54/6</span></div>
            </div>
        </div>
        <div class="beauty-panel" aria-label="Визуальный блок студии Queen">
            <div class="panel-card"><strong>Queen — пространство для себя</strong><span>Спокойная атмосфера, внимательные специалисты и удобная запись.</span></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="shell">
        <div class="section-head"><div><p class="eyebrow">Всё в одном месте</p><h2>Направления студии</h2></div><p>Услуги и цены автоматически обновляются из Clientra и привязаны к конкретным мастерам.</p></div>
        <div class="category-grid">
            <a class="category-card" href="services.php" data-letter="H"><span class="icon">✦</span><h3>Волосы</h3><p>Стрижки, укладки, окрашивание и уход.</p></a>
            <a class="category-card" href="services.php" data-letter="N"><span class="icon">◇</span><h3>Маникюр и педикюр</h3><p>Уход, покрытие и аккуратная работа с формой.</p></a>
            <a class="category-card" href="services.php" data-letter="S"><span class="icon">○</span><h3>Шугаринг</h3><p>Деликатная сахарная депиляция и комфортный уход.</p></a>
            <a class="category-card" href="services.php" data-letter="M"><span class="icon">≈</span><h3>Массаж</h3><p>Расслабление, восстановление и забота о теле.</p></a>
            <a class="category-card" href="solarium.php" data-letter="Q"><span class="icon">☀</span><h3>Солярий</h3><p>Красивый оттенок кожи и удобная запись на сеанс.</p></a>
            <button class="category-card js-book" type="button" data-letter="B" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>" style="text-align:left;cursor:pointer"><span class="icon">→</span><h3>Онлайн-запись</h3><p>Выберите специалиста, услугу и свободное время.</p></button>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="shell">
        <div class="section-head"><div><p class="eyebrow">Команда Queen</p><h2>Ваши специалисты</h2></div><a class="text-link" href="masters.php">Все специалисты →</a></div>
        <div class="team-grid" data-queen-team data-limit="6"><div class="loading-card"></div><div class="loading-card"></div><div class="loading-card"></div></div>
    </div>
</section>

<section class="section section-dark">
    <div class="shell">
        <div class="section-head"><div><p class="eyebrow" style="color:#e1b6c8">Почему Queen</p><h2>Красота без суеты</h2></div><p>Клиенту легко выбрать своего мастера, увидеть его точный прайс и записаться в несколько касаний.</p></div>
        <div class="feature-grid">
            <div class="feature-card"><b>Живой график</b><span>На сайте показывается актуальная доступность из Clientra.</span></div>
            <div class="feature-card"><b>Реальные мастера</b><span>На сайте и в приложении используется одна команда и одинаковые фотографии.</span></div>
            <div class="feature-card"><b>Точные цены</b><span>У каждого мастера может быть своя цена и длительность одной и той же услуги.</span></div>
            <div class="feature-card"><b>Быстрая запись</b><span>Специалист → услуга → дата и время → контакты клиента.</span></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="shell cta-panel">
        <div><p class="eyebrow" style="color:#e7bdcd">Найдите время для себя</p><h2>Запишитесь в Queen онлайн</h2><p>Выберите направление, специалиста и удобное свободное окно.</p></div>
        <button class="button button-light js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Открыть запись</button>
    </div>
</section>
<?php queen_footer(); ?>
