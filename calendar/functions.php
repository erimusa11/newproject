<?php require "dbconnect.php"?>   <!-- this calll the database  sheet where the conection localhos is-->
<?php
  

// the function of log in  ********************************************************
function login(){
    global $connection;
	
	
$user= mysqli_real_escape_string($connection,$_POST['username']);
$password=mysqli_real_escape_string($connection,$_POST['password']);
  
//user login

$query="SELECT * FROM users";

$result=mysqli_query($connection,$query);
	
	$query1="SELECT * FROM admin";
$result1=mysqli_query($connection,$query1);

while($row=mysqli_fetch_row($result)){
    
    if($user==$row[1] && $password==$row[2]){
         $_SESSION['log']=$user;
          $_SESSION['userid']=$row[0];
		 
       
       return header("Location: index.php");
        exit();
    } else {
		 //admin login
		$query1="SELECT * FROM admin";
  
$result1=mysqli_query($connection,$query1);
		
		while($row=mysqli_fetch_row($result1)){
    
    if($user==$row[1] && $password==$row[2]){
	 
         $_SESSION['adminMail']=$row[1];
          $_SESSION['adminId']=$row[0];
		 
       // if the data do not metch
       return header("Location: index.php");
		
        exit();
    }
 
}
		
	}
		
}

     return header("Location: login.php");
}


//log out function ******************************************************************

function logout(){
	if(isset($_POST['logout'])){
					 
					 session_destroy();
				 return header("Location: login.php");
					exit();
					 }
}



//mission input ******************************************************************
function missioninsert(){
     
    global $connection;
    
if (isset($_POST['save'])) {
$mission = $_POST['mission'];
if($mission==NULL){
header("Location: mission.php");
exit();    
}
         $user = $_SESSION['userid'];
$query_mission="INSERT INTO user_missione(missione,userId) ";
$query_mission .="VALUES('$mission','$user')";
$result= mysqli_query($connection, $query_mission);
 header("Location: mission.php");
   }
}

 ?>