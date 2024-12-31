<?php
$con=new mysqli("localhost","root","","onlinefitnesstrainer");

if($con->connect_error)
{
    die("Connection failed: ".$con->connect_error);
}
?>