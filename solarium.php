<?php
require __DIR__ . '/includes/site.php';
queen_header('Солярий','solarium');
?>
<section class="page-hero">
    <div class="shell">
        <p class="eyebrow">Солярий Queen</p>
        <h1>Ровный оттенок<br>в удобное время</h1>
        <p>Запись на солярий ведётся через администратора Queen. Сайт автоматически получает актуальные варианты сеансов и свободное время из Clientra.</p>
    </div>
</section>
<section class="section">
    <div class="shell solar-hero">
        <div class="content-card">
            <p class="eyebrow">Перед посещением</p>
            <h2>Комфортная запись без ожидания</h2>
            <p>Выберите продолжительность и удобное время онлайн. Администратор подтвердит сеанс и при необходимости поможет с выбором.</p>
            <div class="contact-list" data-solarium-prices>
                <div class="contact-item"><small>Сеанс</small><strong>от 250 рублей</strong></div>
                <div class="contact-item"><small>Запись</small><strong>Через администратора Queen</strong></div>
            </div>
            <button class="button button-dark js-book" type="button" data-solarium-book data-book-url="<?=queen_h(QUEEN_BOOKING_URL)?>" style="margin-top:22px">Записаться в солярий</button>
        </div>
        <div class="solar-visual" aria-label="Солярий Queen"></div>
    </div>
</section>
<section class="section section-soft">
    <div class="shell content-grid">
        <article class="content-card"><h2>Подготовка</h2><p>Перед первым посещением стоит учитывать тип кожи, лекарства и индивидуальные противопоказания. При сомнениях лучше проконсультироваться с врачом.</p></article>
        <article class="content-card"><h2>Продолжительность</h2><p>Время сеанса подбирается постепенно. Администратор уточнит опыт посещений и поможет выбрать безопасный стартовый вариант.</p></article>
    </div>
</section>
<script>
(function(){
    var button=document.querySelector('[data-solarium-book]');
    var list=document.querySelector('[data-solarium-prices]');
    var api=document.body.getAttribute('data-api-url');
    if(!button||!list||!api)return;
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
        button.setAttribute('data-book-url',services[0].booking_url||button.getAttribute('data-book-url'));
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
