
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
  
  <!-- Custom bootsrap styles -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<!-- Awesome fonts-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">



<style>
    #style{
        height: 300px;
    },
    #style2{
        height: 500px;
    }
    
    
    .btn_style{
        width: 300px;
        height: 45px;
        float: left;
        text-align: left;
    }
    
    
    /* checkbox button styles */
   
    .badgebox
{
    opacity: 0;
    
}

.badgebox + .badge
{
    /* Move the check mark away when unchecked */
    text-indent: -999999px;
    /* Makes the badge's width stay the same checked and unchecked */
	width: 27px;
    
}

.badgebox:focus + .badge
{
    /* Set something to make the badge looks focused */
    /* This really depends on the application, in my case it was: */
    
    /* Adding a light border */
    box-shadow: inset 0px 0px 5px;
    /* Taking the difference out of the padding */
}

.badgebox:checked + .badge
{
    /* Move the check mark back when checked */
	text-indent: 0;
}

    
    /* radio button styles */
.funkyradio div {
  clear: both;
  overflow: hidden;
}

.funkyradio label {
  width: 100%;
  border-radius: 3px;
  border: 1px solid #D1D3D4;
  font-weight: normal;
}

.funkyradio input[type="radio"]:empty{
  display: none;
}

.funkyradio input[type="radio"]:empty ~ label{
  position: relative;
  line-height: 2.25em;
  text-indent: 3.25em;
  margin-top: 0.5em;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}

