<?php include 'config.php' ?>
<?php session_start() ?>
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $str = $_SESSION['username'];
  $str1 = $_SESSION['e_mail'];
} else {
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Online Novel Reader</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <!--Navigation-->
  <nav class="navbar navbar-expand-md navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">NOVEL READER</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                <span class="caret"></span>
                Categories
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="biography.php">Biography</a>
                <a class="dropdown-item" href="dc.php">DC</a>
                <a class="dropdown-item" href="horror.php">Horror</a>
                <a class="dropdown-item" href="marvels.php">Marvel</a>
                <a class="dropdown-item" href="mysteries.php">Mysteries</a>
                <a class="dropdown-item" href="romance.php">Romance</a>
                <a class="dropdown-item" href="thrillers.php">Thrillers</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script>
    $(document).ready(function() {
      $(".dropdown-toggle").dropdown();
    });
  </script>
</body>

</html>