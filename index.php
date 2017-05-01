<?php
/**
 * Created by PhpStorm.
 * User: Alienware
 * Date: 2/20/2017
 * Time: 11:13 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8"/>
    <title>Puggo 360</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .site-heading h1{
            color: #0085A1;
        }

        .subheading{
            color: #0085A1;
        }
    </style>

</head>
<body>
<?php include_once("menu.php"); ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('images/index_bg.jpeg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Puggo 360</h1>
                    <hr class="small">
                    <span class="subheading">Don't watch it, live it</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="post-preview">
                <a >
                    <h2 class="post-title">
                        Puggo 360
                    </h2>

                    <h3 class="post-subtitle">
                        <!--Puggo is an innovative project focused on virtual reality.
                        We aim to improve customer experience through innovative 360 video contents.-->
                        Puggo est un projet innovant dans le domaine de la r&eacute;alit&eacute; virtuelle.
                        Nous vous proposons d'am&eacute;liorer votre exp&eacute;rience client &agrave; travers des contenus vid&eacute;os &agrave; 360&deg;.
                    </h3>
                </a>
            </div>
            <hr>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="contact.php">Contactez nous &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<hr>

<?php include_once("footer.php"); ?>

</body>
</html>

