<?php

/**
 * You can have static classes in php but
 * you don't call the constructor automatically
 * (if you try and call self::__construct() than you'll get an error).
 * Therefore we have to create a initialize() function and call it in each method
 *
 *
 */

class Hello
{
    private static $greeting = 'Hello ';
    private static $initialize = false;

    private static function initialize()
    {
        if (self::$initialize)
            return;

        self::$greeting .= 'There!';
        self::$initialize = true;
    }

    public static function greet()
    {
        self::initialize();

        echo self::$greeting;
    }
}
