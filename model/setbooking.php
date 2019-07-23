<?php 
session_start();
include'db_config.php';
if(isset($_POST['setbooking'])){
	$setbooking = $_POST['setbooking'];
	$id = $_SESSION['verify_code'];
	$company_id = $_SESSION['company_id'];
	$join_date =  $_SESSION['join_date'];
	//set number check ///
	$selectInfo = mysqli_query($db,"SELECT * FROM card WHERE serial_id='$id'");
	$counting = mysqli_num_rows($selectInfo);

   //set number check ///
	$selectBusSet = mysqli_query($db,"SELECT * FROM card WHERE serial_id='$id' && bus_set='$setbooking'");
	$sameSet = mysqli_num_rows($selectBusSet);

	if($counting<=3){
		if($sameSet<1){ //onlin a set only insert
			$setInsert = mysqli_query($db,"INSERT INTO card (company_id,bus_set,price,serial_id,date) VALUES ('$company_id','$setbooking','','$id','$join_date')");
		}//end if
		
	}
	

}

 ?>