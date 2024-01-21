<?php

namespace DatetimeCalculationTest\Test;

use DatetimeCalculation\DatetimeCalculation;
use PHPUnit\Framework\TestCase;
use Carbon\Carbon;

class DatetimeCalculationTest extends TestCase
{
    public function testAdd()
    {
      $res = DatetimeCalculation::add([
        Carbon::parse('2023-01-01 9:00')->diff(Carbon::parse('2023-01-02 1:15')),
        Carbon::parse('2023-01-02 9:00')->diff(Carbon::parse('2023-01-03 2:30')),
      ]);
      $this->assertEquals('33:45', $res);
    }
}