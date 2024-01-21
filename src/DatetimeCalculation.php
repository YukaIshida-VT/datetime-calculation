<?php

namespace DatetimeCalculation;

/**
 * Class Utility
 * @package DatetimeCalculation
 */
class DatetimeCalculation
{
    /**
     * @param  array $array
     * arrayの各要素はDateTimeInterface
     * @return string
     */
    public static function add($array)
    {
      $minutes = 0;
      foreach ($array as $date) {
        // 各要素を分に変換して足し合わせる
        $minutes += $date->days * 24 * 60 +  $date->h * 60 + $date->i;
      }

      return sprintf('%d:%02d', intdiv($minutes, 60), $minutes % 60);
    }
}