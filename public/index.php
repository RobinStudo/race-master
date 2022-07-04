<?php
require_once "../src/Vehicle/Vehicle.php";
require_once "../src/Vehicle/Car.php";
require_once "../src/Vehicle/Motorcycle.php";
require_once "../src/Vehicle/Truck.php";

require_once "../src/Driver.php";
require_once "../src/Race.php";

$ferrari = new Car('Ferrari', 'F450', '#e74c3c');
$audi = new Car('Audi', 'R8', '#2c3e50');
$renault = new Car('Renault', 'Megane RS', '#f39c12');
$ducati = new Motorcycle('Ducati', 'Monstro', '#ff00ff');
$scania = new Truck('Scania', 'F120', '#ffff00');

$sam = new Driver('Sam', $ferrari);
$paul = new Driver('Paul', $audi);
$didier = new Driver('Didier', $renault);
$robert = new Driver('Robert', $ducati);
$jean = new Driver('Jean', $scania);

$monzaRace = new Race('Monza', 10);
$monzaRace->addDrivers($sam, $paul, $didier, $robert, $jean);

$monzaRace->start();

foreach ($monzaRace->getDrivers() as $driver){
    echo $driver->getName() . '<br>';
    echo $driver->getVehicle()->getSpeed() . ' m/s - ' . $driver->getVehicle()->getState() . '% <br>';
}

// Pouvoir compter les joeurs dans le jeu
// Méthode pour générer une course automatiquement
// Utiliser des constantes pour rendre plus lisible la météo