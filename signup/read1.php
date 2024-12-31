<?php
require 'config.php';

$sql="SELECT User_ID,F_name,L_name,Email,UserName,Password FROM signupp";

$result=$con->query($sql);

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo $row["User_ID"]." ".$row["F_name"]." ".$row["L_name"]." ".$row["Email"]." ".$row["UserName"]."<br>";
    }
}
$con->close();
?>