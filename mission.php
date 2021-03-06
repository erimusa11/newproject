
 <?php include "functions.php"?>         <!--  call the function are requared -->
<?php
session_start();              //force the user to log in first aftergo on the page
if(!isset($_SESSION['log'])){
    header("Location: login.php");
   }
logout();
?>

<?php missioninsert(); ?>          <!--  call the function whitch add contect on the form  -->

<?php

if (isset($_GET['del'])) {
	$id = $_GET['del'];
        
        global $connection;                  //is the php code wich you can delete  your content
        
	mysqli_query($connection, "DELETE FROM user_missione WHERE missioneId=$id");
	header('location: mission.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Libraearies</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>


<script>
<script>
$(document).ready(function(){
    $(".btnSave").click(function(){
        $("#success").modal("show");
    });
});
</script>
    
    
</head>

<body id="page-top">

  <?php include "TopMenu.php"?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include "LeftMenu.php"?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Mission</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
          <li> <div id="success" class="alert alert-success alert-dismissible fade show hidden " role="alert"  hidden>
  <strong>Item saved!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div></li>
       <li> <div class="alert alert-danger alert-dismissible fade show hidden " role="alert" hidden >
  <strong>Item deleted!</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div></li>
        </ol>

        <!-- Icon Cards-->
        <div class=" ">
        <form action="mission.php" method="POST" onsubmit="myFunction()">   
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-pen"></i>
            Cra  un Missione <input type="submit" id="btnSave" class=" btn btn-warning float-right
 col-1"  name="save" value="Salva"></div>
          <div class="card-body">
            <div class="table-responsive">
            
                <textarea name="mission"  iid='output' cols="30" rows="5" class="form-control"> </textarea>
            
            </div>
            
          </div>
          
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        </form>
      </div>

      <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           Vizualiza i missioni</div>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped table-dark">
            <?php 
                  global $connection;     $user = $_SESSION['userid'];
	                 //the php  querry witch can show all the contect 
                   $results = mysqli_query($connection, "SELECT * FROM user_missione WHERE userId='$user'"); ?>
                  <?php while ($row = mysqli_fetch_array($results)) { ?>
                


           
              <tr>
                <td class ="col-10"> <?php echo $row['missione']; ?></td>
                <td class="col-2"> <button class='btn btn-md btn-light btnSubmit'><a href="mission.php?del=<?php echo $row['missioneId']; ?>" class="del_btn"><font color="dark">Delete</font></a></button></td
              </tr>
                  <?php } ?>
            </table>    

            </div>
            
          </div>
          
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>

      
      <!-- /.container-fluid -->
        <?php include "Footer.php"?> 
     
        <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Siete pronti per lasciare?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Per usire dal aplicazione dovrete confirmare nel butone log out  per restare clickate il butone anula</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Anula</button>
          <form  action="mission.php" method="POST" >
          <input class="btn btn-primary"   type="submit" name="logout" value="Logout"  > 
          </form>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  
  
  
  <div class="modal" tabindex="-1" id="modal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Event deleted</h5>
      </div>
    </div>
  </div>
</div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
