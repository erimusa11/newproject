<?php 
session_start();
header('Content-Type: application/json');


$pdo = new PDO("mysql:dbname=loginapp;host=localhost","root","");
$user= $_SESSION['userid'];
$get=(isset($_GET['get']))?$_GET['get']:'read';
switch($get){
        
    case 'add':
       
        $query=$pdo->prepare("INSERT INTO events(title, description,color,textColor,start,end) VALUES(:title, :description,:color,:textColor,:start,:end ,userId='$user')");
        
        $result=$query->execute(array(
        
        "title"=>$_POST['title'],
        "description"=>$_POST['description'],
        "color"=>$_POST['color'],
        "textColor"=>$_POST['textColor'],
        "start"=>$_POST['start'],
        "end"=>$_POST['end'],
 
        ));
        echo json_encode($result);
        
        
        break;
        
    case 'delete':

        $result=false;
        
        if(isset($_POST['id'])){
            $query=$pdo->prepare("DELETE FROM events WHERE ID=:ID");
            $result=$query->execute(array("ID"=>$_POST['id']));
            
        }
        
        echo json_encode($result);
        
        break;
  
        
    case 'modify':
        
       $query=$pdo->prepare("UPDATE events SET
        
        title=:title,
        description=:description,
        color=:color,
        textColor=:textColor,
        start=:start,
        end=:end
        WHERE ID=:ID
        ");
        
        $result=$query->execute(array(
            
        "ID"=>$_POST['id'],
        "title"=>$_POST['title'],
        "description"=>$_POST['description'],
        "color"=>$_POST['color'],
        "textColor"=>$_POST['textColor'],
        "start"=>$_POST['start'],
        "end"=>$_POST['end']
 
        ));
        echo json_encode($result); 
        break;
       
        
        
    default:
            
        $sql=$pdo->prepare("SELECT * FROM events WHERE userId ='$user'");
        $sql->execute();

        $result=$sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
        break;
}







?>
