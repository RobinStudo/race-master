<?php
namespace App\Util;

interface Destructible
{
    public function recivedDammage(int $dammage): void;
}