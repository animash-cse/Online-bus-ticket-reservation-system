<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Work Orders</title>
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

        <style>
            .radious-none{
                border-radius: 0px;
                overflow: hidden;
            }
        </style>
        <?php include './top-bar.php'; ?>

        <div class="containerr">
            <div class="row" style="margin-top: -41px;">
                
                <div class="wrapper">
                    
                    <!--side bar--> 
                    <?php include './side-bar.php'; ?>
                    <!--side bar--> 

                    <div class=" content">
                        <div class="col-md-12">                            
                            <div class=" col-md-12 pnl-header"style="padding: 15px;">
                                <div class="col-md-6 title-wraper">
                                    <h3 style="margin-top: 5px"> Ticket Booking Information </h3> 
                                </div>
                                <div class="col-md-3 pull-right">
                                    <button class="btn common-btn" id="creat-voucher" data-toggle="modal" data-target="#workorder"> <i class="fa fa-plus"></i> Revenue</button>
                                    <button class="btn common-btn" id="cancel"  onclick="javascript:window.location.href = 'index.php'" type="button">Cancel</button>
                                </div>
                            </div>

                            <!--work order-->
                            <div class="col-md-12">
                                <div class="row"style="padding-top: 15px;">
                                    <h5 style="font-size: 18px;padding: 0px 0px 5px 15px;margin: 0;"> Today Ticket booking </h5>
                                    <!-- <div class="col-md-12">
                                        <div class="col-md-2"style="padding: 0">
                                            <select class="btn btn-default radious-none" onchange="changekeyword(this.value)">
                                                <option value="select" selected="selected"> Select Bus </option>
                                                <option value="IT" >Italian</option>
                                                <option value="FR" >France</option>
                                                <option value="BN" >Bangladesh</option>
                                                <option value="ARABIC" >Arabic</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3"style="padding: 0">
                                            <input type="text" id="keyword1" class="form-control radious-none"style="margin-left: -60px;">
                                            <button class="btn btn-default pull-right"style="margin-top: -34px;width:22%;">Go</button>
                                        </div>
                                        <div class="col-md-2">
                                            <a class="btn btn-default"><i class="fa fa-arrow-down"></i> Action </a>
                                        </div>
                                        <div class="col-md-5"></div>
                                    </div> -->
                                    <div class="col-md-12">
                                        <table class="table table-striped table-bordered"style="margin-top: 5px;">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Customer </th>
                                                    <th>Phone </th>
                                                    <th>Email </th>
                                                    <th>Bus</th>
                                                    <th>Time</th>           
                                                    <th>From L.C</th>
                                                    <th>To L.C </th>
													<th>Set No</th>
                                                    <th>Price</th>
                                                    <th>Pay</th>
                                                    <th>Verify Code</th>
                                                    <th>System </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                <?php $sl=1;
                                 $date = date("Y-m-d");
                                    $selectBooking = $Pmethod->setbooking_view($db,$date,0);
                                    while($fetch = mysqli_fetch_array($selectBooking)){
										
									
                                    $locatonfrom = $Pmethod->singlelocation_View($db,$fetch['form_place']);
                                    $fetch_locatonfrom = mysqli_fetch_array($locatonfrom);

                                    $locatonTo = $Pmethod->singlelocation_View($db,$fetch['to_place']);
                                    $fetch_locatonto = mysqli_fetch_array($locatonTo);
									
																		
                                    // bus company name show 
                                    $busCompany = $Pmethod->singlecompany_View($db,$fetch['company_name']);
                                    $fetch_busCompany = mysqli_fetch_array($busCompany);
									
									$locatonTime = $Pmethod->time_View1($db,$fetch['form_place'], $fetch['to_place']);
                                    $fetch_time = mysqli_fetch_array($locatonTime);
									
									?>
                                                <tr>
                                                   <!--  <td><a href=""style="text-decoration: none" data-toggle="modal" data-target="#workorder">2018/00016</a></td> -->
                                                    <td><?php echo $sl++; ?></td>
                                                    <td><?php echo $fetch['name']; ?></td>
                                                    <td><?php echo $fetch['mobile']; ?></td>
                                                    <td><?php echo $fetch['email']; ?></td>
                                                    <td><?php echo $fetch_busCompany['company_name']; ?></td>
													<td><?php echo $fetch_time['time']; ?></td>
													
                                                    
                                                    <td><?php echo $fetch_locatonfrom['dis_name']; ?></td>
                                                    <td><?php echo $fetch_locatonto['dis_name']; ?></td>
                                                   <td>
                                                        <?php 
															$ex = explode(',', $fetch['busy_setnumber']);
															$count = count($ex) - 1;
															for ($i = 0; $i < $count; $i++) {
															$id = $ex["$i"]; ?>
															<span style="padding:2px;color: #2578CF;"><?php echo $id;?></span>|
														<?php }
                                                        ?>
                                                            
                                                    </td>
                                                    <td><?php echo $fetch['price']; ?></td>
                                                    <td><?php echo $fetch['payment']; ?></td>
                                                    <td><?php echo $fetch['verify_code']; ?></td>
                                                    <td><a href="../model/delete.php?bookingConform=<?php echo $fetch['booking_id']; ?>">Conform</a></td>
                                                  
                                                </tr>

                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                          
                           

                            <script>
                                function changekeyword(keyword) {
                                    var element = document.getElementById("keyword1");
                                    element.value = keyword;
                                    element.innerHTML = keyword;
                                }

                               
                            </script>

                          
                            <!-- start modal of work order-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12"style="margin-top: 15px;">
                                        <!-- line modal -->
                                        <div class="modal fadeInDown" id="workorder" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content"style="width: 800px">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                        <h3 class="modal-title" id="lineModalLabel">Work Order Details</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row" style="width: 100%;padding: 30px 0 30px;margin-left: 50px;">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <h5 class="pull-right">Order Serial #</h5>
                                                                    </div>
                                                                    <div class="col-md-3">

                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <h5 class="pull-right">Order Number:</h5>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control"style="height: 26px;padding: 0;margin: 5px -20px;">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <h5 class="pull-right">Project Name:</h5>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <select class="form-control"style="height: 26px;padding: 0;margin: 5px -20px;">
                                                                            <option><---select-----></option>
                                                                            <option>ABC Company Ltd</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <h5 class="pull-right">Work Name:</h5>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <select class="form-control"style="height: 26px;padding: 0;margin: 5px -20px;">
                                                                            <option><---select-----></option>
                                                                            <option>ABC Company Ltd</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <h5 class="pull-right">Client Name:</h5>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <select class="form-control"style="height: 26px;padding: 0;margin: 5px -20px;">
                                                                            <option><---select-----></option>
                                                                            <option>ABC Company Ltd</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <h5 class="pull-right">Description:</h5>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <input type="text" class="form-control"style="height: 26px;padding: 0;margin: 5px -20px;">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <h5 class="pull-right">Order Date:</h5>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="date" class="form-control"style="height: 26px;padding: 0;margin: 5px -20px;">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <h5 class="pull-right">Order Amount:</h5>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="text" class="form-control"style="height: 26px;padding: 0;margin: 5px -20px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- content goes here -->

                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-default common-btn" data-dismiss="modal" style="width: 90px;float: left" role="button">Cancel</button>
                                                            </div>

                                                            <div class="btn-group" role="group">
                                                                <button type="button" id="saveImage" class="btn btn-default btn-hover-green common-btn"style="width: 90px;float: right" data-action="save" role="button">Create</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- start modal of paid order-->
                            
                        </div>
                    </div>
                </div>
            </div>   
        </div>

        <!--sidebar script-->
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
        <!--sidebar script-->

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