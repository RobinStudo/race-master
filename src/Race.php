<?php

class Race
{
    const WEATHER_SUNNY = 1;
    const WEATHER_RAINY = 2;
    const WEATHER_SNOWY = 3;

    private string $circuit;
    private array $drivers = [];
    private int $laps;
    private int $weather;

    public function __construct(string $circuit, int $laps = 5, int $weather = self::WEATHER_SUNNY)
    {
        $this->circuit = $circuit;
        $this->laps = $laps;
        $this->weather = $weather;
    }

    public function addDrivers(Driver ...$drivers): void
    {
        array_push($this->drivers, ...$drivers);
    }

    public function start(): void
    {
        foreach ($this->drivers as $driver) {
            $driver->ready();
        }

        for ($i = 0; $i < $this->laps; $i++) {
            $this->resolveLap();
        }
    }

    public function resolveLap(): void
    {
        foreach ($this->drivers as $driver) {
            $driver->drive();
        }

        usort($this->drivers, function(Driver $driver1, Driver $driver2){
            $driver1State = $driver1->getVehicle()->getState();
            $driver2State = $driver2->getVehicle()->getState();
            if ($driver1State === 0 && $driver2State === 0) {
                return 0;
            }else if($driver1State === 0){
                return 1;
            }else if($driver2State === 0){
                return -1;
            }

            return $driver2->getVehicle()->getSpeed() - $driver1->getVehicle()->getSpeed();
        });
    }

    public function getDrivers(): array
    {
        return $this->drivers;
    }

    public static function generate(): self
    {
        $circuits = ['SPA', 'Monaco', 'Miami', 'Indianapolis', 'Silerstone'];
        $selectedCircuit = $circuits[array_rand($circuits)];

        return new self($selectedCircuit, rand(4, 15), rand(1, 3));
    }
}