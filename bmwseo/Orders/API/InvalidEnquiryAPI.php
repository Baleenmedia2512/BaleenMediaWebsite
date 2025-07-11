<?php
include("db_test.php");
try{

    $json = file_get_contents('php://input');  
    $result = $mysqli->query("SELECT MAX(ID) FROM enquiry_table");
$row = $result->fetch_assoc();
$highest_id = $row["MAX(ID)"];
    
 $add = $mysqli->query("UPDATE enquiry_table SET `Validity` = 0 and `ReasonForInvalidity` = 'Undo' WHERE ID = .$highest_id.");

     if($add){
            echo json_encode('Inserted');
            return $add;
    }
    else{
            echo json_encode('Unable to save');

    }      
//echo json_encode($ClientContact);
 }
catch(Exception $E)
{
	echo json_encode('Message: ' .$E->getMessage());
}
?>