# ABITU

## Запуск

1. Скопировать репозиторий
2. Запустить Docker
3. Выполнить команду 'cd pstgu && ./vendor/bin/sail up'
4. Открыть http://localhost

## Стек

- PHP 8.0
- Laravel 11.0
- Docker
- Bootstrap 5.0
- MySQL
- Хэширование пароля
- Панорамы ВУЗа

## Реализовано (20 апр, 3/3)

- Главная страница
- Дизайн проекта
- Страница авторизации
- Страница о проекте (about)
- Страница ответов на вопросы (faq)
- Личный кабинет
- Авторизация в аккаунт
- Создание аккаунта
- Подтверждение аккаунта от модератора
- Список ВУЗов
- Панорама ВУЗа
- Фотографии ВУЗа
- Проверка фотографии на существование

## Таблицы базы данных

- users
- views
- universities
- feedback

## О проекте

ABITU - сервис для абитуриентов , который поможет им с ознакомлением и дальнейшим выбором вуза . Здесь вы можете общаться с другими абитуриентами и студентами , смотреть всю известную информацию о доступных вузах , а при желании более детального ознакомления можно связаться с представителем вуза для дополнительных вопросов или видео связи .

## Актуальность

-Простой и понятный дизайн
-Потенциально безграничное количество вузов (зависит только от того , как много представителей зарегистрируют свой вуз)
-Честные и справедливые отзывы
-Вся доступная по вузу информация содержится в одном месте

## Безопасность

Применяется хэширование к паролю. Применяются SESSION  (сессии). COOKIE шифруются.
