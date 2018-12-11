<?php
/**
 * Created by PhpStorm.
 * User: Alex-PC
 * Date: 27.12.2017
 * Time: 18:36
 */

$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 0;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    /*echo "File already exists.";*/
    $uploadOk = 1;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000) {
    /*echo "Your file is too large.";*/
    $uploadOk = 2;
}

// Allow certain file formats
if($imageFileType != "gco" && $imageFileType != "gcode") {
    /*echo "Only GCO, GCODE files are allowed.";*/
    $uploadOk = 3;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// if everything is ok, try to upload file
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        /*echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";*/
    } else {
        /*echo "There was an error uploading your file.";*/
        $uploadOk = 4;
    }
}

header("Location: ../index.php?pagina=gcodeparser&upload=" . $uploadOk . "&filename=" . $_FILES["fileToUpload"]["name"]);
exit;

?>