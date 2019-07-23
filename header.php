<?php session_start(); 
ob_start();
 // error_reporting(0);
 include'./model/db_config.php';
 include'./model/controller.php';
 $Pmethod = new myController();

if (isset($_SESSION['verify_code'])) {
	$code = $_SESSION['verify_code'];
	$user_details_query = mysqli_query($db, "SELECT * FROM bus_booking WHERE verify_code='$code'");
	$user = mysqli_fetch_array($user_details_query);
}
else {
	//header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bus ticket booking system</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
   
  </head>
  <body>
    <header class="header_section" id="header_section">
      <div class="container">
          <div class="logo_section">
            <img src="images/logo.png" alt="travling logo">
          </div>
          <div class="right_site"><!-- rigth site nav bar section -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      
					  <li><a href="logout.php">Logout</a></li>
                     
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
          </div><!-- end right site bar nav section -->
      </div>
    </header>