<?php
class Driver
{
    private string $name;
    private Car $car;
    private int $experience = 0;

    public function getName(): string
    {
        return '';
    }

    public function addExperience(int $bonus): void
    {

    }

    public function getExperience(): int
    {
        return 0;
    }

    public function getCar(): Car
    {
        return new Car();
    }

    public function drive(): void
    {

    }
}