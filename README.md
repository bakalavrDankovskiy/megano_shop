# Устанавливаем зависимости Composer
```
./vendor/bin/sail composer install
```

# Запускаем Laravel Sail, предварительно установив Docker и docker-compose для Вашей системы
```
./vendor/bin/sail up -d
```

# Запускаем миграции
```
./vendor/bin/sail artisan migrate
```

# Компилируем frontend
```
./vendor/bin/sail npm run build
```

# Установка сидеров
```
./vendor/bin/sail artisan db:seed \\Database\\Seeders\\DemoDataSeeders\\DemoDataSeeder
```
