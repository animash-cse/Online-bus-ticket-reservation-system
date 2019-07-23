<?php 
include_once'header.php';
if(isset($_POST['userApplyNow'])){
   $_SESSION['join_date'] = $_POST['jonin_date'];
   $_SESSION['from_location'] = $_POST['from_location'];
   $_SESSION['to_location'] = $_POST['to_location'];
}

?>
    <div class="benner_sectionverify"><!-- start benner section -->
      <div class=" container" >
        <div class="row">
          <div class="benner_bg col-md-8 col-md-offset-2">
            <div class="col-md-12">
                <div class="ticketbookingCompanyArea col-md-12">
          <form action="ticket_booking.php" method="post">
             <div class="col-md-12 company_category padding">
                <h4>Select Bus Comapany</h4>
                <div>
				<ul>
                  <?php 
                   $selectCompany = $Pmethod->busCompany_searchby_filtering($db,$_SESSION['from_location'],$_SESSION['to_location']);
                   $selectCompanyy = $Pmethod->busCompany_searchby_filtering($db,$_SESSION['from_location'],$_SESSION['to_location']);
                   $fetch_companyy = mysqli_fetch_array($selectCompanyy);
				
				   if($fetch_companyy['company_id'] == 0){
						   ?>
							<script>
							  alert('<?php echo "There is no bus in this route"; ?>');
							  window.location.replace('user.php');
							</script>
							<?php
					   }else{
						   while($fetch_company = mysqli_fetch_array($selectCompany)){
                      // bus company name show 
                      $busCompany = $Pmethod->singlecompany_View($db,$fetch_company['company_id']);
                      $fetch_busCompany = mysqli_fetch_array($busCompany);
						
					   
                   ?>
                  <li style="padding-left: 60px">
                    <label class="radio-inline" for="radio_Apple<?php echo $fetch_company['company_id']; ?>"> 
                        <input type="radio" name="company_id" class="star_rating" id="radio_Apple<?php echo $fetch_company['company_id']; ?>" value="<?php echo $fetch_company['company_id']; ?>" required style="margin-left: -111px;"> <?php echo $fetch_busCompany['company_name']; ?>
                    </label>
                  </li>
				  <p style="margin: -27px -1px 13px"><?php echo "(".$fetch_company['time'].")";?></p>
                 <?php }
					   }
				    ?>
                 
                </ul>
				</div>
                
                <div style="margin-top: 5px;"></div>
                <div>
                  <label>Bus type : </label><br>
                   <label class="radio-inline" for="ac"> 
                        <input type="radio" id="ac" name="bustype" value="AC" required style="margin-left: -111px;"> AC  
                    </label>
                    <label class="radio-inline" for="normal"> 
                        <input type="radio" id="normal" name="bustype" value="Normal" required style="margin-left: -109px;"> Normal  
                    </label>
                </div>
                
                <button type="submit" class="btn btn-primary" name="Again_Approve_submit">Again Approve</button>
             </div>
           </form>
          </div>

            </div>
           <!--  <div class="col-md-6">
                <div class="form_inner_section">
                 <form method="post" action="ticket_booking.php">
                  <div class="form-row">
                    <div class="padding_left form-group">
                      <label for="inputEmail4"> Verify Code </label>
                      <input type="text" class="form-control" id="inputEmail4" name="verify_code" value="<?php echo time(); ?>">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary" name="Again_Approve">Again Approve</button>
                </form>
             </div>
            </div> -->
             
          </div>
         
        </div>
      </div>
    </div> <!-- end benner section -->
    <?php 
    include'footer.php';
     ?>
    