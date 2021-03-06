
 <?php include "functions.php"?>         <!--  call the function are requared -->
<?php
session_start();              //force the user to log in first aftergo on the page
if(!isset($_SESSION['log'])){
    header("Location: login.php");
   }
logout();



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
  
  
  
  
    <!---Calendar required scripts-->
    <link rel="stylesheet" href="calendar/css/bootstrap.css">

    <!---Jquery-->
    <script src="calendar/js/jquery.min.js"></script>
    <script src="calendar/js/moment.min.js"></script>

    <!--- Full calendar -->
    <link rel="stylesheet" href="calendar/css/fullcalendar.min.css">
    <script src="calendar/js/fullcalendar.js"></script>
    <script src="calendar/js/it.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <!--- Clock Picker -->
    <script src="calendar/js/bootstrap-clockpicker.js"> </script>
    <link rel="stylesheet" href="calendar/css/bootstrap-clockpicker.css">
    
    <style>
        .fc-toolbar,.fc-day-header {
          text-transform: capitalize;
          font-family: "Times New Roman", Times, serif;
          }
       .fc-sat { background-color:#c9ffbf73;  }

       .fc-sun { color:red;  }

       .fc-right .fc-prev-button, .fc-right .fc-next-button{
    background-color: #b1d583;
    background-image: none;
}


      
 
    </style>

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
            <a href="#">Calendario</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class=" ">
           
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-calendar"></i>
            La agenda</div>
          <div class="card-body">
          
            <div class="table-responsive">
              <?php include 'calendar/calendar.php'; ?>
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
          <form  action="calendario.php" method="POST" >
          <input class="btn btn-primary"   type="submit" name="logout" value="Logout"  > 
          </form>
        </div>
      </div>
    </div>
  </div>

        </div>
      </div>
      </div>
      

  <!-- Bootstrap core JavaScript
  <script src="vendor/jquery/jquery.min.js"></script> 
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>  -->

  <!-- Core plugin JavaScript--> 
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script> 

  <!-- Page level plugin JavaScript  -->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages -->
  <script src="js/sb-admin.min.js"></script> 

  <!-- Demo scripts for this page -->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>   
        
</body>

</html>
