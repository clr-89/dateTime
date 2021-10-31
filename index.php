<?php

$presentTime = new DateTime('NOW');
$destinationTime = new DateTime('2022-04-05 01:25');

echo 'Date of the day : '. $presentTime->format('M j Y A h i'), '.<br>', PHP_EOL;
echo 'Date of the destination : '.$destinationTime->format('M j Y A h i'), '.<br>', PHP_EOL;

$interval = $presentTime->diff($destinationTime);
echo 'Time to the destination :  ', $interval->format(" %Y year(s) %M month(s) %D day(s) %h hour(s) %i minute(s) %s second(s)"),'.<br>', PHP_EOL;

$days= $interval->days;
$minutes= $days*1440;

echo 'Minutes to the destination : '.$minutes.'<br>', PHP_EOL;

$gazoleLiters= $minutes/10000;

echo 'Liters of gazoline to the destination : '.$gazoleLiters. ' litres';




