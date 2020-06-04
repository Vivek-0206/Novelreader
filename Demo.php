<?php include 'config.php' ?>
<?php include 'Hheader.php'?>
<?php
if (isset($_GET['id2'])) {
  $id1 = $_GET['id2'];
}
$query = "SELECT * FROM `book` where b_id='$id1'";
$result = mysqli_query($conn, $query);
$num = mysqli_num_rows($result);
if ($num == 1) {
  while ($row = mysqli_fetch_object($result)) {
    $filename=$row->bname;
    $path = $row->directory;
    //print_r($filename);
    //echo $projectid;  
  }
}
?>
<object data='<?php echo "$path$filename" ?>' type='application/pdf' width='100%' height='80%'>
  <p>This browser does not support inline PDFs. Please download the PDF to view it: <a href="<?php echo "$path$filename" ?>">Download PDF</a></p>
</object>