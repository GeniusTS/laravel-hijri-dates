<?php

namespace GeniusTS\LaravelHijri\Translations;


use GeniusTS\HijriDate\Translations\TranslationInterface;

/**
 * Class Laravel
 *
 * @package GeniusTS\LaravelHijri
 */
class Laravel implements TranslationInterface
{

    /**
     * get array of months names
     *
     * @return array
     */
    public function getHijriMonths(): array
    {
        return trans('hijri-dates::dates.months');
    }

    /**
     * get array of short days names
     * started from Sunday
     *
     * @return array
     */
    public function getShortDays(): array
    {
        return trans('hijri-dates::dates.short_days');
    }

    /**
     * get array of months names
     * started from Sunday
     *
     * @return array
     */
    public function getDays(): array
    {
        return trans('hijri-dates::dates.days');
    }

    /**
     * get array of periods
     *
     * @return array
     */
    public function getPeriods(): array
    {
        return trans('hijri-dates::dates.periods');
    }
}