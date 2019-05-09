<?php  session_start(); ?> 
<?php require "dbconnect.php"?> 
<?php 

header('Content-Type: application/json');

global $connection;
 
$user = $_SESSION['userid'];
//event selection
 
$query = "SELECT * FROM events WHERE userId = '$user'";

$result = mysqli_query($connection,$query);

$row = mysqli_fetch_assoc($result);
echo json_encode($row);
;

?>

