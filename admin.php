<?php
 session_start();
 if (!isset($_SESSION['username'])) {
   header('location:login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Novel Reader</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
  <style>
    h1,h2 {
      text-align: center;
      background-color: cyan;
    }

    @import "http://fonts.googleapis.com/css?family=Droid+Serif";

    /* The Above Line Is To Import Google Font Style */
    .maindiv {
      margin: 30px auto;
      width: 980px;
      height: 500px;
      background: #fff;
      padding-top: 20px;
      font-family: 'Droid Serif', serif;
      font-size: 14px
    }

    .title {
      width: 500px;
      height: 70px;
      text-shadow: 2px 2px 2px #cfcfcf;
      font-size: 16px;
      text-align: center
    }

    .form_div {
      width: 70%;
      float: left
    }

    form {
      width: 400px;
      border: 1px dashed #aaa;
      padding: 10px 30px 40px;
      margin-left: 70px;
      background-color: #f0f8ff
    }

    form h2 {
      text-align: center;
      text-shadow: 2px 2px 2px #cfcfcf
    }

    .input {
      width: 100%;
      height: 30px;
      border-radius: 2px;
      box-shadow: 0 0 1px 2px #123456;
      margin-top: 10px;
      padding: 7px;
      border: none;
      margin-bottom: 20px
    }


    .submit {
      color: #fff;
      border-radius: 3px;
      background: #1F8DD6;
      padding: 5px;
      margin-top: 40px;
      border: none;
      width: 100%;
      height: 30px;
      box-shadow: 0 0 1px 2px #123456;
      font-size: 18px
    }

    p {
      color: red;
      text-align: center
    }

    span {
      text-align: center;
      color: green
    }
  </style>
</head>

<body>
  <h1>WELCOME ADMIN</h1>
  <h2><?php echo $_SESSION['username'] ?></h2>
  <div class="maindiv">
    <!--HTML Form -->
    <div class="form_div">
      <div class="title">
        <h2>Insert Data In Database Using PHP.</h2>
      </div>
      <form action="insert.php" method="post" enctype="multipart/form-data">
        <p>
          Select PDF File to Upload:
          <input type="file" name="file">
        </p>
        <p>
          <label for="category">Book category:</label>
          <input type="text" name="book_category" id="bookcategory" required="required">
        </p>
        <input type="submit" name="submit" value="Upload">
      </form>
    </div>
  </div>
</body>

</html>