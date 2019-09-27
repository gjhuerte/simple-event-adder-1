<?php

namespace App\Http\Enums;

class DaysEnum
{
    /**
     * Fetch the days as list
     *
     * @return array
     */
    public static function getDays()
    {
        return [
            'monday',
            'tuesday',
            'wednesday',
            'thursday',
            'friday',
            'saturday',
            'sunday',
        ];
    }
}
