<?php
class Driver
{
    private string $name;
    private Car $car;
    private int $experience = 0;

    public function getName(): string
    {
        return $this->name;
    }

    public function addExperience(int $bonus): void
    {
        $this->experience += $bonus;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function getCar(): Car
    {
        return $this->car;
    }

    public function drive(): void
    {

    }
}