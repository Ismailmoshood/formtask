<?php

$name =$_POST['name'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$gender= $_POST['gender'];
$country = $_POST['country'];


$file = "./userdata.csv";
$handle = fopen($file, "a");
fwrite($handle, "Data submitted by $name \n");
fwrite($handle, "NAME:$name \n");
fwrite($handle, "EMAIL:$email \n");
fwrite($handle, "DOB:$DOB \n");
fwrite($handle, "GENGER:$gender \n");
fwrite($handle, "COUNTRY:$country \n");
fwrite($handle, "\n");
fclose($handle);

print_r($_POST);
?>