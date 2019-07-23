<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Coustomer messages</title>
        <!-- Bootstrap -->

        <link rel="icon" href="img/icon.png"/>
        <link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/style.css">
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
                        <div class="col-md-12">                            
                            <div class=" col-md-12 pnl-header">
                                <div class=" col-md-12 pnl-header"style="padding: 15px;">
                                <div class="col-md-6 title-wraper">
                                    <h3 style="margin-top: 5px"> User messages </h3> 
                                </div>
                                
                            </div>
                            </div>
                            <!--  -->
							<div class="col-md-12">
								
								<?php
									  
									// Attempt select query execution
									$sql = "SELECT * FROM contact ORDER BY id DESC";
									if($result = mysqli_query($db, $sql)){
										if(mysqli_num_rows($result) > 0){
											echo "<table>";
												echo "<tr>";
												
													echo "<th style='padding: 10px;'>Name</th>";
													echo "<th>Email</th>";
													echo "<th>Phone</th>";
													echo "<th>Message</th>";
												
												echo "</tr>";
											while($row = mysqli_fetch_array($result)){
												echo "<tr>";
													echo "<td style='padding: 10px;'>" . $row['name'] . "</td>";
													echo "<td>" . $row['email'] . "</td>";
													echo "<td>" . $row['phone'] . "</td>";
													echo "<td>" . $row['message'] . "</td>";
													
												echo "</tr>";
											}
											echo "</table>";

										} 
									} 
									
				
								?>
							</div>
							
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