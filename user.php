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
	
	$locatonfrom = $Pmethod->singlelocation_View($db,$user['form_place']);
	$fetch_locatonfrom = mysqli_fetch_array($locatonfrom);

    $locatonTo = $Pmethod->singlelocation_View($db,$user['to_place']);
    $fetch_locatonto = mysqli_fetch_array($locatonTo);
	
	$locatonTime = $Pmethod->time_View1($db,$user['form_place'], $user['to_place']);
    $fetch_time = mysqli_fetch_array($locatonTime);
}
else {
	header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Account</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
	
	<style>
		.padding{padding:0px;}
		.addtowishlist_block{background: red;color: white;}
		ul{margin:0; padding:0; list-style: none;}
		ul:after{content:""; display: block; clear: both;}
		/*start header section */
		.container{max-width:960px;}
		.logo_section img{height: 99px;}
		.navbar-default{margin:0; padding:0; border:none; border:none; background: none;}
		.logo_section{float: left;}
		.right_site{float: right; padding-top:25px;}
		/*end header section */


		* {
		  box-sizing: border-box;
		}

		/* Create two equal columns that floats next to each other */
		.column {
		  float: left;
		  width: 50%;
		  padding: 10px;
		  height: 90%; /* Should be removed. Only for demonstration */
		}
		
		.row {
			margin-right: 20px;
		    margin-left: 20px;
		}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		  height: 90%;
		  
		}
		.card {
		  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		  transition: 0.3s;
		  width: 260px;
		}

		.card:hover {
		  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		.containerr {
		  padding: 2px 16px;
		  margin-left: 10%;
		}
		
		.imgcontainer {
		  text-align: center;
		  margin: 24px 0 12px 0;
		}
	</style>
   
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
	
<div class="row">
  <div class="column" style="background-color:#aaa;">
    <div class="containerr">
		<div class="card">
		  <img src="img_avatar.png" alt="Avatar" style="width: 65%; text-align: center; margin: 24px 0 12px 44px;">
		  <div class="container">
			<h4><b><?php echo "Name: ".$user['name'];?></b></h4> 
			<p><?php echo "Destination: ".$fetch_locatonfrom['dis_name']." - ".$fetch_locatonto['dis_name']?></p> 
			<p><?php echo "Start time: ".$fetch_time['time']?></p> 
			<p><?php echo "Bus seat number: ".$user['busy_setnumber']?></p> 
			<p><?php echo "Booking date: ".$user['booking_date']?></p> 
			<p><?php echo "Booking time: ".$user['time']?></p> 
			<p><?php echo "Price: ".$user['price']?></p> 
			<p><?php echo "Payment by: ".$user['payment']?></p> 
			<p><?php echo "Bus type: ".$user['buy_type']?></p> 
			
		  </div>
		</div>
	</div>
  </div>
  <div class="column" style="background-color:#bbb;">
    <form method="post" action="verifiy-code.php">
                  <div class="form-row" style="width: 84%; padding: 149px 30px 5px 137px;">
				  <h2 style="text-align:center;">Booking Your Ticket</h2>
                    <div class="padding_left form-group">
                      <label for="date">Date</label>
                      <input type="date" class="form-control" id="date" name="jonin_date" placeholder="Email">
                    </div> 
                     <div class="padding_left form-group">
                      <label for="email">From</label>
                      <select name="from_location" class="form-control" required="">
                          <option value="">--Select location--</option>
                      <?php  
                          $select = $Pmethod->districtLocationView($db);
                          while($fetch = mysqli_fetch_array($select)){
                      ?>
                          <option value="<?php echo $fetch['dis_id'];?>"><?php echo $fetch['dis_name'];?></option>
                      <?php } ?>
                      </select>
                    </div>
                    <div class="padding_right form-group">
                      <label for="inputPassword4">To</label>
                      <select name="to_location" class="form-control" required="">
                          <option value="">--Select location--</option>
                      <?php  
                      $select = $Pmethod->districtLocationView($db);
                      while($fetch = mysqli_fetch_array($select)){
                       ?>
                          <option value="<?php echo $fetch['dis_id'];?>"><?php echo $fetch['dis_name'];?></option>
                      <?php } ?>

                      </select>
                    </div>
                  </div>
                 
                  <button type="submit" class="btn btn-primary" name="userApplyNow" style="margin-left: 409px;margin-bottom: 15px;"> Apply Now </button>
                </form>
  </div>
</div>


    </div>  
    <?php 
    include'footer.php';
     ?>
    