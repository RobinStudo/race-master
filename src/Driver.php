<?php
class Driver
{
    private string $name;
    private Vehicle $vehicle;
    private int $experience = 0;

    private static int $counter = 0;

    public function __construct(string $name, Vehicle $vehicle)
    {
        $this->name = $name;
        $this->vehicle = $vehicle;
        self::$counter++;
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

    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }

    public function ready(): void
    {
        $this->vehicle->addFuel(10);
        $this->vehicle->start();
    }

    public function drive(): void
    {
        $actionType = rand(1, 5);
        switch ($actionType) {
            case 1:
            case 2:
                $this->vehicle->accelerate(rand(1, 5));
                break;
            case 3:
                $this->vehicle->brake(rand(1, 5));
                break;
        }

        $success = rand(1, 100);
        $dammageChance = 10 + max(10, $this->vehicle->getSpeed());
        if($success < 3){
            $this->vehicle->recivedDammage(100);
        } else if($success < $dammageChance) {
            $this->vehicle->recivedDammage(10);
        }
    }

    public static function getCounter(): int
    {
        return self::$counter;
    }
}