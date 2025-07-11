<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$companyName = isset($_POST['JsonCompanyName']) ? $_POST['JsonCompanyName'] : null;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$FTPSERVER = "ftp.baleenmedia.com";
$FTPUSER = "uploadbills@baleenmedia.com";
$FTPPASS = "Bills@123#";
$DIR = "/$companyName/Bills/";

if(isset($_FILES['JsonFile']) && $_FILES['JsonFile']['error'] == UPLOAD_ERR_OK){
    $file_tmp = $_FILES['JsonFile']['tmp_name'];
    $file_name = $_FILES['JsonFile']['name'];

    // Establish FTP Connection
    $ftp_conn = ftp_connect($FTPSERVER) or die(json_encode("Could not connect to $FTPSERVER"));
    $login = ftp_login($ftp_conn, $FTPUSER, $FTPPASS);

    if(!$login) {
        die(json_encode("FTP login failed."));
    }

    // Upload file to the FTP Server
    if(ftp_put($ftp_conn, $DIR . $file_name, $file_tmp, FTP_BINARY)){
        echo json_encode("File Uploaded Successfully!");
    }else{
        echo json_encode("There was an error while uploading the file.");
    }

    // Closing the connection
    ftp_close($ftp_conn);
}else{
    $error = isset($_FILES['JsonFile']) ? $_FILES['JsonFile']['error'] : 'No file data received.';
    echo json_encode("File upload failed: " . $error);
}
?>