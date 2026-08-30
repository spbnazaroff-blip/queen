<?php
require __DIR__ . '/includes/site.php';
queen_header('Солярий','solarium');
?>
<section class="page-hero page-hero-premium">
    <div class="shell">
        <p class="eyebrow">Солярий Queen</p>
        <h1>Ровный оттенок<br>в удобное время</h1>
        <p>Выберите подходящий сеанс и запишитесь заранее. Перед посещением администратор поможет с продолжительностью и ответит на вопросы.</p>
    </div>
</section>

<section class="section solarium-main-section">
    <div class="shell solar-hero solar-hero-premium">
        <div class="content-card solar-content-card">
            <p class="eyebrow">Перед посещением</p>
            <h2>Комфортная запись без ожидания</h2>
            <p>Выберите продолжительность и удобное время онлайн. Если это первый визит, сообщите администратору об опыте посещения солярия — это поможет подобрать подходящий стартовый сеанс.</p>
            <div class="contact-list" data-solarium-prices>
                <div class="contact-item"><small>Сеанс</small><strong>от 250 рублей</strong></div>
                <div class="contact-item"><small>Посещение</small><strong>По предварительной записи</strong></div>
            </div>
            <button class="button button-dark js-book" type="button" data-solarium-book data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>" style="margin-top:22px">Записаться в солярий</button>
        </div>
        <div class="solar-visual" aria-label="Солярий Queen"><div class="solar-badge"><span>Q</span><small>GLOW<br>RITUAL</small></div></div>
    </div>
</section>

<section class="section section-soft">
    <div class="shell visit-grid solarium-guide-grid">
        <article><span>01</span><h3>Подготовка</h3><p>Учитывайте тип кожи, лекарства и индивидуальные противопоказания. При сомнениях лучше проконсультироваться с врачом.</p></article>
        <article><span>02</span><h3>Продолжительность</h3><p>Время сеанса увеличивают постепенно. Для первого посещения лучше начинать с более короткого интервала.</p></article>
        <article><span>03</span><h3>Запись заранее</h3><p>Забронируйте время онлайн, чтобы прийти к выбранному часу без ожидания.</p></article>
    </div>
</section>

<section class="section final-cta-section">
    <div class="shell cta-panel cta-panel-premium">
        <div><p class="eyebrow">Солярий Queen</p><h2>Выберите удобное время</h2><p>Откройте онлайн-запись и забронируйте подходящий сеанс.</p></div>
        <button class="button button-light js-book" type="button" data-solarium-book data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>">Записаться</button>
    </div>
</section>
<script>
(function(){
    var buttons=document.querySelectorAll('[data-solarium-book]');
    var list=document.querySelector('[data-solarium-prices]');
    var api=document.body.getAttribute('data-api-url');
    if(!buttons.length||!list||!api)return;
    fetch(api,{headers:{Accept:'application/json'}}).then(function(response){
        if(!response.ok)throw new Error('API');
        return response.json();
    }).then(function(data){
        var services=[];
        (data.staff||[]).forEach(function(member){
            (member.services||[]).forEach(function(service){
                if(/соляр/i.test(String(service.category||'')+' '+String(service.name||''))){
                    services.push(service);
                }
            });
        });
        var unique={};
        services=services.filter(function(service){
            var key=String(service.id||service.name);
            if(unique[key])return false;
            unique[key]=true;
            return true;
        });
        if(!services.length)return;
        buttons.forEach(function(button){
            button.setAttribute('data-book-url',services[0].booking_url||button.getAttribute('data-book-url'));
        });
        list.innerHTML='';
        services.forEach(function(service){
            var item=document.createElement('div');
            item.className='contact-item';
            var small=document.createElement('small');
            small.textContent=service.name;
            var strong=document.createElement('strong');
            strong.textContent=new Intl.NumberFormat('ru-RU',{maximumFractionDigits:0}).format(Number(service.price||0))+' рублей';
            item.appendChild(small);item.appendChild(strong);list.appendChild(item);
        });
    }).catch(function(){});
})();
</script>
<?php queen_footer(); ?>
