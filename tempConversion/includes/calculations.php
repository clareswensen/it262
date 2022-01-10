<!-- Convert user input temperature to/from either Celcius, Fahrenheit, or Kelvin
Celsius to Fahrenheit ° F = 9/5 ( ° C) + 32
Fahrenheit to Celsius ° C = 5/9 (° F - 32)
Celsius to Kelvin K = ° C + 273.15
Kelvin to Celsius ° C = K - 273.15
Fahrenheit to Kelvin K = 5/9 (° F - 32) + 273.15
Kelvin to Fahrenheit ° F = 9/5 (K - 273.15) + 32 
-->
<?php
//Fahrenheit to celsius
function fahrenheit_to_celsius($input_temp) {
	$result_temp = 5/9 * ($input_temp - 32);
	return round($result_temp,2);
}
//Fahrenheit to kelvin
function fahrenheit_to_kelvin($input_temp) {
	$result_temp = fahrenheit_to_celsius($input_temp) + 273.15;
	return round($result_temp,2);
}
//Celsius to fahrenheit
function celsius_to_fahrenheit($input_temp) {
	$result_temp = $input_temp * 9/5 + 32;
	return round($result_temp,2);
}
//Celsius to kelvin 
function celsius_to_kelvin($input_temp)
{
	$kelvin=$input_temp+273.15;
	return $kelvin ;
}
//Kelvin to fahrenheit equation
function kelvin_to_fahrenheit($input_temp)
{
	$fahrenheit=9/5*($input_temp-273.15)+32;
	return $fahrenheit ;
}
//Kelvin to celsius equation
function kelvin_to_celsius($input_temp)
{
	$celsius=$input_temp-273.15;
	return $celsius ;
}

function display_results($result_temp, $input_temp)
{
	echo '<h3>' . $input_temp . '°' . $_POST['input_unit'] . ' converts to ' .$result_temp . '°' . $_POST['result_unit'] . '</h3>';
}