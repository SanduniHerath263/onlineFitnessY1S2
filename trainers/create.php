<?php
include "dbconn.php"; // Assuming "dbconn.php" contains your database connection details

if (isset($_POST['submit'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['firstname']); // Escape user input
    $last_name = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $age = (int)$_POST['age']; // Cast age to integer (optional)
    $weight = (float)$_POST['weight']; // Cast weight to float (optional)

    $sql = "INSERT INTO `crud` (`first_name`, `last_name`, `email`, `gender`, `age`, `weight`)
             VALUES ('$first_name', '$last_name', '$email', '$gender', '$age', '$weight')";

    $result = $conn->query($sql);

    if ($result) {
        echo "New Record created successfully!";
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}

$conn->close(); // Close the connection after use
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book Session</title> 
    <style>
        body{
background-color: black;
color:aliceblue;
 
        };
    </style>
</head>
<body>
    <h2>BOOK SESSION</h2>
    <form action="" method="POST">
        <fieldset >
            <legend>Personal info</legend>
            First Name:<br>
            <input type="text" name="firstname"><br>
            Last Name:<br>
            <input type="text" name="lastname"><br>
            Email:<br>
            <input type="text" name="email"><br>
            Gender:<br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female<br><br>
            Age:<br>
            <input type="text" name="age"><br>
            Weight:<br>
            <input type="text" name="weight"><br>
        </fieldset>
        <input type="submit" name="submit" value="Submit"> </form>
</body>
</html>
