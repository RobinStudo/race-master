<?php
namespace App\Vehicle;

final class Car extends Vehicle
{
    const MAX_SPEED = 15;
    private int $state = 150;

    public function repair(): void
    {
        $this->state = 150;
    }
}