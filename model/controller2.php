<?php 

class myController2 
{
	public function districtLocation($db,$location){
		if(empty($location)){
			return 'Fillup the text bar !';
		}else{
		$insert = mysqli_query($db,"INSERT INTO district_location (dis_id,dis_name) VALUES ('','$location')");
		return "Location Add Successful !";
		}
	}


	// method location view 
	public function districtLocationView($db){
		return $select = mysqli_query($db,"SELECT * FROM district_location ORDER BY dis_id ASC");
	}

	// method location single view 
	public function singlelocation_View($db,$id){
		return $select = mysqli_query($db,"SELECT * FROM district_location WHERE dis_id='$id'");
	}
	
	// method bus time view 
	public function time_View($db,$id){
		return $select = mysqli_query($db,"SELECT * FROM bus_location ORDER BY bus_location_id='$id' DESC");
	}
	
	// method bus time view 
	public function time_View1($db,$from,$to){
		return $select = mysqli_query($db,"SELECT * FROM bus_location WHERE from_id='$from' && to_id='$to'");
	}

	/// company name add method 
	public function company_insert($db,$company){
		if(empty($company)){
			return 'Fillup the text bar !';
		}else{
		$insert = mysqli_query($db,"INSERT INTO company_name (company_id,company_name) VALUES ('','$company')");
		return "Company Add Successful !";
		}
	}


	// method Company view 
	public function company_View($db){
		return $select = mysqli_query($db,"SELECT * FROM company_name ORDER BY company_id DESC");
	}

	// method Company single view 
	public function singlecompany_View($db,$id){
		return $select = mysqli_query($db,"SELECT * FROM company_name WHERE company_id='$id'");
	}

/// BusWithLocation_insert name add method 
	public function BusWithLocation_insert($db,$from_location,$to_location,$company,$price,$time){
		if(empty($company)){
			return 'Fillup the text bar !';
		}
		else{
		$insert = mysqli_query($db,"INSERT INTO bus_location (from_id,to_id,company_id,price,time) VALUES ('$from_location','$to_location','$company','$price','$time')");
		return "Bus With Location Add Successful !";
		}
	}


	// method bus with conntion location view 
	public function busWithLocation($db){
		return $select = mysqli_query($db,"SELECT * FROM bus_location ORDER BY bus_location_id DESC");
	}
	// method bus with conntion location view 
	public function singlebusWithLocation($db,$id){
		return $select = mysqli_query($db,"SELECT * FROM bus_location WHERE company_id='$id'");
	}


	// method location aginest bus companye show 
	public function busCompany_searchby_filtering($db,$formlocation,$tolocation){
		return $select = mysqli_query($db,"SELECT * FROM bus_location WHERE from_id='$formlocation' && to_id='$tolocation' ORDER BY bus_location_id ASC");
	}


	// user setbooking list view method
	public function setbooking_cardView($db,$company_id,$serial,$joindate){
	  			return $select = mysqli_query($db,"SELECT * FROM card WHERE company_id='$company_id' && serial_id='$serial' && date='$joindate' ORDER BY card_id ASC");

	  }//end method


	// user setbooking list view method
	public function setbooking_block_method($db,$company_id,$serial,$joindate,$set){
	  	 $select = mysqli_query($db,"SELECT * FROM card WHERE company_id='$company_id' && date='$joindate' ORDER BY card_id ASC");
	 	  while($fetch = mysqli_fetch_array($select)){
	 	  	 if($fetch['bus_set']==$set){
	 	  	 	echo 'addtowishlist_block';
	 	  	 }
	 	  }

	  }//end method


///Set Booking Conform  
public function BusSetbooking($db,$from_location,$to_location,$name,$email,$mobile,$password,$verify_code,$company_id,$bustype,$join_date,$setbooking_name,$price,$payment_method, $time){

	//set number check ///
	$selectBusSet = mysqli_query($db,"SELECT * FROM bus_booking WHERE verify_code='$verify_code' && booking_date='$join_date'");
	$sameSet = mysqli_num_rows($selectBusSet);
	if($sameSet=='0'){

	//$insert = mysqli_query($db,"INSERT INTO bus_booking (form_place,to_place,name,mobile,email,password,buy_type,company_name,busy_setnumber,booking_date,verify_code,price,payment,status, time) VALUES ('$from_location','$to_location','$name','$mobile','$email','$password','$bustype','$company_id','$setbooking_name','$join_date','$verify_code','$price','$payment_method','0', '$time')");
	$insert = mysqli_query($db,"UPDATE bus_booking SET form_place='$from_location', to_place='$to_location', name='$name', mobile='$mobile',email='$email', password='$password', buy_type='$bustype', company_name='$company_id', busy_setnumber='$setbooking_name', booking_date='$join_date', verify_code='$code', price='$price', payment='$payment_method', status='0', time='$time' WHERE verify_code='$code'");
	
	if($insert){
			return "Ticket Booking Successfully !";
		}else{
		return "Ticket Booking Fails !";	
		}
	
	}
	
	}//end method

		// user booking set list view method
	public function setbooking_view($db,$joindate,$status){
	  			return $select = mysqli_query($db,"SELECT * FROM bus_booking WHERE booking_date='$joindate' && status='$status' ORDER BY booking_id ASC");

	  }//end method
	
}



 ?>