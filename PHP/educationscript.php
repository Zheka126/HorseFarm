<?php

$a = $_POST['ID_horse'];
$b = $_POST['Age_group'];
$c = $_POST['Email'];
$d = $_POST['Phone'];

// Create connection
$connection = mysqli_connect("localhost", "mysql", "mysql", "cucerprime");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//////////////////////////

$sql = "INSERT INTO `education` (`ID horse`, `Age group`, `Email`, `Phone`) VALUES ('$a', '$b', '$c', '$d')";

if (mysqli_query($connection, $sql)) {
    echo "<h2>New record created successfully</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
