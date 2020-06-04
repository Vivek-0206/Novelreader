<?php include 'Hheader.php' ?>
<?php include 'config.php' ?>
<?php 
if(isset($_SESSION['username'])){
	$uname=$_SESSION['username'];
	phpAlert($uname);
}
?>
<?php
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("welcome ' . $msg . '")</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Novel Reader</title>
</head>

<body>
	<!--Image Slider-->
	<div id="slides" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1" class="active"></li>
			<li data-target="#slides" data-slide-to="2" class="active"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="./image/lotr.jpg">
			</div>
			<div class="carousel-item">
				<img src="./image/doctor strange.jpg">
			</div>
			<div class="carousel-item">
				<img src="./image/wolverine infinity.jpg">
			</div>
		</div>
	</div>
	<!--Jumbotron-->
	<div class="container-fluid">
		<div class="row jumbotron">
			<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
				<p class="lead">A web portal to find and read comic books. Find your book - easy and quick</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
				<a href="marvels.php"><button type="button" class="btn btn-outline-second btn-lg">Discover</button></a>
			</div>
		</div>
	</div>
	<!--- Three Column Section -->
	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fab fa-monero"></i>
				<h3>MARVEL</h3>
				<p>A new age marvel story</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fab fa-dochub"></i>
				<h3>DC</h3>
				<p>to new DC fans</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fab fa-meetup"></i>
				<h3>MANGA</h3>
				<p>To Japan and more</p>
			</div>
		</div>
	</div>
	<!--- Two Column Section -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-lg-6 col-sm-6 col-xs-12 col-md-6">
				<h2>If you want to read..</h2>
				<p>Favourite Marvel comic books, DC comic books</p>
				<br>
				<form action="search.php" method="post">
					<input type="text" name="texts" placeholder="Search..." class="form-control">
					<input type="submit" value="Search" name="textsearch" id="submit" class="btn btn-block">
				</form>
			</div>

			<div class="col-lg-6 col-sm-6 col-xs-12 col-md-6 container-fluid padding">
				<script language="Javascript">
					var i = 0;
					var images = [];
					var time = 2000;

					images[0] = './image/2020.jpg';
					images[1] = './image/harry potter.jpg';
					images[2] = './image/3 mistakes of my life.jpg';
					images[3] = './image/meluha.jpg';

					function changeImg() {
						document.slide.src = images[i];
						if (i < images.length - 1) {
							i++;
						} else {
							i = 0;
						}
						setTimeout("changeImg()", time);
					}
					window.onload = changeImg;
				</script>
				<div class="container-fluid">
					<img postion="center" name="slide" src="caputure.png" style="margin-left: 60px;" />
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid padding">
		<div class="row Welcome text-center">
			<div class="col-12">
				<h1 class="display-4" style="margin-left: -30px;">Upcoming Release</h1>
			</div>
		</div>
	</div>
	<!--- Cards -->
	<div class="container-fluid padding">
		<div class="row padding" style="margin-left: -1px;margin-right: 3px;">
			<div class="col-md-3">
				<div class="card1">
					<img class="card-imd-top" src="./image/boruto.jpg" style="margin-left: 50px;">
					<div class="card-body1">
						<h4 class="card-title1">BORUTO</h4>
						<p class="card-text1">A new gen story</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card1">
					<img class="card-imd-top" src="./image/doctor strange1.jpg" style="margin-left: 50px;">
					<div class="card-body1">
						<h4 class="card-title1">sorcerer-supreme</h4>
						<p class="card-text1">Strange world of doctors</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card1">
					<img class="card-imd-top" src="./image/deathnote.jpg" style="margin-left: 50px;">
					<div class="card-body1">
						<h4 class="card-title1">DEATHNOTE</h4>
						<p class="card-text1">A brief deathnote</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card1">
					<img class="card-imd-top" src="./image/naruto.jpg" style="margin-left: 50px;">
					<div class="card-body1">
						<h4 class="card-title1">Naruto-2</h4>
						<p class="card-text1">A story of warrior</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php' ?>
</body>
</html>