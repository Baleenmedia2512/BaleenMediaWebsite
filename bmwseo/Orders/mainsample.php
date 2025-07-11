<?php
$con  =  mysqli_connect("www.baleenmedia.com","baleeed5_dev1","admin123$","baleeed5_live");
$s      =  mysqli_query($con,"SELECT Category FROM `clientcategory_table`");

$options = "";
while($r = mysqli_fetch_array($s))
{
    $options = $options."<option>".$r['Category']."</option>";
//  $category = $r['Category']; 
//  echo '<option>'.$category.'</option>' ;  
                                         
}
?> 
<html>
<body>

<select>
<?php echo $options; ?>
</select>
</body>
</html>
<!-- <!DOCTYPE html>
<html>
<head>
<title> Baleen Media - Orders
</title>
<meta charset="UTF-8">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html> -->
