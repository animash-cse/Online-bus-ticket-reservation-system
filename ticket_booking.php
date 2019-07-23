<?php 
include_once'header.php';
if(isset($_POST['Again_Approve_submit'])){
  //$_SESSION['verify_code'] = $_POST['verify_code'];
  $_SESSION['company_id'] = $_POST['company_id'];
  $_SESSION['bustype'] = $_POST['bustype'];
}

 $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'');
 
date_default_timezone_set("Asia/Dhaka");


?>
    <div class="ticketbook_section"><!-- start benner section -->
      <div class="row">
      <div class="container" >
        <div class="row">
          
          <div class="ticketbookingArea col-md-5">
             <div class="col-md-10 col-md-offset-1 ticketbook">

             <div class="col-md-12" style="padding-bottom: 10px;">
               <div class="col-md-4 col-md-offset-7">
                   <div class="driverset"><img src="images/driver.png"></div>
               </div>
             </div>
             <div class="col-md-12 padding">
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'A1'); ?>" title="A1" value="A1">A1</button></span>
                   </label> 
                   <label>
                       <span> <button  class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'A2'); ?>" title="A2" value="A2">A2</button></span>
                   </label>
               </div>

               
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'A3'); ?>" title="A3" value="A3">A3</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'A4'); ?>" title="A4" value="A4">A4</button></span>
                   </label>
               </div>
             </div>
              <div class="col-md-12 padding">
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'B1'); ?>" title="B1" value="B1">B1</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'B2'); ?>" title="B2" value="B2">B2</button></span>
                   </label>
               </div>
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'B3'); ?>" title="B3" value="B3">B3</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'B4'); ?>" title="B4" value="B4">B4</button></span>
                   </label>
               </div>
             </div>
              <div class="col-md-12 padding">
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'C1'); ?>" title="C1" value="C1">C1</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'C2'); ?>" title="C2" value="C2">C2</button></span>
                   </label>
               </div>
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'C3'); ?>" title="C3" value="C3">C3</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'C4'); ?>" title="C4" value="C4">C4</button></span>
                   </label>
               </div>
             </div>
              <div class="col-md-12 padding">
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'D1'); ?>" title="D1" value="D1">D1</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'D2'); ?>" title="D2" value="D2">D2</button></span>
                   </label>
               </div>
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'D3'); ?>" title="D3" value="D3">D3</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'D4'); ?>" title="D4" value="D4">D4</button></span>
                   </label>
               </div>
             </div>
              <div class="col-md-12 padding">
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'E1'); ?>" title="E1" value="E1">E1</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'E2'); ?>" title="E2" value="E2">E2</button></span>
                   </label>
               </div>
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'E3'); ?>" title="E3" value="E3">E3</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'E4'); ?>" title="E4" value="E4">E4</button></span>
                   </label>
               </div>
             </div>
              <div class="col-md-12 padding">
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'F1'); ?>" title="F1" value="F1">F1</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'F2'); ?>" title="F2" value="F2">F2</button></span>
                   </label>
               </div>
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'F3'); ?>" title="F3" value="F3">F3</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'F4'); ?>" title="F4" value="F4">F4</button></span>
                   </label>
               </div>
             </div>
              <div class="col-md-12 padding">
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'G1'); ?>" title="G1" value="G1" style="padding: 6px 11px;">G1</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'G2'); ?>" title="G2" value="G2" style="padding: 6px 11px;">G2</button></span>
                   </label>
               </div>
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'G3'); ?>" title="G3" value="G3" style="padding: 6px 11px;">G3</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'G4'); ?>" title="G4" value="G4" style="padding: 6px 11px;">G4</button></span>
                   </label>
               </div>
             </div>
            <div class="col-md-12 padding">
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'H1'); ?>" title="H1" value="H1" style="padding: 6px 11px;">H1</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'H2'); ?>" title="H2" value="H2" style="padding: 6px 11px;">H2</button></span>
                   </label>
               </div>
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'H3'); ?>" title="H3" value="H3" style="padding: 6px 11px;">H3</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'H4'); ?>" title="H4" value="H4" style="padding: 6px 11px;">H4</button></span>
                   </label>
               </div>
             </div>
            <div class="col-md-12 padding">
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'I1'); ?>" title="I1" value="I1" style="padding: 6px 14.5px;">I1</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'I2'); ?>" title="I2" value="I2" style="padding: 6px 14.5px;">I2</button></span>
                   </label>
               </div>
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'I3'); ?>" title="I3" value="I3" style="padding: 6px 14.5px;">I3</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'I4'); ?>" title="I4" value="I4" style="padding: 6px 14.5px;">I4</button></span>
                   </label>
               </div>
             </div>
            <div class="col-md-12 padding">
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'J1'); ?>" title="J1" value="J1" style="padding: 6px 13px;">J1</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'J2'); ?>" title="J2" value="J2" style="padding: 6px 13px;">J2</button></span>
                   </label>
               </div>
               <div class="col-md-6 padding">
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'J3'); ?>" title="J3" value="J3" style="padding: 6px 13px;">J3</button></span>
                   </label> 
                   <label>
                       <span> <button class="btn btn-default <?php $Pmethod->setbooking_block_method($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date'],'J4'); ?>" title="J4" value="J4" style="padding: 6px 13px;">J4</button></span>
                   </label>
               </div>
             </div>


           </div>

          </div>
          <div class="ticketbookingArea col-md-7 padding">
              <div class="col-md-12 ticketbooking_form">
                  <form action="" method="post">
                     
                  <input type="hidden" name="from_location" value="<?php echo $_SESSION['from_location']; ?>">
                  <input type="hidden" name="to_location" value="<?php echo $_SESSION['to_location']; ?>">
                  <input type="hidden" name="verify_code" value="<?php echo $_SESSION['verify_code']; ?>">
                  <input type="hidden" name="company_id" value="<?php echo $_SESSION['company_id']; ?>">
                  <input type="hidden" name="bustype" value="<?php echo $_SESSION['bustype']; ?>">
                  <input type="hidden" name="join_date" value="<?php echo $_SESSION['join_date']; ?>">

                  <div class="col-md-12">
                    <table class="table table-bordered table-responsive" style="background: #fff;">
                      <tr>
                        <th>SL</th> <th>Sit Number</th> <th>Price </th><th> system </th>
                      </tr>
                      <?php 
                      $s=1;
                      $Total=0;
                      $Setinfo = $Pmethod->setbooking_cardView($db,$_SESSION['company_id'],$_SESSION['verify_code'],$_SESSION['join_date']);
                      while($fetch_info = mysqli_fetch_array($Setinfo)){
                        $selectPrice = $Pmethod->singlebusWithLocation($db,$fetch_info['company_id']);
                        $fetch_price = mysqli_fetch_array($selectPrice);

                       ?>
                      <tr>
                        <input type="hidden" name="setbooking_name[]" value="<?php echo $fetch_info['bus_set']; ?>">
                        <td><?php echo $s++; ?></td> 
                        <td><?php echo $fetch_info['bus_set']; ?></td>
                         <td><?php echo number_format($price = $fetch_price['price'],2); ?></td>
                         <td><a href="model/delete.php?setbookingCencel=<?php echo $fetch_info['card_id']; ?>">Delete</a></td>
                      </tr>
                    <?php 
                    @$Total=$Total+$price;
                     } ?>
                     
                      <tr>
                         <td colspan="2" class="text-right">Total </td><td colspan="2" ><?php echo number_format(@$Total,2); ?></td>
                      </tr>
                    </table>
                     <div class="form-group col-md-12 padding">
                           <label for="inputPassword4">Payment Method</label>
                         <select class="form-control" name="payment_method">
                           <option value="">--Select--</option>
                           <option value="Roket">Roket</option>
                           <option value="Bkash">Bkash</option>
                           <option value="Mkash">Mkash</option>

                         </select>
                      </div>
                   <input type="hidden" name="price" value="<?php echo $Total; ?>">
                     <!-- <input type="submit" name="conformBooking_Submit" class="btn btn-default btn-primary" value="Submit"> -->
					 <input type="submit" name="conformBooking_test" class="btn btn-default btn-primary" value="Submit">
                 </form>
                  </div>
                  <?php 
				  if(isset($_POST['conformBooking_test'])){
                         $name = $user['name'];
                         $email = $user['email'];
                         $mobile = $user['mobile'];
                         $password = $user['password'];
                         $from_location = $_POST['from_location'];
                         $to_location = $_POST['to_location'];
                         $verify_code = $user['verify_code'];
                         $company_id = $_POST['company_id'];
                         $bustype = $_POST['bustype'];
                         $join_date = $_POST['join_date'];
						 
						 $time = date("h:i:sa");
						 
                         $price = $_POST['price'];
                         $payment_method = $_POST['payment_method'];
                         // set number 
                          if(isset($_POST['setbooking_name'])){
                          $setbooking_name =" ";
                          foreach ($_POST['setbooking_name'] as $checknumber) {
                          $setbooking_name .= "$checknumber,";
                          }
                        }

                        $insert = mysqli_query($db,"UPDATE bus_booking SET form_place='$from_location', to_place='$to_location', name='$name', mobile='$mobile',email='$email', password='$password', buy_type='$bustype', company_name='$company_id', busy_setnumber='$setbooking_name', booking_date='$join_date', verify_code='$code', price='$price', payment='$payment_method', status='0', time='$time' WHERE verify_code='$code'");
												
						if($insert ){
							?>
							<script>
							  alert('<?php echo "Ticket booking successfull"; ?>');
							  window.location.replace('user.php');
							</script>
							<?php
						}
						
                      
                  }
				  
				  
                  /* if(isset($_POST['conformBooking_Submit'])){
                         $name = $user['name'];
                         $email = $user['email'];
                         $mobile = $user['mobile'];
                         $password = $user['password'];
                         $from_location = $_POST['from_location'];
                         $to_location = $_POST['to_location'];
                         $verify_code = $user['verify_code'];
                         $company_id = $_POST['company_id'];
                         $bustype = $_POST['bustype'];
                         $join_date = $_POST['join_date'];
						 
						 $time = date("h:i:sa");
						 
                         $price = $_POST['price'];
                         $payment_method = $_POST['payment_method'];
                         // set number 
                          if(isset($_POST['setbooking_name'])){
                          $setbooking_name =" ";
                          foreach ($_POST['setbooking_name'] as $checknumber) {
                          $setbooking_name .= "$checknumber,";
                          }
                        }

                        $bookingConform = $Pmethod->BusSetbooking($db,$from_location,$to_location,$name,$email,$mobile,$password,$verify_code,$company_id,$bustype,$join_date,$setbooking_name,$price,$payment_method, $time);
                        if($bookingConform){
                        ?>
                        <script>
                          alert('<?php echo $bookingConform; ?>');
                          window.location.replace('ticket_booking.php');
                        </script>
                        <?php
                      }
                  } */
                   ?>
                 
              </div>
          </div>
         
        </div>
       </div>
     </div>
    </div><!-- end benner section -->
  <?php 
    include'footer.php';
  ?>
    <script>
$("button").click(function() {
    var fired_button = $(this).val();
    // alert(fired_button);
    var setbook = 'setbooking='+ fired_button;
      $.ajax
      ({
          type: "POST",
          url: "./model/setbooking.php",
          data: setbook,
          cache: false,
          
      });
});
// page loading for 
$('button').click(function(){
      $('body').load( 'ticket_booking.php' );
  });

$(".addtowishlist_block").prop('disabled', true); 

   </script>
