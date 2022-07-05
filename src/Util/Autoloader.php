<?php
namespace App\Util;

class Autoloader
{
    public static function register(): void
    {
        spl_autoload_register(array(self::class, 'load'));
    }

    public static function load(string $classname): void
    {
        $path = str_replace('App', '../src', $classname);
        $path = str_replace('\\', '/', $path);
        require_once sprintf('%s.php', $path);
    }
}