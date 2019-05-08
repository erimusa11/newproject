<?php 

header('Content-Type: application/json');

$db_connection = mysqli_connect("localhost","root","","calendar");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



//event selection

 $query = "SELECT * FROM events";

$result = mysqli_query($db_connection,$query);

 $row = mysqli_fetch_assoc($result);
 echo json_encode($row);

?>

