<?php
session_start();
  include 'config.php';
  if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $passs = $_POST['password'];
    $pwd=md5($passs);
    $mail = $_POST['email'];
    $phone = $_POST['phone'];
    $add = $_POST['address'];
    
      $sql = "INSERT INTO userinfo (`name`, `email`, `password`,  `phone`,`address`,`type`) VALUES ('$name','$mail','$pwd','$phone','$add','0') ";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $msg="Registration Succesful";
        $_SESSION['register_msg'] = $msg;
        header("location: login.php");
      }else{
        echo "<script>alert('Registered unsuccessfully.');</script>";
      }
    }
?>