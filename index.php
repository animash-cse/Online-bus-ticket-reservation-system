<?php 
include_once'header2.php';

if(isset($_POST['customerLogin'])){
	$email = $_POST["email"];
	
	$password = md5($_POST["password"]); 
	
	$check_database_query = mysqli_query($db, "SELECT * FROM bus_booking WHERE email='$email' AND password='$password'");
	$check_login_query = mysqli_num_rows($check_database_query);
	
	if($check_login_query == 1) {
		$row = mysqli_fetch_array($check_database_query);
		$verify_code = $row['verify_code'];

		$user_closed_query = mysqli_query($db, "SELECT * FROM bus_booking WHERE email='$email'");
		
		$_SESSION['verify_code'] = $verify_code;
		header("Location: user.php");
		exit();
	}
	else {
		echo "Email or password was incorrect<br>";
	}
}

if(isset($_POST['register_button'])){
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$time = time();
	

		//Check if email is in valid format 
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

			$email = filter_var($email, FILTER_VALIDATE_EMAIL);

			//Check if email already exists 
			$e_check = mysqli_query($db, "SELECT email FROM bus_booking WHERE email='$email'");

			//Count the number of rows returned
			$num_rows = mysqli_num_rows($e_check);

			if($num_rows > 0) {
				echo "Email already in use<br>";
			}
			else{
				?> <h4 style="text-align: center;color: #5cb85c;font-weight: bold;"><?php echo "Sign up successfull";?></h4><?php
				$query = mysqli_query($db, "INSERT INTO bus_booking VALUES ('', '', '', '$name', '$phone', '$email', '$password', '', '', '', '', '$time', '', '', '', '')");
				$_SESSION['verify_code'] = $time;
				$email = $_POST["email"];
				$password = $_POST["password"];
				
				$check_database_query = mysqli_query($db, "SELECT * FROM bus_booking WHERE email='$email' AND password='$password'");
				$check_login_query = mysqli_num_rows($check_database_query);

				if($check_login_query == 1) {
					$row = mysqli_fetch_array($check_database_query);
					$verify_code = $row['verify_code'];

					$user_closed_query = mysqli_query($db, "SELECT * FROM bus_booking WHERE email='$email'");

					$_SESSION['verify_code'] = $verify_code;
					header("Location: user.php");
					exit();
				} 
			}
		}				
}
?>
  <div class="benner_section"><!-- start benner section -->
      <div class=" container" >
        <div class="row">
          <div class="benner_bg col-md-6">
             <div class="form_inner_section"><!-- left site form inner section -->
			 
			 
                 <div class="widget-main" style="background: rgba(255, 255, 255, 0.75); padding:25px;"> 
					<h4 class="header blue lighter bigger">
					<i class="ace-icon fa fa-coffee green"></i>
					 Please Sign in First
					</h4>
					<div class="space-6"></div>
						<form action="index.php" method="POST">
							<fieldset>
								<label class="block clearfix">
									<span class="block input-icon input-icon-right">
									<input type="text" class="form-control" placeholder="Name" required="" name="name" />
									<i class="ace-icon fa fa-user"></i>
									</span>
								</label><br>
								<label class="block clearfix input-box">
									<input type="tel" class="form-control" placeholder="Contact no" required="" name="phone" minlength="11" maxlength="11" style="padding-left: 42px; width: 209px;"/>
									<span class="unit block input-icon input-icon-right">+88</span>
									<i class="ace-icon fa fa-user"></i>
									</span>
								</label><br>
								<label class="block clearfix">
									<span class="block input-icon input-icon-right">
									<input type="text" class="form-control" placeholder="Email" required="" name="email" />
									<i class="ace-icon fa fa-user"></i>
									</span>
								</label><br>
								<label class="block clearfix">
									<span class="block input-icon input-icon-right">
										<input type="password" class="form-control" placeholder="Password" required="" name="password" />
										<i class="ace-icon fa fa-lock"></i>
									</span>
								</label>
								<div class="space"></div>
								<div class="clearfix">
				
								<button type="submit" class="btn btn-sm btn-success" name="register_button" value="">
									<i class="ace-icon fa fa-key"></i>
									<span class="bigger-110">Sign in</span>
								</button>
								</div>
								<div class="space-4"></div>
							</fieldset>
						</form>
						<div class="space-6"></div>	
				</div>
             </div><!-- end form inner section -->
          </div>
          <div class="col-md-6"><!-- rhgt site benner section -->
            <div class="right_site_benner">
				<div class="widget-main" style="background: rgba(255, 255, 255, 0.75); padding:25px;">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												 User Login Panel
											</h4>

											<div class="space-6"></div>

											<form action="index.php" method="POST">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="User Email" required="" name="email" />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label><br>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="User Password" required="" name="password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
													

														<button type="submit" class="btn btn-sm btn-success" name="customerLogin" value="Login">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="space-6"></div>

											
										</div>
            </div>
            
          </div><!-- end right site benner section -->
        </div>
      </div>
    </div><!-- end benner section -->
    <?php 
    include'footer.php';
     ?>
    