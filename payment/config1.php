<?php
$con=new mysqli("localhost","root","","fitforge");
if($con->connect_error)
{
    die("connectionfailed".$con->connect_error);

}
?>