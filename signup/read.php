<?php
require 'config.php';

$sql="SELECT UserID,FirstName,LastName,Email,UserNamee,Password FROM signup1";

$result=$con->query($sql);

if($result->num_rows>0)
    {
        while($result->fetch_assoc())
        {
            echo $row["UserID"]." ".$row["FirstName"]." ".$row["LastName"]." ".$row["Email"]." ".$row["UserNamee"]."<br>";
        }
}
else{
    echo "No result";
}
$con->close();
?>