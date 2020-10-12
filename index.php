<?php

// index.php

require_once 'car.php';
require_once 'bicycle.php';
require_once 'vehicle.php';
require_once 'truck.php';

$fordTransit = new Truck("black", 4, 1000, "fuel",100);
$scania =  new Truck("white", 4, 4500,"fuel", 53);


echo $fordTransit->isTruckFull() . " (Ford Transit Energy) <br>";

echo $scania->isTruckFull() . "(Scania Energy) <br>";

echo $fordTransit->forward();
echo $fordTransit->brake() . "<br>";

echo $fordTransit->getCurrentLoad() . "- Current load";
echo $fordTransit->setCurrentLoad(100);