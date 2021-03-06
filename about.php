<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Puggo 360 - L'&Eacute;quipe</title>

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
        /*.photo img {
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }*/
    </style>

</head>

<body>
    <?php include_once("menu.php"); ?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('images/team_bg.jpeg'); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1 style="margin-top: -100px;">Equipe</h1>
                        <hr class="small">
                        <span class="subheading" style="margin-bottom: 100px;">Qui sommes-nous?</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 photo">
                <img class="img-circle img-responsive img-center" src="images/photo.jpg" alt="">
                <h2>Martin</h2>
                <!--<p>
                    IoT engineer, graduated from Telecom SudParis.
                    Passionate about the IoT and cyber security.
                </p>-->
                <p>
                    Ing&eacute;nieur IoT, dipl&ocirc;m&eacute; de T&eacute;l&eacute;com SudParis.
                    Passionn&eacute; par les objets connect&eacute;s.
                </p>
            </div>
            <div class="col-sm-4 photo">
                <img class="img-circle img-responsive img-center" src="images/photo2.jpg" alt="">
                <h2>Tanguy</h2>
                <p>
                    <!--Graduated from NEOMA Business School and EMLYON Business School.
                    Passionate about travelling and new technologies.-->
                    Dipl&ocirc;m&eacute; de l'EMLYON et NEOMA Business School.
                    Passionn&eacute; par les nouvelles technologies et les voyages.
                </p>
            </div>
            <div class="col-sm-4 photo">
                <img class="img-circle img-responsive img-center" src="images/photo3.jpg" alt="">
                <h2>Olivier</h2>
                <p>
                    <!--Graduated from Telecom SudParis and EMLYON Business School.
                    Passionate about artistic creations and technical innovations.-->
                    Dipl&ocirc;m&eacute; de T&eacute;l&eacute;com SudParis et de EMLYON.
                    Passionn&eacute; par les cr&eacute;ations artistiques et les innovations techniques.
                </p>
            </div>
            <!--<div class="col-sm-4">
                <img class="img-circle img-responsive img-center photo" src="http://placehold.it/300x300" alt="">
                <h2>Tanguy Bétoux</h2>
                <p>
                    Graduated from NEOMA Business School and EMLYON Business School.
                    Passionate about travelling and new technologies as well.
                </p>
            </div>-->
        </div>
    </div>

    <hr>

    <?php include_once("footer.php"); ?>

</body>

</html>