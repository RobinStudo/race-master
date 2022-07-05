<?php
namespace App\Vehicle;

final class Motorcycle extends Vehicle
{
    const MAX_SPEED = 20;

    public function repair(): void
    {
        $this->state = 100;
    }
}