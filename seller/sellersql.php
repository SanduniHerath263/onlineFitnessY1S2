<?php

//linking the configuration file

require 'configseller.php';

if(isset($_POST["login"]))
{
 echo"login";

	$email=$_POST["email"];
	$password=$_POST["password"];

	$sql = "SELECT Email,Password FROM seller where Email='$email'";

	$result = $con->query($sql);

		if($result->num_rows>0)
		{
			// read data
			$row = $result->fetch_assoc();
			
			if($row["Password"] === $password)
			{
				//read and utilize the row data
				
				echo "<script> alert('Welcome to your sellerpage') </script>";
			}
		}
		else
		{
			echo "no results";
		}
		
}
	$con->close();
	
?>