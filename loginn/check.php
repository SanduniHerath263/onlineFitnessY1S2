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
}
else {
    echo "Error".$con->error;
}

$con->close();

