<?php

Class Recipe
{


    public const THERMOSTAT_CONVERSION = 30;

    private $ingredients;
    private $duration;
    private $tools;
    // (...) etc.

    // (...) getters / setters, méthodes métiers, etc

    public static function retrieveTemperature(int $thermostat): ?int
    {
        return $thermostat * self::THERMOSTAT_CONVERSION;
    }
}