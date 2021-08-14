<?php

$tomorrow  = mktime(0, 0, 0, date("m"), date("d") + 1, date("Y"));
$lastmonth = mktime(0, 0, 0, date("m") - 1, date("d"),   date("Y"));
$nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y") + 1);

print($tomorrow);
echo "<br>";
print($lastmonth);
echo "<br>";
print($nextyear);
echo "<br>";

// デフォルトのタイムゾーンを設定します。
date_default_timezone_set('UTC');

// 出力: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo "<br>";
// 出力例: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006));
echo "<br>";
echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
echo "<br>";
echo "<br>";
echo date("M-d-Y", mktime(0, 0, 0, 13, 1, 1997));
echo "<br>";
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998));
echo "<br>";
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 98));
echo "<br>";

$lastday = mktime(0, 0, 0, 3, 0, 2000);
echo strftime("Last day in Feb 2000 is: %d", $lastday);
echo "<br>";
$lastday = mktime(0, 0, 0, 4, -31, 2000);
echo strftime("Last day in Feb 2000 is: %d", $lastday);
echo "<br>";

$date = new DateTime('2000-01-01');
echo $date->format('Y-m-d H:i:s');
echo "<br>";

$date = date_create('2000-01-01');
echo date_format($date, 'Y-m-d H:i:s');
echo "<br>";

$date = new DateTime('2020-04-23');
$timestamp = $date->getTimestamp();
echo "The timestamp is $timestamp.";
echo "<br>";

$time1 = strtotime('2019-04-02 10:41:10');
$time2 = strtotime('2018-04-01 11:11:11');
echo ($time1 - $time2) / (60 * 60 * 24);
echo "<br>";
echo (($time1 - $time2) % (60 * 60)) / 60;
echo "<br>";


$date = new DateTime('2019-04-01');
$date->add(new DateInterval('P1Y1M1D'));
echo $date->format('Y-m-d');
echo "<br>";

$date = new DateTime('2019-04-01');
$date->sub(new DateInterval('P1Y1M1D'));
echo $date->format('Y-m-d');
echo "<br>";

$now = new DateTime();
$time1 = new DateTime('2019-04-01 10:41:10');
$time2 = new DateTime('2019-04-01 11:11:11');

$date1 = $time1->format('Y-m-d');
$date2 = $time2->format('Y-m-d');
if ($date1 == $date2) {
    echo "同じ日"."<br>";
} else {
    echo "違う日"."<br>";
}

$diff = $time1->diff($time2);
echo $diff->format('%y年と%m月と%d日 %H %I %S'), PHP_EOL;
echo $diff->format('総日数は%a日');
echo "<br>";

$diff2 = $now->diff($time1);
echo $diff2->format('%y年と%m月と%d日 %H %I %S'), PHP_EOL;
echo $diff2->format('総日数は%a日');
echo "<br>";
