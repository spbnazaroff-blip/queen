(function(){
  'use strict';
  var body=document.body;
  var apiUrl=body.getAttribute('data-api-url')||'';
  var bookingUrl=body.getAttribute('data-booking-url')||'#';
  var realOrder=[
    'evgeniya-mazurik',
    'nazarova-lyubov-vladimirovna',
    'nazarova-ekaterina-aleksandrovna',
    'anastasiya-razumova',
    'angelina',
    'oksana-nekrasova'
  ];

  var fallbackStaff=[
    {id:'fallback-evgeniya',public_slug:'evgeniya-mazurik',name:'Евгения Мазурик',first_name:'Евгения',last_name:'Мазурик',specialty:'Парикмахер, стилист причёсок',avatar_url:null,booking_url:bookingUrl,services:[]},
    {id:'fallback-lyubov',public_slug:'nazarova-lyubov-vladimirovna',name:'Назарова Любовь Владимировна',first_name:'Любовь',last_name:'Назарова',specialty:'Мастер депиляции, бровист, мастер по наращиванию ресниц, мастер биотатуажа',avatar_url:null,booking_url:bookingUrl,services:[
      {name:'Тотальное бикини',category:'Шугаринг женский',duration_minutes:30,price:1800,booking_url:bookingUrl},
      {name:'Ламинирование бровей',category:'Брови',duration_minutes:60,price:2000,booking_url:bookingUrl},
      {name:'Ламинирование ресниц',category:'Ресницы',duration_minutes:90,price:2000,booking_url:bookingUrl}
    ]},
    {id:'fallback-ekaterina',public_slug:'nazarova-ekaterina-aleksandrovna',name:'Назарова Екатерина Александровна',first_name:'Екатерина',last_name:'Назарова',specialty:'Мастер маникюра, мастер педикюра, мастер ногтевого сервиса',avatar_url:null,booking_url:bookingUrl,services:[
      {name:'Маникюр',category:'Маникюр женский',duration_minutes:50,price:1100,booking_url:bookingUrl},
      {name:'Маникюр + покрытие гель-лак',category:'Маникюр женский',duration_minutes:120,price:2100,booking_url:bookingUrl},
      {name:'Smart педикюр',category:'Педикюр женский',duration_minutes:90,price:2000,booking_url:bookingUrl}
    ]},
    {id:'fallback-anastasiya',public_slug:'anastasiya-razumova',name:'Разумова Анастасия',first_name:'Анастасия',last_name:'Разумова',specialty:'Мастер маникюра, мастер педикюра, мастер по наращиванию ногтей, мастер ногтевого сервиса',avatar_url:null,booking_url:bookingUrl,services:[
      {name:'Маникюр',category:'Маникюр женский',duration_minutes:50,price:1100,booking_url:bookingUrl},
      {name:'Маникюр + наращивание + покрытие',category:'Наращивание ногтей',duration_minutes:180,price:3000,booking_url:bookingUrl},
      {name:'Smart педикюр + покрытие гель-лак',category:'Педикюр женский',duration_minutes:120,price:2800,booking_url:bookingUrl}
    ]},
    {id:'fallback-angelina',public_slug:'angelina',name:'Ангелина',first_name:'Ангелина',last_name:'',specialty:'Мастер по наращиванию ресниц',avatar_url:null,booking_url:bookingUrl,services:[]},
    {id:'fallback-oksana',public_slug:'oksana-nekrasova',name:'Оксана Некрасова',first_name:'Оксана',last_name:'Некрасова',specialty:'Массажист',avatar_url:null,booking_url:bookingUrl,services:[
      {name:'Общий классический массаж',category:'Массаж',duration_minutes:60,price:3000,booking_url:bookingUrl},
      {name:'Массаж шейно-воротниковой зоны',category:'Массаж',duration_minutes:20,price:1500,booking_url:bookingUrl},
      {name:'Антицеллюлитный массаж',category:'Массаж',duration_minutes:50,price:4500,booking_url:bookingUrl}
    ]}
  ];

  function escapeHtml(value){
    return String(value==null?'':value).replace(/[&<>'"]/g,function(char){return {'&':'&amp;','<':'&lt;','>':'&gt;',"'":'&#039;','"':'&quot;'}[char]});
  }
  function roleType(member){
    var value=String(member.specialty||'').toLowerCase();
    if(/маникюр|педикюр|ногт/.test(value))return'nails';
    if(/шугар|депил/.test(value))return'sugaring';
    if(/бров|биотатуаж/.test(value))return'brows';
    if(/ресниц|лешмейкер/.test(value))return'lashes';
    if(/массаж/.test(value))return'massage';
    if(/парикмах|стилист|волос/.test(value))return'hair';
    return'other';
  }
  function initials(member){
    var first=String(member.first_name||member.name||'Q').trim().charAt(0);
    var last=String(member.last_name||'').trim().charAt(0);
    return(first+last).toUpperCase();
  }
  function roleDescription(type){
    if(type==='hair')return'Стрижки, укладки и работа с образом.';
    if(type==='nails')return'Маникюр, педикюр, покрытие и ногтевой сервис.';
    if(type==='sugaring')return'Деликатная депиляция и комфортный уход за кожей.';
    if(type==='brows')return'Оформление бровей, окрашивание и биотатуаж.';
    if(type==='lashes')return'Наращивание, ламинирование и уход за ресницами.';
    if(type==='massage')return'Массаж, восстановление и уход за телом.';
    return'Профессиональные услуги и индивидуальный подход.';
  }
  function selectFeatured(source){
    var staff=Array.isArray(source)?source.slice():[];
    var result=[];
    realOrder.forEach(function(slug){
      var found=staff.find(function(member){return String(member.public_slug||'')===slug;});
      if(!found){found=fallbackStaff.find(function(member){return member.public_slug===slug;});}
      if(found)result.push(found);
    });
    return result;
  }
  function masterCard(member){
    var type=roleType(member);
    var services=(member.services||[]).slice(0,3);
    var photo=member.avatar_url
      ?'<img src="'+escapeHtml(member.avatar_url)+'" alt="'+escapeHtml(member.name)+'" loading="lazy">'
      :'<span class="master-initials">'+escapeHtml(initials(member))+'</span>';
    var chips=services.map(function(service){return'<span>'+escapeHtml(service.name)+'</span>';}).join('');
    if(!chips)chips='<span>Прайс уточняется</span>';
    return'<article class="master-card">'+
      '<div class="master-photo">'+photo+'</div>'+
      '<div class="master-body"><small>'+escapeHtml(member.specialty||'Специалист')+'</small><h3>'+escapeHtml(member.name)+'</h3>'+
      '<p>'+escapeHtml(roleDescription(type))+'</p><div class="master-services">'+chips+'</div>'+
      '<button class="button button-dark js-book" type="button" data-book-url="'+escapeHtml(member.booking_url||bookingUrl)+'">Записаться</button></div></article>';
  }
  function renderTeam(staff){
    var featured=selectFeatured(staff);
    document.querySelectorAll('[data-queen-team]').forEach(function(container){
      var limit=parseInt(container.getAttribute('data-limit')||'0',10);
      var list=limit>0?featured.slice(0,limit):featured;
      container.innerHTML=list.map(masterCard).join('');
    });
  }
  function collectServices(staff){
    var found={};
    (staff||[]).forEach(function(member){
      (member.services||[]).forEach(function(service){
        var key=(member.public_slug||member.id)+'|'+(service.id||service.category+'|'+service.name);
        found[key]=service;
      });
    });
    return Object.keys(found).map(function(key){return found[key];});
  }
  function renderServices(staff){
    var selected=selectFeatured(staff);
    var services=collectServices(selected);
    if(!services.length)services=collectServices(fallbackStaff);
    var groups={};
    services.forEach(function(service){
      var category=service.category||'Другие услуги';
      if(!groups[category])groups[category]=[];
      groups[category].push(service);
    });
    var preferred=['Волосы','Маникюр женский','Педикюр женский','Наращивание ногтей','Брови','Ресницы','Шугаринг женский','Шугаринг мужской','Массаж','Косметология','Аппаратные процедуры','Уход за лицом'];
    var categories=Object.keys(groups).sort(function(a,b){
      var ai=preferred.indexOf(a),bi=preferred.indexOf(b);
      if(ai<0)ai=999;if(bi<0)bi=999;
      return ai-bi||a.localeCompare(b,'ru');
    });
    document.querySelectorAll('[data-queen-services]').forEach(function(container){
      container.innerHTML=categories.map(function(category){
        var rows=groups[category].map(function(service){
          var price=new Intl.NumberFormat('ru-RU',{maximumFractionDigits:0}).format(Number(service.price||0))+' ₽';
          return'<div class="price-row"><div><strong>'+escapeHtml(service.name)+'</strong><small>'+escapeHtml(service.duration_minutes||'')+' мин.</small></div><b>'+price+'</b><button class="mini-book js-book" type="button" data-book-url="'+escapeHtml(service.booking_url||bookingUrl)+'">Записаться</button></div>';
        }).join('');
        return'<section class="service-group"><h2>'+escapeHtml(category)+'</h2><div class="price-list">'+rows+'</div></section>';
      }).join('');
    });
  }

  var menuToggle=document.querySelector('[data-menu-toggle]');
  var mainNav=document.querySelector('[data-main-nav]');
  if(menuToggle&&mainNav){
    menuToggle.addEventListener('click',function(){mainNav.classList.toggle('open');});
    mainNav.addEventListener('click',function(){mainNav.classList.remove('open');});
  }

  var modal=document.querySelector('[data-booking-modal]');
  var frame=document.querySelector('[data-booking-frame]');
  function openBooking(url){
    if(!modal||!frame){window.open(url||bookingUrl,'_blank','noopener');return;}
    frame.src=url||bookingUrl;
    modal.classList.add('open');
    modal.setAttribute('aria-hidden','false');
    body.classList.add('modal-open');
  }
  function closeBooking(){
    if(!modal||!frame)return;
    modal.classList.remove('open');
    modal.setAttribute('aria-hidden','true');
    frame.src='about:blank';
    body.classList.remove('modal-open');
  }
  document.addEventListener('click',function(event){
    var button=event.target.closest('.js-book');
    if(button){event.preventDefault();openBooking(button.getAttribute('data-book-url')||bookingUrl);}
    if(event.target.closest('[data-booking-close]'))closeBooking();
  });
  document.addEventListener('keydown',function(event){if(event.key==='Escape')closeBooking();});

  renderTeam([]);
  renderServices([]);
  if(apiUrl){
    fetch(apiUrl,{headers:{'Accept':'application/json'}})
      .then(function(response){if(!response.ok)throw new Error('API '+response.status);return response.json();})
      .then(function(data){if(!data||!data.ok)throw new Error('Invalid response');renderTeam(data.staff||[]);renderServices(data.staff||[]);})
      .catch(function(){/* Fallback content remains visible. */});
  }
})();
