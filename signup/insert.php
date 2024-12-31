<?php

require 'config.php';


$Fnam=$_POST["First__Name"];
$Lnam=$_POST["Last__Name"];
$Emai=$_POST["Email"];
$User=$_POST["UserName"];
$Pass=$_POST["Password"];


$sql="INSERT INTO signupp VALUES (NULL, '$Fnam','$Lnam','$Emai','$User','$Pass')";

if($con->query($sql))
{
    echo "Insert Successful";
    header('Location: '.$uri.'/onlinefitness/Home');
	exit;
}
else {
    echo "Error".$con->error;
}

$con->close();

