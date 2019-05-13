<?php 
session_start();
header('Content-Type: application/json');


$pdo = new PDO("mysql:dbname=loginapp;host=localhost","root","");
$user= $_SESSION['userid'];
$get=(isset($_GET['get']))?$_GET['get']:'read';
switch($get){
        
    case 'add':
         if ($_POST['color'] == '#0071c5') {

            $telefonate = "Telefonate";
        $query=$pdo->prepare("INSERT INTO events(title,description,color,textColor,eventCategory,start,end,userId) VALUES(:title, :description,:color,:textColor,'$telefonate ',:start,:end ,'$user')");
        
        
        $result=$query->execute(array(
        
        "title"=>$_POST['title'],
        "description"=>$_POST['description'],
        "color"=>$_POST['color'],
        "textColor"=>$_POST['textColor'],
        "start"=>$_POST['start'],
        "end"=>$_POST['end'],
 
        ));
        echo json_encode($result);
        
    } elseif ($_POST['color'] == '#40E0D0'){
         
        $visite = "Visite";
        $query=$pdo->prepare("INSERT INTO events(title,description,color,textColor,eventCategory,start,end,userId) VALUES(:title, :description,:color,:textColor,'$visite ',:start,:end ,'$user')");
        
        
        $result=$query->execute(array(
        
        "title"=>$_POST['title'],
        "description"=>$_POST['description'],
        "color"=>$_POST['color'],
        "textColor"=>$_POST['textColor'],
        "start"=>$_POST['start'],
        "end"=>$_POST['end'],
 
        ));
        echo json_encode($result);

    }elseif ($_POST['color'] == '#008000'){
         
        $Social = "Azhorni sui social";
        $query=$pdo->prepare("INSERT INTO events(title,description,color,textColor,eventCategory,start,end,userId) VALUES(:title, :description,:color,:textColor,'$Social ',:start,:end ,'$user')");
        
        
        $result=$query->execute(array(
        
        "title"=>$_POST['title'],
        "description"=>$_POST['description'],
        "color"=>$_POST['color'],
        "textColor"=>$_POST['textColor'],
        "start"=>$_POST['start'],
        "end"=>$_POST['end'],
 
        ));
        echo json_encode($result);

    }elseif ($_POST['color'] == '#B0A917'){
         
        $Email = "Email";
        $query=$pdo->prepare("INSERT INTO events(title,description,color,textColor,eventCategory,start,end,userId) VALUES(:title, :description,:color,:textColor,'$Email ',:start,:end ,'$user')");
        
        
        $result=$query->execute(array(
        
        "title"=>$_POST['title'],
        "description"=>$_POST['description'],
        "color"=>$_POST['color'],
        "textColor"=>$_POST['textColor'],
        "start"=>$_POST['start'],
        "end"=>$_POST['end'],
 
        ));
        echo json_encode($result);

    }elseif ($_POST['color'] == '#FF8C00'){
         
        $Consulenza = "Consulenza";
        $query=$pdo->prepare("INSERT INTO events(title,description,color,textColor,eventCategory,start,end,userId) VALUES(:title, :description,:color,:textColor,'$Consulenza ',:start,:end ,'$user')");
        
        
        $result=$query->execute(array(
        
        "title"=>$_POST['title'],
        "description"=>$_POST['description'],
        "color"=>$_POST['color'],
        "textColor"=>$_POST['textColor'],
        "start"=>$_POST['start'],
        "end"=>$_POST['end'],
 
        ));
        echo json_encode($result);

    }elseif ($_POST['color'] == '#FF0000'){
         
        $Degustazione_gratuita = "Degustazione gratuita";
        $query=$pdo->prepare("INSERT INTO events(title,description,color,textColor,eventCategory,start,end,userId) VALUES(:title, :description,:color,:textColor,'$Degustazione_gratuita ',:start,:end ,'$user')");
        
        
        $result=$query->execute(array(
        
        "title"=>$_POST['title'],
        "description"=>$_POST['description'],
        "color"=>$_POST['color'],
        "textColor"=>$_POST['textColor'],
        "start"=>$_POST['start'],
        "end"=>$_POST['end'],
 
        ));
        echo json_encode($result);

    }elseif ($_POST['color'] == '#10151A'){
         
        $Invio_campioni_gratuiti = "Invio campioni gratuiti";
        $query=$pdo->prepare("INSERT INTO events(title,description,color,textColor,eventCategory,start,end,userId) VALUES(:title, :description,:color,:textColor,'$Invio_campioni_gratuiti ',:start,:end ,'$user')");
        
        
        $result=$query->execute(array(
        
        "title"=>$_POST['title'],
        "description"=>$_POST['description'],
        "color"=>$_POST['color'],
        "textColor"=>$_POST['textColor'],
        "start"=>$_POST['start'],
        "end"=>$_POST['end'],
 
        ));
        echo json_encode($result);

    }elseif ($_POST['color'] == '#F71DD6'){
         
        $Novi_contatti = "Novi contatti";
        $query=$pdo->prepare("INSERT INTO events(title,description,color,textColor,eventCategory,start,end,userId) VALUES(:title, :description,:color,:textColor,'$Novi_contatti ',:start,:end ,'$user')");
        
        
        $result=$query->execute(array(
        
        "title"=>$_POST['title'],
        "description"=>$_POST['description'],
        "color"=>$_POST['color'],
        "textColor"=>$_POST['textColor'],
        "start"=>$_POST['start'],
        "end"=>$_POST['end'],
 
        ));
        echo json_encode($result);

    }elseif ($_POST['color'] == '#922FD6'){
         
        $Referenze = "Referenze";
        $query=$pdo->prepare("INSERT INTO events(title,description,color,textColor,eventCategory,start,end,userId) VALUES(:title, :description,:color,:textColor,'$Referenze ',:start,:end ,'$user')");
        
        
        $result=$query->execute(array(
        
        "title"=>$_POST['title'],
        "description"=>$_POST['description'],
        "color"=>$_POST['color'],
        "textColor"=>$_POST['textColor'],
        "start"=>$_POST['start'],
        "end"=>$_POST['end'],
 
        ));
        echo json_encode($result);

    }elseif ($_POST['color'] == '#7CBDDE'){
         
        $Testimonianze = "Testimonianze";
        $query=$pdo->prepare("INSERT INTO events(title,description,color,textColor,eventCategory,start,end,userId) VALUES(:title, :description,:color,:textColor,'$Testimonianze ',:start,:end ,'$user')");
        
        
        $result=$query->execute(array(
        
        "title"=>$_POST['title'],
        "description"=>$_POST['description'],
        "color"=>$_POST['color'],
        "textColor"=>$_POST['textColor'],
        "start"=>$_POST['start'],
        "end"=>$_POST['end'],
 
        ));
        echo json_encode($result);

    }elseif ($_POST['color'] == '#BDBDC4'){
         
        $Demo_gratuite = "Demo gratuite";
        $query=$pdo->prepare("INSERT INTO events(title,description,color,textColor,eventCategory,start,end,userId) VALUES(:title, :description,:color,:textColor,'$Demo_gratuite ',:start,:end ,'$user')");
        
        
        $result=$query->execute(array(
        
        "title"=>$_POST['title'],
        "description"=>$_POST['description'],
        "color"=>$_POST['color'],
        "textColor"=>$_POST['textColor'],
        "start"=>$_POST['start'],
        "end"=>$_POST['end'],
 
        ));
        echo json_encode($result);

    }
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
