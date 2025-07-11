<!DOCTYPE html>
<html lang="en">
<head>
  <title> Baleen Media Authentication </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">  
<div class="container"> 
   <form class="form-inline">  
    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div> 
     <button type="button" class="btn btn-success"  id = "MailSentButton"> Send </button> 
     <input type="button" class="button" name="SendMailButton" value="Send" /> 
    </form>
     <br><br>
     <form class="form-inline"> 
    <div class="form-group">
      <input type="text" class="form-control" id="otp" placeholder="Enter OTP"  >
    </div>
        <button type="button" class="btn btn-success"  id = "OTPverifyButton"> Verify </button>    
        <input type="submit" class="button" name="OTPverifyButton" value="Verify" />
      </form> 
 </div>
</div>
<script> 
//$(function() {
// function SuccessAlert(msg,duration)
// {
//  var el = document.createElement("div");
//  el.setAttribute("style"," position: -webkit-sticky;position: sticky;top: 0;padding: 5px;background-color: #cae8ca;border: 2px solid #4CAF50;");
//  el.innerHTML = msg;
//  setTimeout(function(){
//   el.parentNode.removeChild(el);
//  },duration);
//  document.body.appendChild(el);
// }
// function ErrorAlert(msg,duration)
// {
//  var el = document.createElement("div");
//  el.setAttribute("style"," position: -webkit-sticky;position: sticky;top: 0;padding: 5px;background-color: #cae8ca;border: 2px solid #ff0000;");
//  el.innerHTML = msg;
//  setTimeout(function(){
//   el.parentNode.removeChild(el);
//  },duration);
//  document.body.appendChild(el);
// }
// $("#MailSentButton").click(function() {
//   var mailid = $('#email').val();
//   temp = 'sendingmail';
//   $.post('otp.php', { mailid: mailid,temp: temp},
//                 function(returnedData) {
//                     // if (returnedData == 1) {
//                     //   SuccessAlert('mail sent successfully',3000)
//                     // } else {
//                     //     alert('Something went to wrong');
//                     //     return false;
//                     // }
//                     SuccessAlert(returnedData,3000)
//                 }
//             );
// });

$(document).ready(function(){
    $('.button').click(function()
    {
         var clickBtnValue = $(this).val();
         var otp = $('#otp').val();
         var mailid = $('#email').val();
        var ajaxurl = 'https://orders.baleenmedia.com/OTP/otp.php';
        data =  {'action': clickBtnValue,'otp':otp,'mailid':mailid};
        $.post(ajaxurl, data, function (response)
        {
          alert(response);
          // if (response == "Mail Sent Successfully" ){
          //   //SuccessAlert(response,10000)
          //   alert(response);
          // } 
          // else if (response == "Verified"){
          //   //SuccessAlert(response,10000)
          //   alert(response);
          //   //document.write(response);
          // } else {
          // //ErrorAlert(response,10000)
          // alert(response);         

          // }
        });
     });
});

// $("#OTPverifyButton").click(function() {
//   var otp = $('#otp').val();
//   temp = 'verifyingotp';
//   var mailid = $('#email').val();
//   $.post('otp.php', { otp: otp,temp: temp},
//                 function(returnedData) {
//                     // if (returnedData == 1) {
//                     //   SuccessAlert('Verified',3000)
//                     // } else {
//                     //     alert('Something went to wrong');
//                     //     return false;
//                     // }
//                     SuccessAlert(returnedData,3000)

//                 }
//             );
// });
//});


src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"
src="https://code.jquery.com/jquery-1.12.4.js"
src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
</script>
</body>
</html>