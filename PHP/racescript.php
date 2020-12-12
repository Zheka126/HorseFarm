<?php

$a = $_POST['ID_horse'];
$b = $_POST['Type_of_race'];
$c = $_POST['Email'];
$d = $_POST['Phone'];

// Create connection
$connection = mysqli_connect("localhost", "mysql", "mysql", "cucerprime");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//////////////////////////

$sql = "INSERT INTO `races` (`ID horse`, `Type of race`, `Email`, `Phone`) VALUES ('$a', '$b', '$c', '$d')";

if (mysqli_query($connection, $sql)) {
    echo "<h2>New record created successfully</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
