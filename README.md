# Queen — канонический сайт студии красоты

Основной репозиторий проекта: `spbnazaroff-blip/queen`.

## Контуры

- TEST: `https://denisnazarov.online/coding/queen/`
- PRODUCTION: `https://queen.denisnazarov.online/`

TEST автоматически получает `noindex,nofollow` и тестовую плашку. На production-поддомене плашка не выводится.

## Каноническая команда Queen

На сайте и в активной части Clientra используются только 6 реальных специалистов:

1. Евгения Мазурик — `evgeniya-mazurik`
2. Назарова Любовь Владимировна — `nazarova-lyubov-vladimirovna`
3. Назарова Екатерина Александровна — `nazarova-ekaterina-aleksandrovna`
4. Разумова Анастасия — `anastasiya-razumova`
5. Ангелина — `angelina`
6. Оксана Некрасова — `oksana-nekrasova`

Старые демонстрационные/прототипные мастера не являются частью канонической версии.

## Связь с Clientra

CRM, календарь, услуги, цены и онлайн-запись живут в отдельном репозитории `spbnazaroff-blip/clientra`.

Queen получает публичные данные из:

`https://denisnazarov.online/coding/clientra/api/public.php?org=queen-spb`

Онлайн-запись:

`https://denisnazarov.online/coding/clientra/book/?org=queen-spb`

Clientra хранит базу, календарь, записи и мастерские профили. Queen является публичной витриной и использует организацию `queen-spb`.

В Clientra канонизация Queen выполняется seed-ом `app/seed-queen-canonical-v5.php`: лишние мастер-профили архивируются без физического удаления, чтобы не потерять связанную историю.

## Страницы сайта

- `index.php` — главная
- `services.php` — услуги и цены
- `masters.php` — специалисты
- `solarium.php` — солярий
- `contacts.php` — контакты

## Медиа

Серверные пользовательские загрузки не должны удаляться при деплое.

- `image/` — пользовательские/рабочие изображения
- `video/` — пользовательские/рабочие видео
- `assets/` — файлы сайта, которые входят в Git

## Правило проекта

`denisnazarov-coding/sites/queen` больше не является источником истины. Канонический исходник Queen — только `spbnazaroff-blip/queen`, ветка `main`.
