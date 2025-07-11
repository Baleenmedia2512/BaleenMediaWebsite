<?php
foreach($_POST as $key => $value) {
  if(ini_get('magic_quotes_gpc'))
    $_POST[$key] = stripslashes($_POST[$key]);

  $_POST[$key] = htmlspecialchars(strip_tags($_POST[$key]));
}


function validEmail($email)
	{
	   $isValid = true;
	   $atIndex = strrpos($email, "@");
	   if (is_bool($atIndex) && !$atIndex)
	   {
		  $isValid = false;
	   }
	   else
	   {
		  $domain = substr($email, $atIndex+1);
		  $local = substr($email, 0, $atIndex);
		  $localLen = strlen($local);
		  $domainLen = strlen($domain);
		  if ($localLen < 1 || $localLen > 64)
		  {
			 // local part length exceeded
			 $isValid = false;
		  }
		  else if ($domainLen < 1 || $domainLen > 255)
		  {
			 // domain part length exceeded
			 $isValid = false;
		  }
		  else if ($local[0] == '.' || $local[$localLen-1] == '.')
		  {
			 // local part starts or ends with '.'
			 $isValid = false;
		  }
		  else if (preg_match('/\\.\\./', $local))
		  {
			 // local part has two consecutive dots
			 $isValid = false;
		  }
		  else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
		  {
			 // character not valid in domain part
			 $isValid = false;
		  }
		  else if (preg_match('/\\.\\./', $domain))
		  {
			 // domain part has two consecutive dots
			 $isValid = false;
		  }
		  else if(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
					 str_replace("\\\\","",$local)))
		  {
			 // character not valid in local part unless
			 // local part is quoted
			 if (!preg_match('/^"(\\\\"|[^"])+"$/',
				 str_replace("\\\\","",$local)))
			 {
				$isValid = false;
			 }
		  }
		  if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
		  {
			 // domain not found in DNS
			 $isValid = false;
		  }
	   }
	   return $isValid;
	}
	
if(isset($_POST['email'])) {
     
    /* EDIT THE 2 LINES BELOW AS REQUIRED
	Site name: nourenergy.com.sa  */
	 $email_to = "leenah.grace@baleenmedia.com";
	// $email_to = "kiruba@baleenmedia.com";
    $email_subject = "Message from Baleen Media Website contact form";
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');      
    }
     
    $name = $_POST['name']; // required
    $email = $_POST['email']; // required   
    $message = $_POST['message']; // required
	$mobile = $_POST['mobile']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
  if(strlen($message) < 2) {
    $error_message .= 'The Message you entered do not appear to be valid.<br />';
  }
  if(!validEmail($email))
  {
	  $error_message = 'Invalid Email Address';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
  
  //edit this line to change site name
    $email_message = "Msg from Visitor (BaleenMedia.com)\n\n";
	 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";  
	$email_message .= "Mobile: ".clean_string($mobile)."\n";	
    $email_message .= "Message: ".clean_string($message)."\n";
     
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();

if(mail($email_to, $email_subject, $email_message, $headers))
{
    
}
else
{
    echo ("Busted");
    exit;
}

// echo '<META HTTP-EQUIV="Refresh" Content="0; URL=https://www.baleenmedia.com>';    
header('Location: contact.php');
exit;
}
?>