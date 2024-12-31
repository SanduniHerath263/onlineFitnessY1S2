<?php

require 'config.php';

$itemID=$_POST["ID"];
$itemN=$_POST["iname"];
$itemP=$_POST["iprice"];
$itemQ=$_POST["iQunt"];
$temI=$_POST["iimage"];

$sql="INSERT INTO product VALUES('$itemID','$itemN','$itemP','$itemQ','$temI')";

if($connection->query($sql)){
    echo "Insert Successful";
}
else{
    echo "Error".$connection->error;
}

$connection->close();

?>