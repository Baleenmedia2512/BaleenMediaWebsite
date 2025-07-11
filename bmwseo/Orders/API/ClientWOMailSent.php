<?php
include 'db.php';
try {
    $json = file_get_contents('php://input');
    // decoding the received JSON and store into $obj variable.
    $obj = json_decode($json, true);

    $orderNumber = $obj['orderNumber'];

    //Do approve fucntions for WO approve db operation

    //FTP file download
    $local_file    = 'C:\Users\Public\Documents\test1.pdf';
    $server_file   = '/public_ftp/test.pdf';
    $ftp_server    = "ftp.baleenmedia.com";
    $ftp_user_name = "baleeed5";
    $ftp_user_pass = "Baleen@456";

    $conn_id = ftp_connect($ftp_server);
    // login with username and password
    $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
    //ftp_pasv($conn_id, true);

    if ($login_result) {

        // try to download $server_file and save to $local_file
        if (ftp_get($conn_id, $local_file, $server_file, FTP_BINARY)) {
            echo json_encode("Successfully written to $local_file\n");
       }
        else {
            echo json_encode("There was a problem while downloading the file\n");
        }

    }
    else {
        echo json_encode("There was a problem in login\n");
    }

    // close the connection
    ftp_close($conn_id);
}




//catch exception
catch (Exception $e) {
    echo json_encode('Message: ' . $e->getMessage());
}
