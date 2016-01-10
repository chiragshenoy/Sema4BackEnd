<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "shop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$image="shirt.jpg";
$heading = $_POST['heading'];
$description = $_POST['oldprice'];
$oldprice=$_POST['newprice'];
$discount= $_POST['discount'];
$newprice=  $_POST['newprice'];
$sql = "INSERT INTO offers (image, heading, description,oldprice,newprice,discount)
VALUES ($image,$heading,$description,$oldprice,$newprice,$discount)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?>
