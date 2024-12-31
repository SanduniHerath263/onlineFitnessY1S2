<?php

//the connection object

$con=new mysqli("localhost","root","","contactus");

//check connection

if($con->connect_error)
{
	die("connection failed:".$con->connect_error);
}


?>