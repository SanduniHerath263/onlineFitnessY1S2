<?php

    require_once("./config.php");

    $user = $_POST['user'];
    $pass = $_POST['newpw'];
    $rePass = $_POST['conpw'];

    $query = "UPDATE signupp SET Password='$pass' WHERE UserName='$user'";
    $result = mysqli_query($con,$query);
    
    if($result){
        echo 'success';
        header('Location: '.$uri.'/onlinefitness/loginn');
        exit;
    }

    
?>