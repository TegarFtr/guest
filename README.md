<h1 align="center">GuestEvent</h1>

## Install

**Clone Repository**

```bash
git clone https://github.com/TegarFtr/guest.git
```

**Download zip**

```bash
extract file zip
```

## Buka di kode editor


## Install composer

```bash
composer install
```

## Copy .Env

```bash
copy .env.example menjadi .env
```

## Buka Web Server


## Buat database di localhost 

```bash
nama database : guestevent
```

## Setting database di .env

```bash
DB_PORT=3306
DB_DATABASE=guestevent
DB_USERNAME=root
DB_PASSWORD=
```

## Generate key

```bash
php artisan key:generate
```

## Jalankan migrate dan seeder

```bash
php artisan migrate --seed
```

## Buat Storage Link

```bash
php artisan storage:link
```

## Jalankan Serve

```bash
php artisan serve
```

## License

- Copyright © 2023.
