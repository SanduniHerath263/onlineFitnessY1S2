<?php

$con=new mysqli("localhost","root","","OnlineFitnessTrainer");

if($con->connect_error)
{
    die("connectionfailed".$con->connect_error);
}

?>