.funkyradio input[type="radio"]:empty ~ label:before{
  position: absolute;
  display: block;
  top: 0;
  bottom: 0;
  left: 0;
  content: '';
  width: 2.5em;
  background: #D1D3D4;
  border-radius: 3px 0 0 3px;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label{
  color: #888;
}

.funkyradio input[type="radio"]:hover:not(:checked) ~ label:before{
  content: '\2714';
  text-indent: .9em;
  color: #C2C2C2;
}

.funkyradio input[type="radio"]:checked ~ label{
  color: #777;
}

.funkyradio input[type="radio"]:checked ~ label:before{
  content: '\2714';
  text-indent: .9em;
  color: #333;
  background-color: #ccc;
}

.funkyradio input[type="radio"]:focus ~ label:before{
  box-shadow: 0 0 0 3px #999;
}

.funkyradio-default input[type="radio"]:checked ~ label:before{
  color: #333;
  background-color: #ccc;
}

.funkyradio-primary input[type="radio"]:checked ~ label:before{
  color: #fff;
  background-color: #337ab7;
}

.funkyradio-success input[type="radio"]:checked ~ label:before{
  color: #fff;
  background-color: #5cb85c;
}

.funkyradio-danger input[type="radio"]:checked ~ label:before{
  color: #fff;
  background-color: #d9534f;
}

.funkyradio-warning input[type="radio"]:checked ~ label:before{
  color: #fff;
  background-color: #f0ad4e;
}

.funkyradio-info input[type="radio"]:checked ~ label:before{
  color: #fff;
  background-color: #5bc0de;
}

    
    
     /* check button styles */
     .btn span.fa-check {
        opacity: 0.2;
    }

    .btn.active span.fa-check {
        opacity: 1;
    }
    
    
    </style>
</head>

<body id="page-top">

  <?php include "TopMenu.php"?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php include "LeftMenu.php" ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        
        <!-- Icon Cards-->
        <div class=" ">
          <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Valori</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

           
        <!-- DataTables Example -->
        <div id="style" class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example
            <button class="btn btn-sm btn-warning float-right">CLIK ME!</button>
            </div>
          <div class="card-body">
            <div class="table-responsive">
             
            </div>
          </div>
          <div class="card-footer small text-muted">Aggiornato ieri alle 23:59</div>
        </div>

     
     
     
     <!-- DataTables Example 2 -->
        <div id="style2" class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
          
    <div class="row">

    <div class="[ col-xs-12 col-sm-6 ]">
        <h3>Scelta Multipla </h3><hr />
        
            <div>
               <label for="default" class="btn btn-primary btn_style">Opzione 1 <input type="checkbox" id="default" class="badgebox"><span class="badge">&check;</span></label>
            </div>
        
        <div>
               <label for="primary" class="btn btn-primary btn_style">Opzione 3 <input type="checkbox" id="primary" class="badgebox"><span class="badge">&check;</span></label>
        </div>
           <div>
              <label for="info" class="btn btn-primary btn_style">Opzione 3 <input type="checkbox" id="info" class="badgebox"><span class="badge">&check;</span></label>
        </div>
           <div>
               <label for="success" class="btn btn-primary btn_style">Opzione 4 <input type="checkbox" id="success" class="badgebox"><span class="badge">&check;</span></label>
        </div>
            <div>
              <label for="warning" class="btn btn-primary btn_style">Opzione 5 <input type="checkbox" id="warning" class="badgebox"><span class="badge">&check;</span></label>
            </div>
            <div >
               <label for="danger" class="btn btn-primary btn_style">Opzione 6 <input type="checkbox" id="danger" class="badgebox"><span class="badge">&check;</span></label>
            </div>
    </div>
    
    
    
    <div class="[ col-xs-12 col-sm-6 ]">
    <h3>Scelta Singola</h3><hr />

    <div class="funkyradio">
        <div class="funkyradio-default">
            <input type="radio" name="radio" id="radio1" />
            <label for="radio1">Opzione 1</label>
        </div>
        <div class="funkyradio-primary">
            <input type="radio" name="radio" id="radio2" checked/>
            <label for="radio2">Opzione 2</label>
        </div>
        <div class="funkyradio-success">
            <input type="radio" name="radio" id="radio3" />
            <label for="radio3">Opzione 3</label>
        </div>
        <div class="funkyradio-danger">
            <input type="radio" name="radio" id="radio4" />
            <label for="radio4">Opzione 4</label>
        </div>
        <div class="funkyradio-warning">
            <input type="radio" name="radio" id="radio5" />
            <label for="radio5">Opzione 5</label>
        </div>
        <div class="funkyradio-info">
            <input type="radio" name="radio" id="radio6" />
            <label for="radio6">Opzione 6</label>
        </div>
    </div>
    
        </div>
        
    
    
</div>
<br> <br>

<div class="row">
<div class="col-xs-12 col-sm-6">
        <h3>Seleziona una valuta </h3><hr />

        <div class="btn-group" data-toggle="buttons">

            <label class="btn btn-success">
                <input type="radio" name="options" id="option1" autocomplete="off" checked="checked" />
                <span class="fa fa-check"></span>
                <i class="fas fa-euro-sign"></i>
            </label>

            <label class="btn btn-success">
                <input type="radio" name="options" id="option2" autocomplete="off" />
                <span class="fa fa-check"></span>
                <i class="fas fa-dollar-sign"></i>
            </label>

            <label class="btn btn-success">
                <input type="radio" name="options" id="option3" autocomplete="off" />
                <span class="fa fa-check"></span>
                <i class="fas fa-pound-sign"></i>
            </label>

            <label class="btn btn-success">
                <input type="radio" name="options" id="option4" autocomplete="off" />
                <span class="fa fa-check"></span>
                <i class="fas fa-yen-sign"></i>
            </label>
        </div>

</div>

<div class="col-xs-12 col-sm-6">
	<h3>Seleziona una valuta</h3><hr/>
  <select class=" form-control selectpicker show-tick" data-style="btn-primary" >
      <option>Opzione 1</option>
      <option>Opzione 2</option>
      <option>Opzione 3</option>
      <option>Opzione 4</option>
      <option>Opzione 5</option>
  </select>
</div>

</div>
</div>
</div>

    
<div class="card-footer small text-muted">Aggiornato ieri alle 23:59</div>
</div>


                 
             </div>
            </div>
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
          <form  action="valori.php" method="POST" >
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
