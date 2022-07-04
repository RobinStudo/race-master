<?php
$ferrari = new Car();
$audi = new Car();
$renault = new Car();

$sam = new Driver();
$paul = new Driver();
$didier = new Driver();

$monzaRace = new Race();
$monzaRace->addDrivers($sam, $paul, $didier);

$monzaRace->start();
