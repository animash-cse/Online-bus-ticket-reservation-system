<?php 

include_once'header2.php'; 
include'./model/controller2.php';
$Pmethod = new myController2();


/*
    $service_data = mysqli_query($db, "SELECT * FROM company_name");
    $data = mysqli_fetch_array($service_data);
   
    $size = sizeof($data);
	echo $data;
	$value = 1;
	echo $data[1];
	echo $data[2];
	echo $data[3];
	echo $data[4];
    for($value; $value <=$size; $value++) {
      
      echo $data[$value];

    }
*/


?>
    
<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3><strong>Service Information</strong></h3>
    </div>
	
	<div>
                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Sl</th>
                                                    <th>From</th>
                                                    <th>To</th>
                                                    <th>Company name </th>
                                                    <th>Price</th>
                                                    <th>Time</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                  $i=1;
                                                  $selectbusLocation = $Pmethod->busWithLocation($db);
                                                  while($fetch_bus = mysqli_fetch_array($selectbusLocation)){

                                                  $locatonfrom = $Pmethod->singlelocation_View($db,$fetch_bus['from_id']);
                                                  $fetch_locatonfrom = mysqli_fetch_array($locatonfrom);

                                                  $locatonTo = $Pmethod->singlelocation_View($db,$fetch_bus['to_id']);
                                                  $fetch_locatonto = mysqli_fetch_array($locatonTo);
                                                  // bus company name show 
                                                  $busCompany = $Pmethod->singlecompany_View($db,$fetch_bus['company_id']);
                                                  $fetch_busCompany = mysqli_fetch_array($busCompany);
												  
												  
												  $busTime = $Pmethod->time_View($db,$fetch_bus['bus_location_id']);
                                                  $fetch_busTime = mysqli_fetch_array($busTime);
												  
												  $busCompany_time = mysqli_query($db,"SELECT * FROM bus_location");
												  
                                                  $fetch_time = mysqli_fetch_array($busCompany_time);
												  
												  
                                                 ?>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo $fetch_locatonfrom['dis_name']; ?></td>
                                                    <td><?php echo $fetch_locatonto['dis_name']; ?></td>
                                                    <td><?php echo $fetch_busCompany['company_name']; ?></td>
                                                    <td><?php echo $fetch_bus['price']; ?></td>
                                                    <td><?php echo $fetch_busTime['time']; ?></td>
                                                    
                                                </tr>
                                                 <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
  <?php
 
  
  ?>
  
</section>
<?php 
include'footer.php';
 ?>
