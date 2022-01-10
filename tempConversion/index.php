<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Temperature Conversion</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>

<?php
include 'includes/calculations.php';
include 'includes/validation.php';
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset>

        <legend>Temperature Conversion Calculator</legend>
    
        <p><span class="error">* required field</span></p>
        <label for="input_temp">Temperature to Convert: </label>
        <input type="number" name="input_temp" value="<?php if(isset($_POST['input_temp'])) echo htmlspecialchars($_POST['input_temp']);?>">
        <span class="error">* <?php echo $input_temp_Err;?></span>
        <label for="input_unit">Convert from: </label>
            <select name="input_unit">
                <option value="C" <?php if(isset($_POST['input_unit']) && $_POST['input_unit'] == 'C') echo 'selected="unselected"';?>>Celcius</option>
                <option value="F"<?php if(isset($_POST['input_unit']) && $_POST['input_unit'] == 'F') echo 'selected="unselected"';?>>Fahrenheit</option>
                <option value="K"<?php if(isset($_POST['input_unit']) && $_POST['input_unit'] == 'K') echo 'selected="unselected"';?>>Kelvin</option>
            </select>

        <label for="result_unit">Convert to: </label>
            <select name="result_unit">
                <option value="C"<?php if(isset($_POST['result_unit']) && $_POST['result_unit'] == 'C') echo 'selected="unselected"';?>>Celcius</option>
                <option value="F"<?php if(isset($_POST['result_unit']) && $_POST['result_unit'] == 'F') echo 'selected="unselected"';?>>Fahrenheit</option>
                <option value="K"<?php if(isset($_POST['result_unit']) && $_POST['result_unit'] == 'K') echo 'selected="unselected"';?>>Kelvin</option>
            </select>
            
        <input type="submit" name="submit" value="Convert!">
        <label for="results"><h2>Results: </h2></label>
        <?php

        if(isset($_POST['submit'])) {
            if(($_POST['input_unit'] == "F") && ($_POST['result_unit'] == "C")){
                $result_temp = fahrenheit_to_celsius($input_temp);
            }
            else if(($_POST['input_unit'] == "F") && ($_POST['result_unit'] == "K")){ 
                $result_temp = fahrenheit_to_kelvin($input_temp);
            }
            else if(($_POST['input_unit'] == "F") && ($_POST['result_unit'] == "F")){
                $result_temp = $input_temp;
                echo '--No conversion is needed, units are the same--';
            }
            else if(($_POST['input_unit'] == "C") && ($_POST['result_unit'] == "F")){
                $result_temp = celsius_to_fahrenheit($input_temp);
            }
            else if(($_POST['input_unit'] == "C") && ($_POST['result_unit'] == "K")){ 
                $result_temp = celsius_to_kelvin($input_temp);
            }
            else if(($_POST['input_unit'] == "C") && ($_POST['result_unit'] == "C")){
                $result_temp = $input_temp;
                echo '--No conversion is needed, units are the same--';
            }
            else if(($_POST['input_unit'] == "K") && ($_POST['result_unit'] == "F")){
                $result_temp = kelvin_to_fahrenheit($input_temp);
            }
            else if(($_POST['input_unit'] == "K") && ($_POST['result_unit'] == "C")){ 
                $result_temp = kelvin_to_celsius($input_temp);
            }
            else if(($_POST['input_unit'] == "K") && ($_POST['result_unit'] == "K")){
                $result_temp = $input_temp;
                echo '--No conversion is needed, units are the same--';
            }
            display_results($result_temp, $input_temp);
        } 
       

        ?>

        <p><a href="">Reset!</a></p>
        
    </fieldset>
</form>


</body>
</html>