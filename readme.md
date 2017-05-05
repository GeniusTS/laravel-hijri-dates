# Hijri dates for Laravel 5.x

## Installation

### Composer

```bash
	composer require geniusts/laravel-hijri-dates
```

### Service Provider

Add the package to your application service providers in `config/app.php` file.

```php
    'providers' => [
        ...

        /**
         * Third Party Service Providers...
         */
        GeniusTS\LaravelHijri\HijriDatesServiceProvider::class,

    ],
```

### Config File

```php
    php artisan vendor:publish --provider="GeniusTS\LaravelHijri\HijriDatesServiceProvider" --tag=config
```

## Usage

Usage documentation available in [hijri-dates](https://github.com/GeniusTS/hijri-dates) repository.

### translation

* Add new language:
    * create new directory under `resources/lang/vendor/hijri-dates` in your application files.
    * Add `dates.php` file under the new directory. it should return array with the same structure
    of package translation files.

* change default translation:

the following function export default translation to `resources/lang/vendor/hijri-dates` in your application files.

```php
    php artisan vendor:publish --provider="GeniusTS\LaravelHijri\HijriDatesServiceProvider" --tag=translation
```

---

## License

This package is free software distributed under the terms of the MIT license.
