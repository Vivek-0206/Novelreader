<?php include 'config.php' ?>
<?php include './src/Exception.php'?>
<?php include './src/OAuth.php'?>
<?php include './src/PHPMailer.php'?>
<?php include './src/POP3.php'?>
<?php include './src/SMTP.php'?>
<?php 
    function phpAlert($msg){
        echo '<script type="text/javascript">alert("subscribe done with this ' . $msg . '")</script>';
    }
?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if (isset($_POST['emailsubscribe'])) {
    $email = $_POST['subscriberemail'];
    $q = "SELECT * FROM `tblsubscriber` WHERE email = '$email'";
    $result=mysqli_query($conn,$q);
    $num = mysqli_num_rows($result);
    if ($num==1) {
      echo"ALREADY DONE";
    }else{
	    $sql = "INSERT INTO tblsubscriber(`SubscriberEmail`) VALUES('$email')";
        mysqli_query($conn, $sql);

        require '/xampp/htdocs/Online-comic-book-reader/src/PHPMailer/vendor/autoload.php';
        $mail = new PHPMailer(true);
        $mailid = $email;
        $subject = "Thank u";
        $text_message = "Hello";
        $message = "Thank You for Contact with us.";
        try
        {
            $mail->IsSMTP();
            $mail->isHTML(true);
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "ssl";
            $mail->Host = "smtp.gmail.com";
            $mail->Port = '465';
            $mail->AddAddress($mailid);
            $mail->Username ="YOUR@EMAIL.COM";
            $mail->Password ="YOUR PASSWORD";
            $mail->SetFrom('YOUR@EMAIL.COM','Novel Reader');
            $mail->AddReplyTo("YOUR@EMAIL.COM","Novel Reader");
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->AltBody = $message;
            if($mail->Send())
            {
                if(isset($mailid)){
	                phpAlert($mailid);
                }
                
            }
        }
        catch(Exception $ex)
        {
            $msg = " ".$ex->errorMessage()." ";
            echo $msg;
        }
    }
}
?>
