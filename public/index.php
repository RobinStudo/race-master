<?php
require_once "../src/Car.php";
require_once "../src/Driver.php";
require_once "../src/Race.php";

$ferrari = new Car('Ferrari', 'F450', '#e74c3c');
$audi = new Car('Audi', 'R8', '#2c3e50');
$renault = new Car('Renault', 'Megane RS', '#f39c12');

$sam = new Driver('Sam', $ferrari);
$paul = new Driver('Paul', $audi);
$didier = new Driver('Didier', $renault);

$monzaRace = new Race('Monza', 10);
$monzaRace->addDrivers($sam, $paul, $didier);

$monzaRace->start();

foreach ($monzaRace->getDrivers() as $driver){
    echo $driver->getName() . '<br>';
    echo $driver->getCar()->getSpeed() . ' m/s - ' . $driver->getCar()->getState() . '% <br>';
}
