<?php 
  include 'config.php'; 
  session_start();
?>
<?php include 'header.php' ?>
<?php 

if(isset($_SESSION['username'])){
session_destroy();
}

?>

<html>

<head>
  <title>Online Novel Reader</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <div class="modal-header">
    <h3 class="modal-title text-center">Login</h3>
  </div>
  <div class="col-md-12 col-sm-6 col-lg-8">
    <form method="post" name="login" action="validation.php">
      <div>
        <?php
        if (isset($_SESSION['register_msg'])) {
          $msg = $_SESSION['register_msg'];
          unset($_SESSION['register_msg']);
        }
        ?>
      </div>
      <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email address*">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password*">
      </div>
      <div class="form-group">
        <input type="submit" name="login" value="Login" class="btn btn-block">
      </div>
      <?php
      if (isset($msg))
        echo "<br>" . $msg;
      ?>
    </form>
    <p>Don't have an account? <a href="signup.html">Signup Here</a></p>
  </div>
  <?php include 'footer.php' ?>
</body>

</html>