<?php

require 'config1.php';


$Fnam=$_POST["firstName"];
$Lnam=$_POST["lastName"];
$cr=$_POST["country_region"];
$add=$_POST["address"];
$town=$_POST["town_city"];
$mob=$_POST["mobile"];
$eadd=$_POST["email_address"];
$addi=$_POST["additional_information"];


$sql="INSERT INTO payment1 VALUES ('$Fnam','$Lnam','$cr','$add','$town','$mob','$eadd','$addi')";

if($con->query($sql))
{
    echo "Insert Successful";
}
else {
    echo "Error".$con->error;
}

$con->close();