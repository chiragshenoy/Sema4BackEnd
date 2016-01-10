<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "shop";

$ar = array("name"=>"BigBaazar","logo"=>"http://abcd.com/logo.jpg","array"=>array());
//print_r($ar);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM offers order by id desc LIMIT 6";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
$i=0;   
    while($row = $result->fetch_assoc()) {
	$row["image"]='http://abcd.com/'.$row["image"];
//        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
   
 $ar["array"][$i++]=$row;
}
print_r(json_encode($ar));
} else {
    echo "0 results";
}
$conn->close();
?>
