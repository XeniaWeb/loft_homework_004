<?php
include "src/Interfaces/AgeInterface.php";
include "src/Interfaces/PriceDistanceInterfaces.php";
include "src/Interfaces/PriceExtraInterface.php";
include "src/Interfaces/PriceTimeInterface.php";
include "src/Interfaces/RateInterface.php";
include "src/Interfaces/RecountTime.php";
include "src/Classes/AbstractRate.php";
include "src/Classes/RateBase.php";
include "src/Classes/RateDaily.php";
include "src/Classes/RateHourly.php";
include "src/Classes/RateStudent.php";
include "src/Traits/Driver.php";

use App\Classes\RateBase;
use App\Classes\RateDaily;
use App\Classes\RateHourly;
use App\Classes\RateStudent;

echo '<pre>';
$order = new RateBase(18, 4,350, true);
$totalPay = $order->calculatePrice();
echo "Оплатите по Базовому тарифу  " . $totalPay . " рублей и можете ехать!" . PHP_EOL;

$order = new RateDaily(29,400, 6, true, true);
$totalPay = $order->calculatePrice();
echo "Оплатите по Суточному тарифу  " . $totalPay . " рублей и можете ехать!" . PHP_EOL;

$order = new RateHourly(27, 100, 5, true, true);
$totalPay = $order->calculatePrice();
echo "Оплатите по Часовому тарифу  " . $totalPay . " рублей и можете ехать!" . PHP_EOL;

$order = new RateStudent(25, 100, 50, true);
$totalPay = $order->calculatePrice();
echo "Оплатите по Студенческому тарифу  " . $totalPay . " рублей и можете ехать!" . PHP_EOL;
echo '<pre>';

