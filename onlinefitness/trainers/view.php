<?php
include "dbconn.php";

$sql = "SELECT `id`, `first_name`, `last_name`, `email`, `gender`, `age`, `weight` FROM `crud`";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Book Session</h2>";
    echo "<table class='table'>"; // Assuming you have a CSS class 'table' for styling
    echo "<thead>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Weight</th>
            <th>Action</th>
          </tr>";
    echo "</thead>";

    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["last_name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>"; // Email escaping might be needed for certain use cases
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["age"] . "</td>";
        echo "<td>" . $row["weight"] . "</td>";
        // Add an action column as needed (e.g., edit, delete)
        // echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a></td>"; // Example edit link
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<h2>No results found.</h2>";
}

$conn->close(); // Close the connection after use
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>read</title>
<style>
.table{
    background: black ;
    border:solid black ;
    color: white;
 
}






</style>
</head>
<body>
    <div class="container">
        </div>
</body>
</html>
