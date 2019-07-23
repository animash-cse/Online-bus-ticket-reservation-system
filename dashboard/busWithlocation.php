<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Add bus with location</title>
        <!-- Bootstrap -->
        
        <link rel="icon" href="img/icon.png"/>
        <link rel="stylesheet" href="css/animate.css">
        <link href="css/customize.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>
        <?php include './top-bar.php'; ?>

        <div class="containerr">
            <div class="row" style="margin-top: -41px;">
                <div class="wrapper">

                    <!--side bar--> 

                    <?php include './side-bar.php'; ?>

                    <!--side bar--> 

                    <div class=" content">
                        <div class="col-md-12 col-xs-12">                            
                            <div class=" col-md-12 col-xs-12 pnl-header"style="padding: 15px;">
                                <div class="col-md-2 col-xs-12 title-wraper">
                                    <h3 style="margin-top: 5px"> Bus Location </h3> 
                                </div>
                                <div class="col-md-3 col-xs-12 pull-right">
                                    <button class="btn common-btn" id="creat-voucher" data-toggle="modal" data-target="#squarespaceModal">Bus Connection</button>
                                    <button class="btn common-btn" id="cancel"  onclick="javascript:window.location.href = 'index.php'" type="button">Cancel</button>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12">
                               
                                <div class="row"style="margin-top: 20px;">
                                    <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                              <?php 
                                if(isset($_POST['BusWithLocation_submit'])){
                                        $from_location = $_POST['from_location'];
                                        $to_location = $_POST['to_location'];
                                        $company = $_POST['company_name'];
                                        $price = $_POST['price'];
                                        $time = $_POST['time'];
                                        $result = $Pmethod->BusWithLocation_insert($db,$from_location,$to_location,$company,$price,$time);
                                        if($result){ ?>
                                            <div class="alert alert-success">
                                            <strong><?php echo $result; ?></strong> .
                                            </div>
                                       <?php }
                                        }
                                 ?>
                                    </div>
                                    <div class="col-md-10 col-xs-12 value-table">
                                        <table class="table table-striped table-bordered table-responsive">
                                            <thead>
                                                <tr>
                                                    <h3>View All Information</h3>
                                                    <th>Sl</th>
                                                    <th>From Locaton </th>
                                                    <th>To Locaton </th>
                                                    <th>Company name </th>
                                                    <th>Price</th>
                                                    <th>Time</th>
                                                    <!-- <th>Eidt</th> -->
                                                    <th>Delete</th>
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
                                                    <!-- <td><a href="">Edit</a></td> -->
                                                    <td><a href="../model/delete.php?BusWithLocatonDelete=<?php echo $fetch_bus['bus_location_id']; ?>">Delete</a></td>
                                                </tr>
                                                 <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>                


                            <!-- start modal of new Voucher--> 
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12"style="margin-top: 15px;">
                                        <!-- line modal -->
                                        <div class="modal fadeInDown" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                             <form action="" method="POST">
                                                <div class="modal-content"style="width: 800px">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                        <h3 class="modal-title" id="lineModalLabel">Add Bus in the Location way</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3 class="modal-title" id="lineModalLabel"style="text-align: left;font-size: 20px;"> <i class="fa fa-warning" style="color: wheat"></i> Bus with location Information </h3>
                                                        <!-- content goes here -->
                                                        <form>
                                                            <div class="form-group"style="padding: 30px 0px 30px 0; margin: 0">
                                                                <div class="col-md-12 padding">
                                                                    <div class="col-md-1 padding">
                                                                        <label class="labelll"> Form :</label>
                                                                    </div>
                                                                    <div class="col-md-5 padding">
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
                                                                     <div class="col-md-1">
                                                                        <label class="labelll"> To :</label>
                                                                    </div>
                                                                     <div class="col-md-5 padding" style="padding: 0px;">
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
                                                               
                                                               
                                                            </div>
                                                            <div class="form-group"style="padding: 30px 0px 30px 0; margin: 0">
                                                                <div class="col-md-12 padding">
                                                                    <div class="col-md-2 padding">
                                                                        <label class="labelll"> Bus name :</label>
                                                                    </div>
                                                                    <div class="col-md-10 padding">
                                                                        <select name="company_name" class="form-control">
                                                                            <option value="">--Select Bus--</option>
                                                                        <?php  
                                                                        $selectbusCompany = $Pmethod->company_View($db);
                                                                        while($fetchCompany = mysqli_fetch_array($selectbusCompany)){
                                                                         ?>
                                                                         <option value="<?php echo $fetchCompany['company_id'];?>"><?php echo $fetchCompany['company_name'];?></option>
                                                                        <?php } ?>
                                                                        </select>
                                                                       
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                            <div class="form-group"style="padding: 30px 0px 30px 0; margin: 0">
                                                                <div class="col-md-12 padding">
                                                                    <div class="col-md-2 padding">
                                                                        <label class="labelll"> Price :</label>
                                                                    </div>
                                                                    <div class="col-md-8 padding">
                                                                        <input type="number" name="price" class="form-control" placeholder="00.00">
                                                                       
                                                                    </div><br><br>
																	<div class="col-md-2 padding">
                                                                        <label class="labelll"> Time :</label>
                                                                    </div>
                                                                    <div class="col-md-8 padding">
                                                                        <input type="text" name="time" class="form-control" placeholder="AM/PM">
                                                                       
                                                                    </div>
                                                                    <div class="col-md-1">
                                                                       <input type="submit" name="BusWithLocation_submit" value="Submit" class="btn btn-md btn-primary pull-left">
                                                                    </div>
                                                                </div>
                                                               
                                                               
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-default common-btn" data-dismiss="modal" style="width: 90px;float: right;" role="button">Cancel</button>
                                                            </div>

                                                           <!--  <div class="btn-group" role="group">
                                                                <button type="button" id="saveImage" class="btn btn-default btn-hover-green common-btn"style="width: 90px;float: right" data-action="save" role="button">Next</button>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </form>

                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- end modal of new Voucher--> 
                        </div>
                    </div>
                </div>
            </div>   
        </div>



        <script>
            /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;

            for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                    } else {
                        dropdownContent.style.display = "block";
                    }
                });
            }
        </script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/npm.js"></script>
        <script src="js/customize.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </body>
</html>