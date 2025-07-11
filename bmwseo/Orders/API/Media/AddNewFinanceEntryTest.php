<?php
require 'ConnectionManager.php';
$dbName = isset($_GET['JsonDBName']) ? $_GET['JsonDBName'] : 'Baleen Media';
// if($dbName !== 'Grace Scans' && $dbName !== 'Baleen Media'){
//     $dbName = 'Baleen Media';
// }
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    ConnectionManager::connect($dbName);
    $pdo = ConnectionManager::getConnection();
    $transactionType = isset($_GET['JsonTransactionType']) ? $_GET['JsonTransactionType'] : '';
    $username = isset($_GET['JsonEntryUser']) ? $_GET['JsonEntryUser'] : '';
    $orderNumber = isset($_GET['JsonOrderNumber']) ? $_GET['JsonOrderNumber'] : '';
    $orderAmount = isset($_GET['JsonOrderAmount']) ? $_GET['JsonOrderAmount'] : '';
    $taxType = isset($_GET['JsonTaxType']) ? $_GET['JsonTaxType'] : '';
    $gstAmount = isset($_GET['JsonGSTAmount']) ? $_GET['JsonGSTAmount'] : '';
    $expenseCategory = isset($_GET['JsonExpenseCategory']) ? $_GET['JsonExpenseCategory'] : '';
    $remarks = isset($_GET['JsonRemarks']) ? $_GET['JsonRemarks'] : '';
    $transactionDate = isset($_GET['JsonTransactionDate']) ? $_GET['JsonTransactionDate'] : '';
    $paymentMode = isset($_GET['JsonPaymentMode']) ? $_GET['JsonPaymentMode'] : '';
    $chequeNumber = isset($_GET['JsonChequeNumber']) ? $_GET['JsonChequeNumber'] : '';
    $chequeDate = isset($_GET['JsonChequeDate']) ? $_GET['JsonChequeDate'] : '';
    $rateWiseOrderNumber = isset($_GET['JsonRateWiseOrderNumber']) ? $_GET['JsonRateWiseOrderNumber'] : '';

    // Set default values for optional parameters
    $validStatus = 'Valid';
    $PEXtds = isset($_GET['PEXtds']) ? $_GET['PEXtds'] : 0;
    $PEXbadebt = isset($_GET['PEXbadebt']) ? $_GET['PEXbadebt'] : 0;
    $OPEXtds = isset($_GET['OPEXtds']) ? $_GET['OPEXtds'] : 0;
    $OPEXbadebt = isset($_GET['OPEXbadebt']) ? $_GET['OPEXbadebt'] : 0;
    $CAPEXtds = isset($_GET['CAPEXtds']) ? $_GET['CAPEXtds'] : 0;
    $CAPEXbadebt = isset($_GET['CAPEXbadebt']) ? $_GET['CAPEXbadebt'] : 0;

 // MP-73-Fix saving issue for GS(PHP & DB)

