<html>
    <head>
          <style>
    body {
  zoom: 300%;
}
    </style>
        </head>
        
        <body>
       </body>
    </html>
<?php
$ordernumber = $_GET['Ordernumber'];
$con  =  mysqli_connect("www.baleenmedia.com","baleeed5_dev1","Baleen@789#","baleeed5_live");
$category     =  mysqli_query($con,"SELECT Category FROM `clientcategory_table`");
$Source       =  mysqli_query($con,"SELECT Source FROM `source_table`");
$ExistingSource = $_GET['Source'];
$ExistingCategory = $_GET['BusinessCategory'];
$CSENAME = $_GET['CSEname'];
$ClientName = $_GET['ClientName'];
?>

<!DOCTYPE html>
<html>
<body>
<input type="hidden" id="OrderNumber" readonly value="<?php print $ordernumber ?>" />
<input type="hidden" id="CSEname" readonly value="<?php print $CSENAME ?>" />
<input type="hidden" id="ClientName" readonly value="<?php print $ClientName ?>" />


Business Category : <select name="BusinessCategory" id="BusinessCategory">
<option value = <?php $ExistingCategory ?> selected> <?php print $ExistingCategory ?></option>';  

   <?php
while($r = mysqli_fetch_array($category))
{
  
 echo '<option>'. $r['Category'].'</option>' ; 
                                         
}
?> 

</select>
<br>
<br>

Source : <select name="Source" id="Source"  >
<option value = <?php $ExistingCategory ?> selected> <?php print $ExistingSource ?></option>';  

    <?php
while($r = mysqli_fetch_array($Source))
{
  
 echo '<option>'.$r['Source'].'</option>' ;  
                                         
}
?> 
</select>
<br>
<br>
<button onclick="ButtonOperation()">  Approve </button>

<script> 
function ButtonOperation(){
 var Source1 = document.getElementById("Source").value ;
 var BusinessCategory1 =  document.getElementById("BusinessCategory").value;
 var Ordernumber1 = document.getElementById("OrderNumber").value; 
 var CSEName1 = document.getElementById("CSEname").value;
 var Clientname1 = document.getElementById("ClientName").value;
 document.location.href = "https://orders.baleenmedia.com/UpdateSourceBusinessCategoryAndApprovetheOrder.php?Source=" + Source1 + "&BusinessCategory="+ BusinessCategory1  +"&OrderNumber="+ Ordernumber1+"&CSEname="+ CSEName1 + "&ClientName="+Clientname1;
}
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"
src="https://code.jquery.com/jquery-1.12.4.js"
src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
</script>
</body>
</html>
