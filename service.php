<?php
/**
 * Created by PhpStorm.
 * User: Alienware
 * Date: 3/22/2017
 * Time: 8:59 PM
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Puggo 360 - Service</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .page-heading h1{
            /*background-color: #000;*/
            color: #FFFFFF;
        }
        .page-heading .subheading{
            /*background-color: #000;*/
            color: #FFFFFF;
        }
        .photo img{
            width: 200px;
            height: 200px;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
            margin: 0 auto; /*center the image*/
        }
        .photo h2{
            text-align: center;
        }
        .page-heading h1{
            color: #FFFFFF;
        }
        .intro-header .page-heading .subheading {
            color: #FFFFFF;
            font-weight: bold;
        }
        .title_info{
            text-align: center;
            padding-top: .75rem;
            padding-bottom: .75rem;
            /*background-color: rgba(86,61,124,.15);*/
            /*border: solid rgba(86,61,124,.2);*/
            border: solid #9ecfd9;
            border-width: 0px 1px 1px 1px;
        }
        .title_info > h2{
            color: #0085A1;
        }
        .title_info > ul{
            text-align: left;
        }
        .bd_row{
            display: table;
            min-height: 10rem;
            /*background-color: #ffe5e5;*/
            border-width: 0px 1px 0px 1px;
            border: solid #9ecfd9;
        }
        .bd_row [class*="col-"] {
            float: none;
            display: table-cell;
            vertical-align: top;
        }
        .bottom_text{
            font-weight: normal;
        }
        #price{
            text-align: center;
            font-weight: bold;
            border: solid #46b8da;
            border-width: 2px 0;
        }
        .pager .next > a {
            float: none;
        }
    </style>
</head>

<body>
    <?php include_once("menu.php"); ?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('images/service_bg.jpg'); background-position:0px -20px; ">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">-->
                <div class="col-lg-8 col-md-10">
                    <div class="page-heading">
                        <h2 style="margin-top: -100px;  color:#0085A1; text-align: left">Votre clip promotionnel &agrave; 360&deg;
                            r&eacute;alis&eacute; et d&eacute;livr&eacute; en quelques jours</h2>
                        <hr class="small">
                        <span class="subheading" style="margin-bottom: 100px;"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                Notre m&eacute;thode <b>innovante</b> et <b>cr&eacute;ative</b> de tournage am&eacute;liorera l&apos;exp&eacute;rience client de votre entreprise.
                En seulement 3 &eacute;tapes, PUGGO 360&deg; vous d&eacute;livre votre vid&eacute;o 360&deg; sur-mesure <b>sous 1 semaine</b>.
            </div>
        </div>
        <hr>
        <div class="row bd_row">
            <div class="col-sm-4 title_info">
                <h2>Etape 1</h2>
                <h3>Pr&eacute;-Production</h3>
                <ul>
                    <li>Prise de contact</li>
                    <li>D&eacute;finition des besoins</li>
                    <li>Visite de votre site</li>
                    <li>Sc&eacute;nario</li>
                    <li>R&eacute;daction du devis</li>
                </ul>
            </div>
            <div class="col-sm-4 title_info">
                <h2>Etape 2</h2>
                <h3>Production</h3>
                <ul>
                    <li>Tournage</li>
                    <li>R&eacute;alisation du sc&eacute;nario sur le lieu pr&eacute;vu</li>
                </ul>
            </div>
            <div class="col-sm-4 title_info">
                <h2>Etape 3</h2>
                <h3>Post-Production</h3>
                <ul>
                    <li>Montage</li>
                    <li>S&eacute;quen&ccedil;age</li>
                    <li>Motion design</li>
                    <li>Composition musicale</li>
                    <li>Mise en ligne</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 title_info">
                <h4 class="bottom_text">1/2 &agrave; 1 journ&eacute;e</h4>
            </div>
            <div class="col-sm-4 title_info">
                <h4 class="bottom_text">1/2 &agrave; 1 journ&eacute;e</h4>
            </div>
            <div class="col-sm-4 title_info">
                <h4 class="bottom_text">1/2 &agrave; 1 journ&eacute;e</h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h3 id="price">Entre 1799 &euro; et 1999 &euro; TTC</h3>
            </div>
        </div>
        <hr>
        <ul class="pager">
            <li class="next">
                <a href="contact.php">Contactez nous &rarr;</a>
            </li>
        </ul>
    </div>

    <?php include_once("footer.php"); ?>

</body>

</html>