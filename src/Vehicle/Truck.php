<?php
namespace App\Vehicle;

final class Truck extends Vehicle
{
    private int $state = 200;

    public function repair(): void
    {
        $this->state = 200;
    }
}