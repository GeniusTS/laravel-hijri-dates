<?php

return [
    // Adjustment days
    'adjustment'     => 0,

    // translation class
    'translation'    => \GeniusTS\LaravelHijri\Translations\Laravel::class,

    // default toSting format class
    'toStringFormat' => 'Y-m-d H:i:s',

    // default numeric system
    'numeric_system' => \GeniusTS\HijriDate\Date::ARABIC_NUMBERS,
];