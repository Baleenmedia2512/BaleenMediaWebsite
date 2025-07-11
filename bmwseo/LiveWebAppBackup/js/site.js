// Please see documentation at https://docs.microsoft.com/aspnet/core/client-side/bundling-and-minification
// for details on configuring this project to bundle and minify static web assets.

// Write your JavaScript code.

$(function() {

  $("#callButton").click(function(){
	var clientMobileNo = $('#clientMobileNo').val();
	var userName = $('#userId').val();
	$.post('saveTime.php', 
      function(returnedData){
        if (returnedData==1) {  
		  if (userName=='priya') {
		    window.location.href="tel://0"+clientMobileNo;
		  }
		  else {
		    window.location.href="tel:0"+clientMobileNo;
		  }
          window.location.href="feedback.php";  
	    }
      }
	);
  });
  
  $("#feedback").change(function(){
    var feed = $(this).val();
	if (feed==1) {
	  $('#followUpShow').removeClass('nonedisplay');
	}
	else {
      $('#followUpShow').addClass('nonedisplay');
	}
  });	  
  
  $( "#followDate").datepicker({
     dateFormat: "yy-mm-dd"
  });
  
  $('#followTime').timepicker({ 
    'timeFormat': 'H:i'
  });
	  
  $("#saveButton").click(function(){
    var feedback = $('#feedback').val();
    var id = $('#clientFeedbackID').val();
	var remarks = $('#clientRemarks').val();
	var userName = $('#clientFeedbackUserID').val();
	if (feedback==0) {
	  alert('Please select the feedback');
	  return false;
	}
	else if (feedback==1){
	  var followDate = $('#followDate').val();
	  var followTime = $('#followTime').val();
	  if (!followDate || !followTime) {
	    alert('Please enter the "Follow Up Date" and "Follow Up Time"');
	    return false;
	  }
	}
	else {
	  var followDate = 0;
	  var followTime = 0;
	}
	$.post('saveFeedback.php', { feedback: feedback, id : id, followDate : followDate, followTime : followTime, remarks : remarks, userName : userName}, 
      function(returnedData){
        if (returnedData==1) {
		  window.location.href="entry.php"; 
		}
		else {
		  alert('Something Went wrong. Please save again');
		  alert(returnedData);
		  return false;
		}
      }
	);
  });
	
	$("#loginButton").click(function(){
      var userName = $('#userName').val();
      var userPassword = $('#userPassword').val();
	  if (!userName || !userPassword) {
	    alert('Please enter the "Username" and "Password"');
	    return false;
	  }
	  else {
	    $.post('userLogin.php', { userName: userName, userPassword : userPassword}, 
          function(returnedData){
			if (returnedData==1) {
		      //alert('Login Successfull');
		      window.location.href="entry.php"; 
		    }
		    else {
		      alert('Username or Password is wrong. Please try again..');
		      return false;
		    }
          }
		);
	  }
	});
});
