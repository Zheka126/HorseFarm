<?php

$a = $_POST['Name'];
$b = $_POST['Weight'];
$c = $_POST['Growth'];
$d = $_POST['Speed'];
$e = $_POST['Age'];

// Create connection
$connection = mysqli_connect("localhost", "mysql", "mysql", "cucerprime");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//////////////////////////

$sql = "INSERT INTO `horses` (`Name`, `Weight`, `Growth`, `Speed`, `Age`) VALUES ('$a', '$b', '$c', '$d', '$e')";

if (mysqli_query($connection, $sql)) {
    echo "<h2>New record created successfully</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
