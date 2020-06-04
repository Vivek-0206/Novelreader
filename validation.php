<?php include 'config.php' ?>
<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['email']);

if (isset($_POST['login'])) {
  $mail = $_POST['email'];
  $pwd = md5($_POST['password']);
  $user_type;
  $e_mail;
  $sql = "SELECT * FROM `userinfo` WHERE email = '$mail' && password = '$pwd'";
  $msg = " ";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $total = mysqli_num_rows($result);
    if ($total == 1) {
      $msg = "";
      while ($product = mysqli_fetch_array($result)) {
        $user_type = $product['type'];
        $name = $product['name'];
        $e_mail = $product['email'];
      }
      if ($user_type == 1) { //admin page
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $name;
        $_SESSION['e_mail'] = $e_mail;
        header('location: admin.php');
      } elseif ($user_type == 0) { //reader page
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $name;
        $_SESSION['e_mail'] = $e_mail;
        header('location: home.php');
      } else {
        $msg = "Invalid USER!!!";
        $_SESSION['register_msg'] = $msg;
        header('location: index.php');
      }
    } else {
      $msg = "Username or Password is incorrect";
      $_SESSION['register_msg'] = $msg;
      header("location: login.php");
    }
  } else {
    echo "Query failedd";
  }
}else{
    $msg = "LOGOUT NOT SUCCESS!!!";
    $_SESSION['register_msg'] = $msg;
    header('location: index.php');
}
?>