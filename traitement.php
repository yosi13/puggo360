<?php
/**
 * Created by PhpStorm.
 * User: Alienware
 * Date: 2/23/2017
 * Time: 1:56 PM
 */
/*$name=$_POST['name'] ;
$email =  $_POST['email'] ;
$tel = $_POST['tel'] ;
$message = $_POST['message'] ;*/
$error=false;
$errorData=array();
$validData=array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {
        $validData['name'] = test_input($_POST["name"]);
    } else{
        $errorData['nameError']=$_POST["name"];
        $error = true;
    }
    if (isset($_POST['message'])) {
        $validData['message'] = test_input($_POST["message"]);
    } else{
        $errorData['messageError']=$_POST['message'];
        $error = true;
    }

    if (isset($_POST['tel'])) {
        $_POST['tel'] = htmlspecialchars($_POST['tel']); // On rend inoffensives les balises HTML que le visiteur a pu entrer

        if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['tel'])) {
            $validData['tel'] = $_POST['tel'];
        } else {
            $errorData['telError']=$_POST['tel'];
            $error=true;
        }
    }
    if (isset($_POST['email'])) {
        $email = test_input($_POST['email']);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorData['emailError']=$_POST['email'];
            $error=true;
        }else{
            $validData['email']=$email;
        }
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if($error){
    ?>
    <form id="myForm" action="contact.php" method="post">
        <?php
        //var_dump($errorData);
        foreach ($errorData as $a => $b) {
            echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
        }
        foreach($validData as $a => $b){
            echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
        }
        ?>
    </form>
    <?php
    //header('Location: ' . $_SERVER['HTTP_REFERER']);
}else {
    $mail_content = "name: " . $validData['name'] . "\n
    email: " . $validData['email'] . "\n
    tel: " . $validData['tel'] . "\n
    message: " . $validData['message'] . "\n";
    //Line can have online 70 characters
    $mail_content = wordwrap($mail_content, 70, "\r\n");
    echo $mail_content;
    //bool mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] )

    $headers = 'From: puggo360@gmail.com' . "\n";
    $headers .= 'Reply-To: puggo360@gmail.com' . "\n";
    $headers .= 'Content-Type: text/plain; charset="utf-8"' . "\n";
    $headers .= 'Content-Transfer-Encoding: 8bit';
    //Mail to admin
    mail('zuca_yosi@hotmail.com', 'Contact Puggo 360', $mail_content, $headers);

    $mail_content = "Thanks for contacting us, we will answer
your request in less than 24 hours. \n" + $mail_content;
//Mail to the visitor
    mail($email, 'Contact Puggo 360', $mail_content, $headers);
}
?>
<script type="text/javascript">
    document.getElementById('myForm').submit();
</script>