if($dbName == 'Grace Scans'){
// Prepare SQL statement
    $stmt = $pdo->prepare("INSERT INTO `financial_transaction_table`(`EntryUser`, `TransactionType`, `OrderNumber`, `Remarks`, `ExpensesCategory`, `Amount`, `TaxType`, `TaxAmount`, `PaymentMode`, `ChequeNumber`, `ChequeDate`, `ValidStatus`, `TransactionDate`, `RateWiseOrderNumber`) VALUES(:entryUserPDO, :transactionTypePDO, :orderNumberPDO, :remarksPDO, :expenseCategoryPDO, :amountPDO, :taxTypePDO, :taxAmountPDO, :paymentModePDO, :chequeNumberPDO, :chequeDatePDO, :validStatusPDO, :transactionDatePDO, :rateWiseOrderNumberPDO)");

    // Bind parameters
    $stmt->bindParam(":entryUserPDO", $username);
    $stmt->bindParam(":transactionTypePDO", $transactionType);
    $stmt->bindParam(":orderNumberPDO", $orderNumber);
    $stmt->bindParam(":remarksPDO", $remarks);
    $stmt->bindParam(":expenseCategoryPDO", $expenseCategory);
    $stmt->bindParam(":amountPDO", $orderAmount);
    $stmt->bindParam(":taxTypePDO", $taxType);
    $stmt->bindParam(":taxAmountPDO", $gstAmount);
    $stmt->bindParam(":paymentModePDO", $paymentMode);
    $stmt->bindParam(":chequeNumberPDO", $chequeNumber);
    $stmt->bindParam(":chequeDatePDO", $chequeDate);
    $stmt->bindParam(":validStatusPDO", $validStatus);
    $stmt->bindParam(":transactionDatePDO", $transactionDate);
    $stmt->bindParam(":rateWiseOrderNumberPDO", $rateWiseOrderNumber);
    $stmt->execute();

    
} else {
//  MP-76-Fix saving issue for BM.(PHP & DB)

    // Prepare SQL statement
    $stmt = $pdo->prepare("INSERT INTO `financial_transaction_table`(`EntryUser`, `TransactionType`, `OrderNumber`, `Remarks`, `ExpensesCategory`, `Amount`, `TaxType`, `TaxAmount`, `PaymentMode`, `ChequeNumber`, `ChequeDate`, `ValidStatus`, `PEXtds`, `PEXbadebt`, `OPEXtds`, `OPEXbadebt`, `CAPEXtds`, `CAPEXbadebt`, `TransactionDate`, `RateWiseOrderNumber`) VALUES(:entryUserPDO, :transactionTypePDO, :orderNumberPDO, :remarksPDO, :expenseCategoryPDO, :amountPDO, :taxTypePDO, :taxAmountPDO, :paymentModePDO, :chequeNumberPDO, :chequeDatePDO, :validStatusPDO, :PEXtdsPDO, :PEXbadebtPDO, :OPEXtdsPDO, :OPEXbadebtPDO, :CAPEXtdsPDO, :CAPEXbadebtPDO, :transactionDatePDO, :rateWiseOrderNumberPDO)");

    // Bind parameters
    $stmt->bindParam(":entryUserPDO", $username);
    $stmt->bindParam(":transactionTypePDO", $transactionType);
    $stmt->bindParam(":orderNumberPDO", $orderNumber);
    $stmt->bindParam(":remarksPDO", $remarks);
    $stmt->bindParam(":expenseCategoryPDO", $expenseCategory);
    $stmt->bindParam(":amountPDO", $orderAmount);
    $stmt->bindParam(":taxTypePDO", $taxType);
    $stmt->bindParam(":taxAmountPDO", $gstAmount);
    $stmt->bindParam(":paymentModePDO", $paymentMode);
    $stmt->bindParam(":chequeNumberPDO", $chequeNumber);
    $stmt->bindParam(":chequeDatePDO", $chequeDate);
    $stmt->bindParam(":validStatusPDO", $validStatus);
    $stmt->bindParam(":PEXtdsPDO", $PEXtds);
    $stmt->bindParam(":PEXbadebtPDO", $PEXbadebt);
    $stmt->bindParam(":OPEXtdsPDO", $OPEXtds);
    $stmt->bindParam(":OPEXbadebtPDO", $OPEXbadebt);
    $stmt->bindParam(":CAPEXtdsPDO", $CAPEXtds);
    $stmt->bindParam(":CAPEXbadebtPDO", $CAPEXbadebt);
    $stmt->bindParam(":transactionDatePDO", $transactionDate);
    $stmt->bindParam(":rateWiseOrderNumberPDO", $rateWiseOrderNumber);
    $stmt->execute();
}
    	echo json_encode("Inserted Successfully!");
	} catch(PDOException $e) {
    	echo json_encode("Error inserting data: ".$e->getMessage());
}
?>