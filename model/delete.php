<?php 
ob_start();
include'db_config.php';
//Location delete condition
 if(isset($_GET['location'])){
	$location = $_GET['location'];
	$delete = mysqli_query($db,"DELETE FROM district_location WHERE dis_id='$location'");
	header("Location:../dashboard/add_district.php");
 }
//Location delete condition
 if(isset($_GET['company_nameDelete'])){
	$location = $_GET['company_nameDelete'];
	$delete = mysqli_query($db,"DELETE FROM company_name WHERE company_id='$location'");
	header("Location:../dashboard/add_company.php");
 }
 //BusWithLocatonDelete delete condition
 if(isset($_GET['BusWithLocatonDelete'])){
	$location = $_GET['BusWithLocatonDelete'];
	$delete = mysqli_query($db,"DELETE FROM  bus_location WHERE bus_location_id='$location'");
	header("Location:../dashboard/busWithlocation.php");
 }

 //BusWithLocatonDelete delete condition
 if(isset($_GET['setbookingCencel'])){
	$id = $_GET['setbookingCencel'];
	$delete = mysqli_query($db,"DELETE FROM  card WHERE card_id='$id'");
	header("Location:../ticket_booking.php");
 }

 //BusWithLocatonDelete delete condition
 if(isset($_GET['bookingConform'])){
	$id = $_GET['bookingConform'];
	$delete = mysqli_query($db,"UPDATE bus_booking SET status='1' WHERE booking_id='$id'");
	header("Location:../dashboard/work-order.php");
 }

 ?>