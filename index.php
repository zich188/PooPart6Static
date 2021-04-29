<?php

require 'Recipe.php';
require 'Speedometer.php';

/*var_dump(Recipe::retrieveTemperature(5));

var_dump(Speedometer::convertKmToMiles(10));

var_dump(Speedometer::convertMilesToKm(10));*/

echo '58 Km = ' .number_format(Speedometer::convertkmToMiles(58), 2,',' ) .' Miles';
echo '<br>';
echo '58 Miles  = ' .number_format(Speedometer::convertMilesToKm(58), 2,',' ) .' Km';

