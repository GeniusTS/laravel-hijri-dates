<?php

namespace GeniusTS\LaravelHijri;


use GeniusTS\HijriDate\Date;
use GeniusTS\HijriDate\Hijri;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

/**
 * Class HijriDatesServiceProvider
 *
 * @package GeniusTS\LaravelHijri
 */
class HijriDatesServiceProvider extends ServiceProvider
{

    protected $configuration = __DIR__ . '/../resources/config/hijri-dates.php';

    protected $translations = __DIR__ . '/../resources/lang';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([$this->configuration => config_path('hijri-dates.php')], 'config');
        $this->publishes([$this->translations => resource_path('lang/vendor/hijri-dates/')], 'translation');

        $this->mergeConfigFrom($this->configuration, 'hijri-dates');
        $this->loadTranslationsFrom($this->translations, 'hijri-dates');

        $translation = Config::get('hijri-dates.translation');
        Date::setTranslation(new $translation);
        Date::setToStringFormat(Config::get('hijri-dates.toStringFormat'));
        Date::setDefaultNumbers(Config::get('hijri-dates.numeric_system'));

        Hijri::setDefaultAdjustment(Config::get('hijri-dates.adjustment'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}