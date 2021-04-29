<?php

$presentTime = new DateTime('NOW', new DateTimeZone('Europe/Paris'));

//var_dump($presentTime);

echo 'Present time : ' .$presentTime->format('m-d-Y\ A h-i');

$destinationTime = new DateTime();

$destinationTime->setDate(2023, 04, 19);
$destinationTime->setTime(07, 3,20);

echo '<br>';
//var_dump($destinationTime);

echo 'Destination time : '. $destinationTime->format('m-d-Y\ A h-i');

echo '<br>';
echo '<br>';

$interval = $presentTime->diff($destinationTime);
echo 'Il y\'a : ' .$interval->format('%R%a jours') . " de différence";

echo '<br>';
echo '<br>';


echo 'Il y\'a : ' . $interval->format('%y Year, %m Month, %d Day, %h Hours et %i Minutes') .' qui sépare la date de aujourd\'hui et la date d\'arrivée';

echo '<br>';
echo '<br>';


echo $intervalSecond = $interval->format('%a') * 60; echo " jours d'interval entre les deux dates";

echo '<br>';
echo '<br>';

$gasRequired = $intervalSecond / 10.000;
echo "La quantité de carburant nécessaire au trajet est de " . $gasRequired . " litres";
