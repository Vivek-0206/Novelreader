<?php include 'Hheader.php' ?>
<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Novel Reader</title>
</head>

<body>
	<div class="row" style="margin-right: 0px;margin-left: 0px;">
		<?php
		$query = "SELECT * FROM `book` WHERE bcategory='biography'";
		$result = mysqli_query($conn, $query);
		$num = mysqli_num_rows($result);
		if ($num > 0) {
			while ($product = mysqli_fetch_array($result)) {
				$path = $product['directory'];
				$bi = $product['b_img'];
				$file = $path . $bi;
		?>
				<div class="col-lg-3 col-md-3 col-sm-12" style="margin-left: 30px;">
					<form>
						<div class="card">
							<h6 class="card-title"><?php echo $product['bname']; ?></h6>
							<div class="card-body">
								<img src="<?php echo $file; ?>" alt="<?php echo $product['b_img']; ?>" title="biography" class="img-fluid">
								<a href="book.php?id=<?php echo $product['b_id']; ?>" name="buy" class="btn btn-outline-secondary pull-right">DISCOVER</a></h5>
							</div>
						</div>
					</form>
				</div>
		<?php
			}
		}
		?>
	</div>
	
</body>

</html>