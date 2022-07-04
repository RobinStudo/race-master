<?php
class Vehicle{
    const MAX_SPEED = 10;
    private string $brand;
    private string $model;
    private string $color;
    private bool $engine = false;
    private int $speed = 0;
    private int $state = 100;
    private float $fuel = 0;

    public function __construct(string $brand, string $model, string $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function start(): bool
    {
        if ($this->getFuel() > 0 && $this->getState() > 0) {
            $this->engine = true;
        }

        return $this->engine;
    }

    public function stop(): void
    {
        if ($this->speed > 0) {
            $this->recivedDammage(10);
            $this->speed = 0;
        }

        $this->engine = false;
    }

    public function accelerate(int $coefficient): void
    {
        if($this->engine){
            $this->speed = min($this->speed + $coefficient, self::MAX_SPEED);
        }
    }

    public function brake(int $coefficient): void
    {
        $this->speed -= $coefficient;

        if($this->speed <= 0){
            $this->speed = 0;
        }
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function recivedDammage(int $dammage): void
    {
        $this->state = max(0, $this->state - $dammage);

        if ($this->state === 0) {
            $this->engine = false;
            $this->speed = 0;
        }
    }

    public function repair(): void
    {
        $this->state = 100;
    }

    public function getState(): int
    {
        return $this->state;
    }

    public function addFuel(int $quantity): void
    {
        $this->fuel += $quantity;
    }

    public function getFuel(): int
    {
        return $this->fuel;
    }
}