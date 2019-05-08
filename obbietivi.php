
 <?php include "functions.php"?>         <!--  call the function are requared -->
<?php
session_start();              //force the user to log in first aftergo on the page
if(!isset($_SESSION['log'])){
    header("Location: login.php");
   }
logout();
?>

<?php
if (isset($_POST['save'])) {
$obbiettivi = $_POST['obbiettivi'];
$tipo=$_POST['myselectbox'];

if(empty($obbiettivi)){
header("Location: obbietivi.php");
exit();
}    
    $user = $_SESSION['userid'];
$query_obbiettivi="INSERT INTO obbiettivi_strategici(obbiettivi,obbiettiviTipo,userId) ";
$query_obbiettivi .="VALUES('$obbiettivi','$tipo','$user')";


$result= mysqli_query($connection, $query_obbiettivi);


header("Location: obbietivi.php");

}

?>
<?php
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($connection, "DELETE FROM obbiettivi_strategici WHERE obbiettiviId=$id");
	header('location: obbietivi.php');
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
            <a href="#">Obbietivi</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- the first row we have -->
        <div class="container-fluid">
        <div class=" row ">
           
        <!-- DataTables Example -->
        <div class="card mb-3 col-8 " style="padding-left: 0px;padding-right: 0px;" >
          <div class="card-header">
            <i class="fas fa-pen"></i>
            Crea un Obbietivo</div>
          <div class="card-body">        <!-- this is the text area-->
            <div class="table-responsive">

            <form method="post" action="obbietivi.php">
                <textarea name="obbiettivi" id="" cols="30" rows="3" class="form-control"></textarea>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
          <!-- here start the category and the save button -->
        <div class="card mb-3 col-4" style="padding-left: 0px; padding-right: 0px;">
          <div class="card-header">
            <i class="fas fa-save"></i>
            Scegli la categoria </div>
          <div class="card-body">
            <div class="table-responsive">
             
            <div  class="form-group">         <!--  the category-->
                     <select class="custom-select"name="myselectbox">
                       <option value="Finanziari" class="font-roman">Economica Finanziari</option>
                         <option value="Soddisfazione del cliente" class="font-roman">Prespetiva del cliente</option>
                             <option value="Operazioni interne">Prespetiva Praccisi</option>
                               <option value="Individuali" class="font-roman">Prespetiva Formazione</option>
                                  </select> 
               </div>
               <button class="btn bg-warning font-roman text-dark col " type="submit" name="save" >Save</button>
              </form>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div> </div>
          <!-- this is the output -->
      <div class="">
           
        <!-- the first category-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-money-check-alt"></i>
            Economica Finanziari</div>
          <div class="card-body">
            <div class="table-responsive">

                                   <!-- the  query of firt select option -->
            <?php                     
                 $user = $_SESSION['userid'];
                $results_f = mysqli_query($connection, "SELECT * FROM obbiettivi_strategici WHERE obbiettiviTipo='Finanziari' AND userId='$user'"); ?>

            <table class="table table-striped table-dark">
             
                
                <?php while ($row = mysqli_fetch_array($results_f)) { ?>

           
              <tr>                        <!-- the table where the first select show -->
                <td class ="col-10"> <?php echo $row['obbiettivi']; ?></td>
                <td class="col-2"> <button class='btn btn-md btn-light btnSubmit'><a href="obbietivi.php?del=<?php echo $row['obbiettiviId']; ?>" class="del_btn font-roman"><font color="dark">Delete</font></a> </button></td
              </tr>
                  <?php } ?>
            </table>    
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <!-- the second category-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-user-tie""></i>
            Prespetiva del cliente  </div>
          <div class="card-body">
            <div class="table-responsive">
             
                                         <!-- the second query -->
             <?php 
                                   $user = $_SESSION['userid'];
                $results_s = mysqli_query($connection, "SELECT * FROM obbiettivi_strategici WHERE obbiettiviTipo='Soddisfazione del cliente' AND userId='$user'"); ?>


            <table class="table table-striped table-dark">
             
                
            <?php while ($row = mysqli_fetch_array($results_s)) { ?>

                                                 <!-- the second  table elements-->
              <tr>
                <td class ="col-10"> <?php echo $row['obbiettivi']; ?></td>
                <td class="col-2"> <button class='btn btn-md btn-light btnSubmit'><a href="obbietivi.php?del=<?php echo $row['obbiettiviId']; ?>" class="del_btn font-roman"><font color="dark">Delete</font></a></button></td>
              </tr>
                  <?php } ?>
            </table>    



            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <!-- the thirt category-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-route"></i>
            Perspective precisi</div>
          <div class="card-body">
            <div class="table-responsive">

            <?php 
                                   $user = $_SESSION['userid'];
             $results_i = mysqli_query($connection, "SELECT * FROM obbiettivi_strategici WHERE obbiettiviTipo='Operazioni interne' AND userId='$user'"); ?>



            <table class="table table-striped table-dark">
             
                
          	<?php while ($row = mysqli_fetch_array($results_i)) { ?>

                                                 <!-- the second  table elements-->
                 <tr>
                <td class ="col-10"> <?php echo $row['obbiettivi']; ?></td>
                <td class="col-2"> <button class='btn btn-md btn-light btnSubmit'><a href="obbietivi.php?del=<?php echo $row['obbiettiviId']; ?>" class="del_btn font-roman"><font color="dark">Delete</font></a></button></td>
              </tr>
                  <?php } ?>
            </table>        


             
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <!-- the forth category-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-sitemap"></i>
            Prespetiva Formazione</div>
          <div class="card-body">
            <div class="table-responsive">
              
            <?php 
                                   $user = $_SESSION['userid'];
         $results_i = mysqli_query($connection, "SELECT * FROM obbiettivi_strategici WHERE obbiettiviTipo='Individuali' AND userId='$user'"); ?>




            <table class="table table-striped table-dark">
             
                
          	<?php while ($row = mysqli_fetch_array($results_i)) { ?>

                                                 <!-- the second  table elements-->
                 <tr>
                <td class ="col-10"> <?php echo $row['obbiettivi']; ?></td>
                <td class="col-2"> <button class='btn btn-md btn-light btnSubmit'><a href="obbietivi.php?del=<?php echo $row['obbiettiviId']; ?>" class="del_btn font-roman"><font color="dark">Delete</font></a></button></td>
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
          <form  action="obbietivi.php" method="POST" >
          <input class="btn btn-primary"   type="submit" name="logout" value="Logout"  > 
          </form>
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
