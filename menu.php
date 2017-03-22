<?php
/**
 * Created by PhpStorm.
 * User: Alienware
 * Date: 2/22/2017
 * Time: 12:22 PM
 */
?>
<style>
    .navbar-custom{
        position: relative;
        margin: 0;
    }
    .navbar-brand img{
        height: 50px;
        width: 50px;
    }
    .navbar-brand img:hover{
        cursor: pointer;
    }
</style>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid" style="background-color: #FFFFFF">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php" style="padding: 5px; ">
                <img src="images/logo.png">
            </a>
            <a class="navbar-brand" href="index.php" style="color:#333333">
                Puggo 360
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="background-color: #FFFFFF">
                <li>
                    <a href="index.php" style="color:#0085A1">Home</a>
                </li>
                <li>
                    <a href="service.php" style="color:#0085A1">Service</a>
                </li>
                <li>
                    <a href="about.php" style="color:#0085A1">Team</a>
                </li>
                <li>
                    <a href="contact.php" style="color:#0085A1">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>