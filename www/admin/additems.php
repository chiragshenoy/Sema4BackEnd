<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "shop";
echo $_GET['test'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$image="\"".$_GET['image']."\"";
$heading ="\"". $_GET['name']."\"";
$description = "\"".$_GET['description']."\"";
$oldprice=$_GET['oldprice'];
$discount= $_GET['discount'];
$newprice=  $_GET['newprice'];
echo $newprice;
$sql = "INSERT INTO offers (image, heading, description,oldprice,newprice,discount)
VALUES ($image,$heading,$description,$oldprice,$newprice,$discount)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?>
