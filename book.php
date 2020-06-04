<?php include 'Hheader.php' ?>
<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Novel Reader</title>
	<style>
		body{
			background-color:lightyellow;
		}
	</style>
</head>

<body>
	<?php
		$id1 = $_GET['id'];
		$query = "SELECT * FROM `book` where b_id='$id1'";
		$xml=simplexml_load_file("book.xml") or die("Error: Cannot create object");
		$n2=$id1-1;
		$result = mysqli_query($conn, $query);
		$num = mysqli_num_rows($result);
		if ($num > 0) {
		while ($product = mysqli_fetch_array($result)) {
			//print_r($product);
	?>
		<div class="container-fluid padding">
			<div class="row padding">
				<div class="col-lg-6">
					<h2><?php echo $product['bname']; ?></h2>
					<p><?php echo $xml->book[$n2]->info."";?></p>
					<h4>Bibliographic information</h4>
					<p>
						Title:<?php echo $xml->book[$n2]->title."";?><br>
						Author:<?php echo $xml->book[$n2]->author."";?><br>
						Year:<?php echo $xml->book[$n2]->year."";?><br>
						Length:<?php echo $xml->book[$n2]->page."";?></p>
					<br>
					<a href="demo.php?id2=<?php echo $product['b_id']; ?>" class="btn btn-primary pull-right">READ NOW</a>
				</div>
				<div class="col-lg-6">
					<img src="<?php echo $product['directory'].$product['b_img'];?>" alt="<?php echo$product['b_img'] ;?>" class="img-fluid">
				</div>
			</div>
		</div>
		<?php
		}
		}
		?>
</body>
</html>