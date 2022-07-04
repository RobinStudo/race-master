<?php

class Race
{
    private string $circuit;
    private array $drivers;
    private int $laps = 5;
    private int $weather = 1;

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