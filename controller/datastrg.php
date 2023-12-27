

<?php

session_start();



$pass = $_REQUEST ["pass"];

$errors = [];

if(empty($pass)){
    $errors ['pass_error'] = "Enter your valid password";
}else if (strlen($pass) > 8){
    $errors [] = "use only 8 caharacter";
}

if (count($errors) > 0){

  $_SESSION['olddata'] = $_REQUEST;
  $_SESSION['errors'] = $errors;

  header("Location: inputpass.php");
}



?>



