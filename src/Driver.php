<?php
class Driver
{
    private string $name;
    private Car $car;
    private int $experience = 0;

    public function __construct(string $name, Car $car)
    {
        $this->name = $name;
        $this->car = $car;
    }

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

    public function ready(): void
    {
        $this->car->addFuel(10);
        $this->car->start();
    }

    public function drive(): void
    {
        $actionType = rand(1, 5);
        switch ($actionType) {
            case 1:
            case 2:
                $this->car->accelerate(rand(1, 5));
                break;
            case 3:
                $this->car->brake(rand(1, 5));
                break;
        }

        $success = rand(1, 100);
        $dammageChance = 10 + max(10, $this->car->getSpeed());
        if($success < 3){
            $this->car->recivedDammage(100);
        } else if($success < $dammageChance) {
            $this->car->recivedDammage(10);
        }


    }
}