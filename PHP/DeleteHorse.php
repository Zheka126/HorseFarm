<?php

// Create connection
$connection = mysqli_connect("localhost", "mysql", "mysql", "cucerprime");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
///////////////////

$d = $_POST['delete'];

$sql = "DELETE FROM `horses` WHERE `ID horse` = '$d'";
if (mysqli_query($connection, $sql)) {
    echo "<h2>Record was deleted successfully!</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
