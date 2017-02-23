<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Contact</title>

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
        #map {
            width: 100%;
            height: 400px;
            background-color: grey;
        }
    </style>

</head>

<body>

    <?php include_once("menu.php"); ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <!-- <header class="intro-header" style="background-image: url('img/contact-bg.jpg')"> -->
    <header class="intro-header")">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div id="map"></div>
                    <script>
                        /*function initMap() {
                            var position = {lat: 48.8499281, lng: 2.30138409999995};
                            var map = new google.maps.Map(document.getElementById('map'), {
                                zoom: 16,
                                center: position
                            });
                            var marker = new google.maps.Marker({
                                position: position,
                                map: map
                            });
                        }*/
                        function initMap() {
                            var position = new google.maps.LatLng(48.8499281, 2.30138409999995);

                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: position,
                                zoom: 16
                            });

                            var marker = new google.maps.Marker({
                                position: position,
                                map: map
                            });

                            var contentString = '1,3,5, Rue de l\'Abbe Rogger Derry,' +
                                '<br > 75015, Paris';

                            var infowindow = new google.maps.InfoWindow({
                                content: contentString
                            });

                            infowindow.open(map, marker);

                            marker.addListener('click', function() {
                                infowindow.open(map, marker);
                            });
                        }

                    </script>

                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>CONTACT US</h2>
                <p>Want to get in touch with us? Fill out the form below to send me a message and we will try to get back to you within 24 hours!</p>

                <?php
                //$errorData=array("nameError", "messageError", "telError", "emailError");
                $errorData=array();
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    foreach ($_POST as $a => $b) {
                        $errorData[$a] = $b;
                    }
                    //var_dump($errorData);
                }
                ?>

                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form method="post" action="traitement.php" name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <span>
                                <?php if(!empty($errorData['nameError'])){
                                    echo "Invalid name ".$errorData['name'];
                                }
                                ?>
                            </span>
                            <input name="name" type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name."
                                   <?php if(!empty($errorData['name'])){
                                       echo 'value=" '.$errorData['name'] ;
                                   }else if(!empty($errorData['name'])){
                                       echo 'value=" '.$errorData['name'];
                                   }
                                   ?>
                                ">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <span class="error">
                                <?php if(!empty($errorData['emailError'])){
                                    echo "Invalid Email: ".$errorData['emailError'];
                                }
                                ?>
                            </span>
                            <input name="email" type="text" class="form-control"
                                   placeholder="Email Address" id="email"
                                   required data-validation-required-message="Please enter your email address."
                                   value="
                                   <?php if(!empty($errorData['emailError'])){
                                       echo $errorData['emailError'];
                                   }else if(!empty($errorData['email'])){
                                       echo $errorData['email'];
                                   }
                                   ?>
                                ">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <span class="error">
                                <?php if(!empty($errorData['emailError'])){
                                    echo "Invalid phone number: ".$errorData['telError'];
                                }
                                ?>
                            </span>
                            <input name="tel" type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number."
                                value="
                                <?php if(!empty($errorData['telError'])){
                                    echo $errorData['telError'];
                                }else if(!empty($errorData['tel'])){
                                    echo $errorData['tel'];
                                }
                                ?> ">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea name="message" rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message.">
                                <?php if(!empty($errorData['message'])){
                                    echo $errorData['message'] ;
                                }
                                ?>
                            </textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>

    <?php include_once("footer.php"); ?>

</body>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjHkRGYHFCjsDAecQBkPDKvOMn-7j9uj8&callback=initMap">
</script>
</html>
