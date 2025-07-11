<?php
try{
    
    $json = file_get_contents('php://input'); 
	// decoding the received JSON and store into $obj variable.
	$obj = json_decode($json,true);

  $conn = new mysqli("www.baleenmedia.com","baleeed5_web_adm","admin123$","baleeed5_kiruba_demo","3306");
  //showing error when there is error in contacting database
  if ($conn ->connect_error){
      echo json_encode("Problem in Connection");       
  }
  else{
    //query to fetch Balance amount from database
    $sql = "SELECT * FROM employee_table WHERE status = 'active' AND AppRights <> 'Leadership' AND userName <> 'radhaa' AND userName <> 'srk' AND userName <> 'leenah_bde' and userName <> 'leenah_cse'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
$id = 0;
// fetch the next row
while($row = $result->fetch_assoc()) {
    $cse = $row['userName'];
    $cseName = json_encode($cse);
    $age =  array("cseName" => $cseName);
    echo json_encode($age);
}
    }
    else
    {
      echo "0 results";
    }
  }

}
catch(Exception $E)
{
    echo json_encode($E);
}
?>