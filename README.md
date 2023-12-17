# My Posts Site

Добро пожаловать в мой репозиторий!

Сайт предназначен для создания, хранения, отображения и удаления постов.

**Стек технологий:**
- SPA Laravel 9 + Inertia Breeze
- Tailwind CSS и Vite
- SPA CRUD Inertia

## Необходимые действия для корректного запуска:

1. Установите [Composer](https://getcomposer.org/download/).
2. Загрузите [PHP](https://www.php.net/downloads.php).
3. В конфигурационном файле PHP (php.ini) уберите комментарий перед строкой `extension=pdo_sqlite`.
4. В командной строке проекта выполните следующие команды:

    ```bash
    composer require laravel/breeze --dev
    php artisan breeze:install vue
    ```

5. Запустите сервер командой:

    ```bash
    php artisan serve
    ```

6. Откройте вторую командную строку и запустите Vite сервер:

    ```bash
    vite
    ```

Готово! 
