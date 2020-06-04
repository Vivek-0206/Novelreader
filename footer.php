<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Online Novel Reader</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" rel="stylesheet">
</head>
<footer>
	<div class="container-fluid padding">
		<div class="row text-center">
			<!--- Connect -->
			<div class="container-fluid padding">
				<div class="row text-center padding">
					<div class="col-12">
						<h2>connect</h2>
					</div>
					<div class="col-12 social padding">
						<a href="#"><i class="fab fa-facebook"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-youtube"></i></a>
					</div>
				</div>
			</div>

			<?php
			if (isset($_SESSION['username'])) {
			} else {
			?>
				<div class="col-md-4">
					<p style="margin-top: 20px" ;><a href="about.php"><img src="about.jpg" style="border-radius: 50%"></a></p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5>Contact us</h5>
					<hr class="light">
					<p>NOVELREADER.85@gmail.com</p>
					<p>8849-579-553</p>
				</div>
				<div class="col-md-4">
					<h6>Subscribe</h6>
					<div class="newsletter-form">
						<form method="post" action="mail_process.php">
							<div class="form-group">
								<input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="Enter Email Address" />
							</div>
							<button type="submit" name="emailsubscribe" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
						</form>
						<p class="subscribed-text">*We'll inform you if any new book is uploaded.</p>
					</div>
				</div>
			<?php
			}
			?>
			<div class="col-12">
				<hr class="light">
				<h5>&copy;VIVEK PATEL</h5>
				<h6>S.V.I.T VASAD</h6>
			</div>
		</div>
	</div>
</footer>

</html>