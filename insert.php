<?php
include 'Config.php';
$statusMsg = '';

// File upload path
$targetDir = "books/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$bc = $_POST['book_category'];
$dc="http://localhost/Online-comic-book-reader/books/";
$uploadOk = 1;

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    if (file_exists($targetFilePath)) {
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, file already exists.";
    }else{
        $allowTypes = array('pdf');// Allow certain file formats
        if(in_array($fileType, $allowTypes)){
            
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){                                              // Upload file to server
                $sql = "INSERT INTO `book`(`bname`, `directory`, `bcategory`) VALUES ('$fileName','$dc','$bc')";                // Insert file name into database
                $result = mysqli_query($conn, $sql);
                if($result){
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                }else{
                    $statusMsg = "File upload failed, please try again.";
                } 
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
            $statusMsg = 'Sorry, PDF files are allowed to upload.';
        }
    }
}

// Display status message
echo $statusMsg;

?>
<br><br><br>
if you want another file to upload go to <a href="admin.php">click here</a> link...
<br><br><br>
for logout click <a href="logout.php">here</a>
