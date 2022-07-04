<?php
class Car{
    private string $brand;
    private string $model;
    private string $color;
    private bool $engine = false;
    private int $speed = 0;
    private int $state = 100;
    private float $fuel = 0;

    public function start(): bool
    {
        return true;
    }

    public function stop(): bool
    {
        return true;
    }

    public function accelerate(int $coefficient): void
    {

    }

    public function brake(int $coefficient): void
    {

    }

    public function getSpeed(): int
    {
        return 0;
    }

    public function recivedDammage(int $dammage): void
    {

    }

    public function repair(): void
    {

    }

    public function getState(): void
    {

    }

    public function addFuel(int $quantity): void
    {

    }

    public function getFuel(): int
    {
        return 0;
    }
}