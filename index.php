<?php
require __DIR__ . '/includes/site.php';
queen_header('Главная','home');
?>
<section class="hero hero-premium">
    <div class="shell hero-grid">
        <div class="hero-copy-column">
            <p class="eyebrow">Queen · студия красоты · Санкт-Петербург</p>
            <h1>Красота,<br><em class="hero-tagline">в которой вы — главная.</em></h1>
            <p class="hero-copy">Уход за волосами и ногтями, шугаринг, массаж и солярий — в одном стильном пространстве на проспекте Маршала Жукова.</p>
            <div class="hero-actions">
                <button class="button button-dark js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Записаться онлайн</button>
                <a class="button button-outline" href="services.php">Услуги и цены</a>
            </div>
            <div class="hero-note">
                <div><b>5</b><span>направлений красоты</span></div>
                <div><b>Онлайн</b><span>запись в удобное время</span></div>
                <div><b>Queen</b><span>пространство для себя</span></div>
            </div>
        </div>
        <div class="hero-editorial" aria-label="Команда и атмосфера Queen">
            <div class="hero-photo hero-photo-main">
                <img src="assets/images/unsorted/evgeniya-mazurik.png" alt="Специалист студии красоты Queen">
            </div>
            <div class="hero-photo hero-photo-small hero-photo-top">
                <img src="assets/images/unsorted/ekaterina-nazarova.png" alt="Специалист студии Queen">
            </div>
            <div class="hero-photo hero-photo-small hero-photo-bottom">
                <img src="assets/images/unsorted/lubov-nazarova.png" alt="Специалист студии Queen">
            </div>
            <div class="hero-seal" aria-hidden="true"><span>Q</span><small>BEAUTY<br>STUDIO</small></div>
            <div class="panel-card hero-panel-card"><strong>Queen — время для себя</strong><span>Внимательные специалисты, понятный прайс и запись в несколько касаний.</span></div>
        </div>
    </div>
</section>

<section class="section intro-section">
    <div class="shell">
        <div class="intro-statement">
            <p class="eyebrow">Ваш beauty-маршрут</p>
            <h2>Один адрес.<br><em>Все привычные ритуалы красоты.</em></h2>
            <p>Приходите за конкретной услугой или соберите свой день ухода: от волос и маникюра до массажа и солярия.</p>
        </div>
    </div>
</section>

<section class="section section-services">
    <div class="shell">
        <div class="section-head"><div><p class="eyebrow">Всё в одном месте</p><h2>Направления студии</h2></div><p>Выберите направление, познакомьтесь со специалистами и найдите услугу, которая подходит именно вам.</p></div>
        <div class="category-grid">
            <a class="category-card" href="services.php" data-letter="H"><span class="icon">✦</span><h3>Волосы</h3><p>Стрижки, укладки, окрашивание и уход.</p><span class="card-arrow">↗</span></a>
            <a class="category-card" href="services.php" data-letter="N"><span class="icon">◇</span><h3>Маникюр и педикюр</h3><p>Уход, покрытие и аккуратная работа с формой.</p><span class="card-arrow">↗</span></a>
            <a class="category-card" href="services.php" data-letter="S"><span class="icon">○</span><h3>Шугаринг</h3><p>Деликатная сахарная депиляция и комфортный уход.</p><span class="card-arrow">↗</span></a>
            <a class="category-card" href="services.php" data-letter="M"><span class="icon">≈</span><h3>Массаж</h3><p>Расслабление, восстановление и забота о теле.</p><span class="card-arrow">↗</span></a>
            <a class="category-card" href="solarium.php" data-letter="Q"><span class="icon">☀</span><h3>Солярий</h3><p>Красивый оттенок кожи и удобная запись на сеанс.</p><span class="card-arrow">↗</span></a>
            <button class="category-card category-card-book js-book" type="button" data-letter="B" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>"><span class="icon">→</span><h3>Онлайн-запись</h3><p>Выберите специалиста, услугу и свободное время.</p><span class="card-arrow">↗</span></button>
        </div>
    </div>
</section>

<section class="section section-soft team-section">
    <div class="shell">
        <div class="section-head"><div><p class="eyebrow">Команда Queen</p><h2>Специалисты, которым доверяют красоту</h2></div><a class="text-link" href="masters.php">Вся команда →</a></div>
        <div class="team-grid" data-queen-team data-limit="6"><div class="loading-card"></div><div class="loading-card"></div><div class="loading-card"></div></div>
    </div>
</section>

<section class="section section-dark">
    <div class="shell">
        <div class="section-head"><div><p class="eyebrow">Почему Queen</p><h2>Красота без суеты</h2></div><p>Всё важное — от выбора мастера до стоимости и записи — доступно заранее и без лишних звонков.</p></div>
        <div class="feature-grid">
            <div class="feature-card"><span class="feature-number">01</span><b>Удобная запись</b><span>Выбирайте свободное время онлайн, когда удобно именно вам.</span></div>
            <div class="feature-card"><span class="feature-number">02</span><b>Своя команда</b><span>Познакомьтесь со специалистами и выберите мастера по направлению и стилю работы.</span></div>
            <div class="feature-card"><span class="feature-number">03</span><b>Понятный прайс</b><span>Стоимость услуг собрана в одном месте и доступна до записи.</span></div>
            <div class="feature-card"><span class="feature-number">04</span><b>Всё рядом</b><span>Несколько направлений красоты в одном пространстве Queen.</span></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="shell cta-panel cta-panel-premium">
        <div><p class="eyebrow">Найдите время для себя</p><h2>Ваш следующий визит в Queen</h2><p>Выберите направление, специалиста и удобное свободное время.</p></div>
        <button class="button button-light js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Записаться онлайн</button>
    </div>
</section>
<?php queen_footer(); ?>
