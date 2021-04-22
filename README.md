# Anforcom 2021 💻

# Installation
#### 1. clone
```
https://github.com/mkf450/Anforcom2021
```

#### 2. cd into Anforcom2021 directory

#### 3. Install composer
```
composer install
```

#### 4. copy .env.example
```
cp .env.example .env
```
Then change the settings
APP_NAME=Anforcom
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=anforcom

#### 5. key
```
php artisan key:generate
```

#### 6. migrate
```
php artisan migrate:fresh --seed
```

#### 7. Run
```
php artisan serve
```