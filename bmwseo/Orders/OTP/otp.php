<?php
//$mailid = $_POST['mailid'];
//$otpforverify = $_POST['otp'];

// if (isset($_POST['action'])) {
//   switch ($_POST['action']) {
//       case 'Send':
        //  //$result = 
        //  SendOTPthroughMail($mailid,"Please enter this OTP in your Portal page to confirm WO cancellation");
        //  //if ($result = true){
          echo "Mail Sent Successfully";
        //  // exit;
        // // }
        // //  else{
        // //    echo "unable to sent mail";
        // //    exit;
        // //  }
      //     break;
      // case 'Verify':
          // // $result1 = 
          // VerifyOTPthroughmail($otpforverify,$mailid);
          // // if ($result1 > 0){
          //   echo "Verified";
          // //   exit;
          // // }
          // // else{
          // //   echo "please check the otp and try again";
          // //   exit;
          // // }

//            break;
//   }
// }
 



// function SendOTPthroughMail($mail,$txt)
// {
//     $mailsentStatus= false;

//     try {
//     $otp = rand(100,999);
//     $to = $mail;
//     $subject = "Your OTP is ".$otp;    
//     $headers = "From: Appsupport@baleenmedia.com";
//     $mailsentStatus =  mail($to,$subject,$txt.chr(10).Chr(10)."by".Chr(10)."App Support",$headers);

//     if ($mailsentStatus = true){
//       $servername = "www.baleenmedia.com";
//       $username = "baleeed5_dev1";
//       $password = "admin123$";
//       $dbname = "baleeed5_live";
//         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//         // set the PDO error mode to exception
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         $sql = "INSERT INTO otp_table(OTP, SentThroughMail, VerifyStatus, ValidStatus, EntryUser, EntryDate) VALUES (".$otp.",'".$mail."',0,0,'kiruba',now())";
//         // Prepare statement
//         $stmt = $conn->prepare($sql);
//         // execute the query
//         $stmt->execute();
//         $conn = null;
//         //  echo "Mail Sent Successfully";

//     } 
//     else {
//       echo 'Unable to Send mail!! Please Contact IT Team with this Screenshot';
//     }


// return $mailsentStatus;
// } catch(PDOException $e) {
//     echo $sql . "<br>" . $e->getMessage()."<br> Unable connect database!! Please Contact IT Team with this Screenshot";
//   }
// }



// function VerifyOTPthroughmail($otp,$mail)
// {

//     try{
//         $servername = "www.baleenmedia.com";
//         $username = "baleeed5_dev1";
//         $password = "admin123$";
//         $dbname = "baleeed5_live";
       
//         // Create connection
//         $conn = new mysqli($servername, $username, $password, $dbname);
//         // Check connection
//         if ($conn->connect_error) {
//           die("Connection failed: " . $conn->connect_error);
//         }        
//         // $sql = "SELECT count(*) as row FROM otp_table WHERE OTP = ".$otp." and SentThroughMail ='".$mail."' and VerifyStatus=0 and ValidStatus=0";
//         // $otpverifyStatus = $conn->query($sql);        
//         // $rowCount = $otpverifyStatus->num_rows;    

//         //if ($rowCount > 0){
//           $sql = "UPDATE otp_table SET VerifyStatus = 1 WHERE OTP = ".$otp." and SentThroughMail ='".$mail."' and VerifyStatus=0 and ValidStatus=0  ";
//           $stmt = $conn->prepare($sql);
//           $stmt->execute();  
//           $rowCount = $stmt->num_rows;
//         //}
//         $conn->close();
//         // echo "Verified";

//     } catch(PDOException $e){
//         echo $sql . "<br>" . $e->getMessage()."<br> Unable to connect database !! Please Contact IT Team with this Screenshot";

//     }
//     echo $rowCount;
// }
?>

