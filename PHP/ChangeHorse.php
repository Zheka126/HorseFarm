<?php

$a = $_POST['ID_horse'];
$b = $_POST['Weight'];
$c = $_POST['Growth'];
$d = $_POST['Speed'];
$e = $_POST['Age'];

// Create connection
$connection = mysqli_connect("localhost", "mysql", "mysql", "cucerprime");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
};

$sql = "UPDATE `horses` SET `Weight` = '$b', `Growth` = '$c', `Speed` = '$d', `Age` = '$e' WHERE `ID horse` = '$a'; ";

if (mysqli_query($connection, $sql)) {
    echo "<h2>Record updated successfully!</h2><br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
