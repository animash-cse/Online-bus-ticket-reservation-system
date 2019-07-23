<?php 
 @session_start();
 class Login 
 {
 	// Login checking method
 	 public function LoginDashboard($db,$emailInfo,$passwordInfo){
    	$select_info = mysqli_query($db,"SELECT * FROM admin WHERE email='$emailInfo' && password='$passwordInfo'");
    	$countingUser = mysqli_num_rows($select_info);
    	$fetch = mysqli_fetch_array($select_info);
    	if($countingUser==1){
    		$_SESSION['adminInformation'] = $fetch['admin_id'];
    		$_SESSION['loginTime'] = date('H:i:s');
    		header("Location:../dashboard/index.php");
    	}else{
    		return "Email or Password Wrong !";
    	}
    }// Login checking method end

    // Login Out method start
    public function logout(){
    	session_destroy();
    	header("Location:../dashboard/login.php");
    }

    // Login Out method end  

    // Login Checking method start
    public function logChecking(){
    	if(isset($_SESSION['adminInformation'])){

    	}else{
    		header("Location:../dashboard/login.php");
    	}
    	
    } // Login checking method end

	 // Login Profile name  method start
	    public function profilename($db,$id){
		    $select_info = mysqli_query($db,"SELECT * FROM admin WHERE admin_id='$id'");
	    	$fetch = mysqli_fetch_array($select_info);
	    	return $fetch['name'];
	    	
	    } // Login Profile name  method end

   
 	
 }//end class

 ?>