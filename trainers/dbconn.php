<?php
$servername="localhost";
$username="root";
$password="";
$dbname="tutorial";

$conn=new mysqli($servername,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed" .$conn->connect_error);
}




else{
    echo"yes";
}













?>