<?php

//linking the configuraton file

require 'config.php';

echo"hi";

if(isset($_POST["Submit"])){
	
	
	$Name = $_POST["Name"];
	$Email = $_POST["Email"];
	$Number = $_POST["Phone"];
	$Comment = $_POST["CommentorMessage"];

	$sql = "INSERT INTO contact(Name,Email,Phone,Comment)VALUES('$Name','$Email','$Number','$Comment')";

	if($con->query($sql))
	{
		echo"Insert successfully";
	}
	else
	{
		echo "Error:".$con->error;
	}
}

$con->close();

?>
