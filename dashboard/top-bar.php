<?php 
 session_start();
 ob_start();
 // error_reporting(0);
 include'../model/db_config.php';
 include'../model/controller.php';
 include'../model/login.php';
 $Pmethod = new myController();
 $login = new Login();
 $lgChecking = $login->logChecking();//login checking 
 ?>
<style>
    .right-header ul li a{
        color: #fff;
        text-decoration: none;
        display: block;
        padding: 10px;
        text-decoration: none;
        display: block;
    }
    .right-header ul li{
        float: left;
    }

    .right-header i{
        font-size: 17px;
    }

</style>
<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"style="background: #2578CF;border: none">
        <div class="navbar-header">
            <!--        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>-->
            <a href="#" class="push_menu"><span class="tgl-bar glyphicon glyphicon-align-justify pull-left"></span></a>
            <a class="navbar-brand" href="index.php"style="color: #fff;"> <?php echo $login->profilename($db,$_SESSION['adminInformation']) ?></a>               
        </div>
        <div class="pull-right right-header">
            <ul class="list-inline list-unstyled">
                <li><a href=""> <i class="fa fa-clock-o"></i> Log in time : <?php echo $_SESSION['loginTime']; ?></a></li>
                <!-- <li><a href=""><i class="fa fa-sitemap"></i> sitemap</a></li> -->
                <li><a href="../model/logout.php"> <i class="fa fa-sign-out"></i> signOut</a></li>
            </ul>
        </div>
    </nav>
</div>