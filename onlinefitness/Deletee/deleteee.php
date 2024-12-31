<?php

require 'configd.php';

$ID=$_POST["tid"];

$sql="DELETE FROM trainers1 WHERE TrainerID='$ID'";

if($con->query($sql))
{
    echo "Deleted";
}
else{
    echo "NOt successfull";
}


?>