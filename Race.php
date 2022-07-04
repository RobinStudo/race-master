<?php

class Race
{
    private string $circuit;
    private array $drivers = [];
    private int $laps;
    private int $weather;

    public function __construct(string $circuit, int $laps = 5, int $weather = 1)
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

    }

    public function resolveLap(): void
    {

    }

    public function getDrivers(): array
    {
        return $this->drivers;
    }
}