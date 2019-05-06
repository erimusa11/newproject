<?php include "functions.php"?>  <!--  call the function are requared -->

<?php session_start();?>       <!-- force the user to log in first aftergo on the page -->


<?php
 if(isset($_POST["submit"])){ 
 login(); }           // check if is the user loget or not
 ?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Libra Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header "><center> Entra nel Cusscoto </center></div>
      <div class="card-body">
        <form action="login.php" method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="username" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email </label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Codice</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Ricorda il Codice
              </label>
            </div>
          </div>
          <input class="btn btn-primary btn-block"  type="submit" name="submit" value="Entra">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Crea unAccount</a>
          <a class="d-block small" href="forgot-password.html">Dimenticato il codice?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
