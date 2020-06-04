<?php include 'Hheader.php' ?>
<?php include 'config.php' ?>
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $str = $_SESSION['username'];
    $str1 = $_SESSION['e_mail'];
    //echo $str;
    //echo $str1;
} else {
    header('Location: login.php');
}

$sql = "SELECT * FROM `userinfo` WHERE email = '$str1'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $total = mysqli_num_rows($result);
    while ($product = mysqli_fetch_array($result)) {
        $nm = $product['name'];
        $mo = $product['phone'];
        $ad = $product['address'];
    }
}
?>
<html>

<head>
    <style>
        .card {
            width: 18rem;
            height: 550px;
            text-align: center;
            margin-top: 30px;
            margin-left: 30px;
            background-color: black;
            text-decoration-color: cyan;
            text-emphasis-color: cyan;
            box-shadow: 0 4px 8px 0 rgba(8, 7, 7, 0.2), 0 6px 20px 0 rgba(24, 234, 214, 0.66);
        }

        .card-text {
            color: rgb(106, 90, 205);
            text-shadow: 2px 2px 4px #000000;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="col align-self-center">
            <div class="card">
                <img src="./image/profile.png" class="card-img" alt="PROFILE">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $nm ?>'s profile</h5>
                    <p class="card-text">NAME: <?php echo $nm ?></p>
                    <p class="card-text">PHONE: <?php echo $mo ?></p>
                    <p class="card-text">ADDRESS: <?php echo $ad ?></p>
                    <a href="add_comment.php" class="card-link"> Add Comment</a>
                    <a href="logout.php" class="card-link">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>