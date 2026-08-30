<?php
require __DIR__ . '/includes/site.php';
queen_header('Главная','home');
?>
<section class="hero hero-premium">
    <div class="shell hero-grid">
        <div class="hero-copy-column">
            <div class="hero-kicker"><span>QUEEN</span><i></i><span>BEAUTY STUDIO</span></div>
            <p class="eyebrow">Студия красоты · Санкт-Петербург</p>
            <h1>Красота,<br><em class="hero-tagline">в которой вы — главная.</em></h1>
            <p class="hero-copy">Волосы, ногти, шугаринг, массаж и солярий — в одном пространстве на проспекте Маршала Жукова. Понятные цены, своя команда и запись онлайн.</p>
            <div class="hero-actions">
                <button class="button button-dark js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Записаться онлайн <span aria-hidden="true">↗</span></button>
                <a class="button button-outline" href="services.php">Смотреть услуги</a>
            </div>
            <div class="hero-note hero-note-premium">
                <div><b>5</b><span>направлений красоты</span></div>
                <div><b>6</b><span>специалистов Queen</span></div>
                <div><b>Онлайн</b><span>цены, услуги и запись</span></div>
            </div>
        </div>
        <div class="hero-editorial" aria-label="Команда и атмосфера Queen">
            <div class="hero-photo hero-photo-main">
                <img src="assets/images/unsorted/lubov-nazarova.png" alt="Любовь Назарова — специалист студии красоты Queen">
            </div>
            <div class="hero-photo hero-photo-small hero-photo-top">
                <img src="assets/images/unsorted/ekaterina-nazarova.png" alt="Екатерина Назарова — специалист студии Queen">
            </div>
            <div class="hero-photo hero-photo-small hero-photo-bottom">
                <img src="assets/images/unsorted/evgeniya-mazurik.png" alt="Евгения Мазурик — специалист студии Queen">
            </div>
            <div class="hero-seal" aria-hidden="true"><span>Q</span><small>BEAUTY<br>STUDIO</small></div>
            <div class="panel-card hero-panel-card"><small>Санкт-Петербург</small><strong>Queen — время для себя</strong><span>Маршала Жукова, 54/6</span></div>
        </div>
    </div>
</section>

<section class="luxury-strip" aria-label="Преимущества Queen">
    <div class="shell luxury-strip-grid">
        <div><span>01</span><strong>Один адрес</strong><small>несколько направлений ухода</small></div>
        <div><span>02</span><strong>Своя команда</strong><small>выберите специалиста заранее</small></div>
        <div><span>03</span><strong>Понятный прайс</strong><small>стоимость видна до записи</small></div>
        <div><span>04</span><strong>Онлайн-запись</strong><small>услуга, мастер и свободное время</small></div>
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
        <div class="section-head"><div><p class="eyebrow">Всё в одном месте</p><h2>Направления студии</h2></div><p>Выберите направление, познакомьтесь со специалистами и сразу перейдите к актуальным услугам и ценам.</p></div>
        <div class="category-grid category-grid-premium">
            <a class="category-card" href="services.php" data-letter="H"><span class="icon">✦</span><h3>Волосы</h3><p>Стрижки, укладки, окрашивание и уход.</p><span class="card-arrow">↗</span></a>
            <a class="category-card" href="services.php" data-letter="N"><span class="icon">◇</span><h3>Маникюр и педикюр</h3><p>Уход, покрытие и аккуратная работа с формой.</p><span class="card-arrow">↗</span></a>
            <a class="category-card" href="services.php" data-letter="S"><span class="icon">○</span><h3>Шугаринг</h3><p>Деликатная сахарная депиляция и комфортный уход.</p><span class="card-arrow">↗</span></a>
            <a class="category-card" href="services.php" data-letter="M"><span class="icon">≈</span><h3>Массаж</h3><p>Расслабление, восстановление и забота о теле.</p><span class="card-arrow">↗</span></a>
            <a class="category-card" href="solarium.php" data-letter="Q"><span class="icon">☀</span><h3>Солярий</h3><p>Подберите продолжительность и удобное время сеанса.</p><span class="card-arrow">↗</span></a>
            <button class="category-card category-card-book js-book" type="button" data-letter="B" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>"><span class="icon">→</span><h3>Онлайн-запись</h3><p>Выберите специалиста, услугу и свободное время.</p><span class="card-arrow">↗</span></button>
        </div>
    </div>
</section>

