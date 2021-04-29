<?php


class Speedometer
{

    public const CONVERT = 1.609;
    //public const MILES = 0.6214;

    public static function convertKmToMiles(float $km): ?float
    {
        return $km / self::CONVERT;
    }

    public static function convertMilesToKm(float $miles): ?float
    {
        return $miles * self::CONVERT ;
    }

}