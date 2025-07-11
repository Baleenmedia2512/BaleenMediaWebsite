<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$target_dir = "https://orders.baleenmedia.com/API/Wellness/Images/";  // Set this to your server's directory
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if the file already exists
if (file_exists($target_file)) {
    echo json_encode("File already exists.");
    $uploadOk = 0;
}

// Check the file size or any other validation you need

if ($uploadOk == 0) {
    echo json_encode("File not uploaded.");
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo json_encode("File uploaded successfully.");
    } else {
        echo json_encode("Error uploading the file.");
    }
}