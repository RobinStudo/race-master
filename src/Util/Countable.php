<?php
namespace App\Util;

trait Countable
{
    private static int $counter = 0;

    public static function incrementCounter()
    {
        self::$counter++;
    }

    public static function getCounter(): int
    {
        return self::$counter;
    }
}