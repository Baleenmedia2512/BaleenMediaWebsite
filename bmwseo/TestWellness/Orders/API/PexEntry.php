<?php
include 'db.php';
try{
$json = file_get_contents('php://input');
$obj = json_decode($json,true);

$EntryUser = $obj['EntryUser'];
$OrderNumber = $obj['OrderNumber'];
$Amount = $obj['Amount'];
$Remarks = $obj['Remarks'];
$TaxType = $obj['TaxType'];
$TaxAmount = $obj['TaxAmount'];
$PaymentMode = $obj['PaymentMode'];
//$ChequeDate = $obj['ChequeDate'];
//$ChequeNumber = $obj['ChequeNumber'];
$PexBadDebt = $obj['PexBadDebt'];
$PexTDS = $obj['PexTDS'];
if (int($OrderNumber) = FALSE)
{
    die("Enter Valid Order Number to Entry")
} 

if ($obj['Amount'] = "" || $obj['PaymentMode'] = "" || $obj['OrderNumber'] = "" || $obj['Remarks'] = "")
{
die("Transaction necessary details incomplete");
}
$Result = $mysqli->query("INSERT INTO `financial_transaction_table`(`EntryDate`,`EntryUser`,`TransactionType`,`OrderNumber`,`Remarks`,`Amount`,`TaxType`,`TaxAmount`,`PaymentMode`,`PEXtds`,`PEXbadebt`,`ValidStatus`) VALUES (now(),'".$EntryUser."','Income','".$OrderNumber."','".$Remarks."','".$Amount."','".$TaxType."','".$TaxAmount."','".$PaymentMode."','".$PexTDS."','".$PexBadDebt."','Valid')");
if ($Result > 0)
{
echo json_encode("Record Saved successfully");
}
elseif($Result = 0)
{
    echo json_encode("Record not saved ");
}
}
catch(Exception $message){
    echo "Record not saved";
}
?>