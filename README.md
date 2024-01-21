# DatetimeCalculation

## Requirements

- PHP 8.0+

## Installation

```shell
composer require ishidayuka/datetime-calculation
```

## Usage

- Sum Time Aggregation Calculations on DateTimeInterface Instances

```php
<?php
$sum = DatetimeCalculation\DatetimeCalculation::add([
        Carbon::parse('2023-01-01 9:00')->diff(Carbon::parse('2023-01-02 1:15')),
        Carbon::parse('2023-01-02 9:00')->diff(Carbon::parse('2023-01-03 2:30')),
      ]);
var_dump($sum);  // string(5) "33:45"
```