<section class="section visit-section">
    <div class="shell">
        <div class="section-head"><div><p class="eyebrow">Просто и удобно</p><h2>Ваш визит — в три шага</h2></div><p>Без переписки в несколько кругов: нужная информация собрана на сайте, а запись открывается в пару касаний.</p></div>
        <div class="visit-grid">
            <article><span>01</span><h3>Выберите направление</h3><p>Посмотрите услуги, продолжительность и актуальную стоимость.</p></article>
            <article><span>02</span><h3>Познакомьтесь с мастером</h3><p>Выберите специалиста, который работает с нужной услугой.</p></article>
            <article><span>03</span><h3>Забронируйте время</h3><p>Откройте онлайн-запись и выберите удобное свободное окно.</p></article>
        </div>
    </div>
</section>

<section class="section section-soft team-section">
    <div class="shell">
        <div class="section-head"><div><p class="eyebrow">Команда Queen</p><h2>Специалисты, которым доверяют красоту</h2></div><a class="text-link" href="masters.php">Вся команда →</a></div>
        <div class="team-grid" data-queen-team data-limit="6"><div class="loading-card"></div><div class="loading-card"></div><div class="loading-card"></div></div>
    </div>
</section>

<section class="section section-dark section-dark-premium">
    <div class="shell">
        <div class="section-head"><div><p class="eyebrow">Почему Queen</p><h2>Красота без суеты</h2></div><p>Всё важное — от выбора мастера до стоимости и записи — доступно заранее и без лишних звонков.</p></div>
        <div class="feature-grid">
            <div class="feature-card"><span class="feature-number">01</span><b>Удобная запись</b><span>Выбирайте свободное время онлайн, когда удобно именно вам.</span></div>
            <div class="feature-card"><span class="feature-number">02</span><b>Своя команда</b><span>Познакомьтесь со специалистами и выберите мастера по направлению.</span></div>
            <div class="feature-card"><span class="feature-number">03</span><b>Понятный прайс</b><span>Стоимость услуг собрана в одном месте и доступна до записи.</span></div>
            <div class="feature-card"><span class="feature-number">04</span><b>Всё рядом</b><span>Несколько направлений красоты в одном пространстве Queen.</span></div>
        </div>
    </div>
</section>

<section class="section location-section">
    <div class="shell location-card">
        <div class="location-copy">
            <p class="eyebrow">Queen рядом</p>
            <h2>Проспект Маршала Жукова, 54/6</h2>
            <p>Красносельский район Санкт-Петербурга. Перед визитом выберите услугу и удобное время онлайн.</p>
            <div class="hero-actions">
                <a class="button button-outline" href="contacts.php">Контакты и маршрут</a>
                <a class="text-link" href="<?=queen_h(QUEEN_PHONE_HREF)?>"><?=queen_h(QUEEN_PHONE)?></a>
            </div>
        </div>
        <div class="location-mark" aria-hidden="true"><span>Q</span><small>SAINT<br>PETERSBURG</small></div>
    </div>
</section>

<section class="section section-soft faq-section">
    <div class="shell faq-layout">
        <div><p class="eyebrow">Перед записью</p><h2>Частые вопросы</h2><p>Коротко о том, что обычно важно знать перед первым визитом в Queen.</p></div>
        <div class="faq-list">
            <details><summary>Где посмотреть актуальные цены?</summary><p>На странице «Услуги и цены». Прайс загружается из системы записи, поэтому на сайте отображается актуальная информация по доступным услугам.</p></details>
            <details><summary>Можно выбрать конкретного специалиста?</summary><p>Да. На странице «Специалисты» можно познакомиться с командой и открыть запись к выбранному мастеру.</p></details>
            <details><summary>Нужно ли звонить для записи?</summary><p>Не обязательно. Онлайн-запись позволяет выбрать услугу и свободное время самостоятельно.</p></details>
            <details><summary>Где находится студия?</summary><p>Санкт-Петербург, проспект Маршала Жукова, 54, корпус 6. На странице контактов есть точка на Яндекс Картах и ссылка для построения маршрута.</p></details>
        </div>
    </div>
</section>

<section class="section final-cta-section">
    <div class="shell cta-panel cta-panel-premium">
        <div><p class="eyebrow">Найдите время для себя</p><h2>Ваш следующий визит в Queen</h2><p>Выберите направление, специалиста и удобное свободное время.</p></div>
        <button class="button button-light js-book" type="button" data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Записаться онлайн</button>
    </div>
</section>
<?php queen_footer(); ?>
