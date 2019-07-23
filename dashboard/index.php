<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Home</title>
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
                        <div class="col-md-12">                            
                            <div class=" col-md-12 pnl-header">
                                <div class="col-md-1 dolor-icon-wraper">
                                    <span><i class="fa fa-money"></i></span>
                                </div>
                                <div class="col-md-11 title-wraper">
                                    <h3>SASTC.com </h3>
                                    <h5>Bangladesh </h5>
                                </div>
                            </div>
                            <!--  -->
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