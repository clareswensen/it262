<?php // validation for required fields with error messages
// define variables and set to empty values
$input_temp_Err = $input_unit_Err = $result_unit_Err = "";
$input_temp = $input_unit = $result_temp = $result_unit =  "";

if ($_SERVER["REQUST_METHOD"] = "POST"){
    if (empty($_POST["input_temp"])) {
        $input_temp_Err = "Please enter temperature value";
    }else{
        $input_temp = test_input($_POST["input_temp"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>