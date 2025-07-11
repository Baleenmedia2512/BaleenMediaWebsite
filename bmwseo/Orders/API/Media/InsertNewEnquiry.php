<?php
require 'ConnectionManager.php';
$dbName = isset($_GET['JsonDBName']) ? $_GET['JsonDBName'] : 'Baleen Media';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    ConnectionManager::connect($dbName);
    $pdo = ConnectionManager::getConnection();
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

function fetchConsultantId($ConsultantContact, $ConsultantName) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT CId FROM consultant_table WHERE ConsultantName = :PDOConsultantName AND ConsultantNumber = :PDOConsultantNumber");
    $stmt->bindParam(':PDOConsultantName', $ConsultantName);
    $stmt->bindParam(':PDOConsultantNumber', $ConsultantContact);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result !== false ? $result['CId'] : 0;
}

function insertConsultant($EntryUser, $ConsultantName, $ConsultantContact) {
    global $pdo;
    $stmtId = $pdo->prepare("SELECT MAX(CId) as CId FROM consultant_table");
    $stmtId->execute();
    $result = $stmtId->fetch(PDO::FETCH_ASSOC);
    $CId = ($result !== false) ? $result['CId'] + 1 : 0;
    $stmtInsert = $pdo->prepare("INSERT INTO consultant_table (CId, EntryDateTime, EntryUser, ConsultantName, ConsultantNumber, Validity) VALUES (:CId, CURRENT_TIMESTAMP, :PDOEntryUser, :PDOConsultantName, :PDOConsultantNumber, 1)");
    $stmtInsert->bindParam(':CId', $CId);
    $stmtInsert->bindParam(':PDOEntryUser', $EntryUser);
    $stmtInsert->bindParam(':PDOConsultantName', $ConsultantName);
    $stmtInsert->bindParam(':PDOConsultantNumber', $ConsultantContact);
    $stmtInsert->execute();
    return $CId;
}

function checkClientContactCount($ClientContact, $ClientName) {
    global $pdo;
    $stmtContact = $pdo->prepare("SELECT COUNT(*) as ContactCount FROM client_table WHERE ClientContact = :PDOClientContact AND ClientName = :PDOClientName");
    $stmtContact->bindParam(':PDOClientContact', $ClientContact);
    $stmtContact->bindParam(':PDOClientName', $ClientName);
    $stmtContact->execute();
    $result = $stmtContact->fetch(PDO::FETCH_ASSOC);
    return $result !== false ? $result['ContactCount'] : 0;
}

function insertClient($params) {
    global $pdo;
    $stmtEnquiryTable = $pdo->prepare("INSERT INTO client_table VALUES ('', CURRENT_TIMESTAMP, :PDOEntryUser, :PDOClientContact,  1, 1, CURRENT_TIMESTAMP, :PDOSource, :PDOGender, :PDOClientName, :PDOClientEmail, :PDOAge, :PDOClientAgeFormat, :PDODOB, :PDOAddress, :PDOClientGST, :PDOClientPAN, :PDOCId, :PDOClientContactPerson)");
    foreach ($params as $key => &$val) {
        $stmtEnquiryTable->bindParam($key, $val);
    }
    $stmtEnquiryTable->execute();
}

function insertEnquiry($params) {
    global $pdo;
    $stmtEnquiryTable = $pdo->prepare("INSERT INTO enquiry_table VALUES ('', CURRENT_TIMESTAMP, :PDOEntryUser, :PDOClientContact, :PDOEntryUser,  1, 1, CURRENT_TIMESTAMP, :PDOSource, '', :PDOClientName, :PDOClientEmail, :PDOClientTitle, :PDOClientAge, :PDOClientDOB, :PDOClientAddress, :PDOClientGST, :PDOClientPAN, :PDOCId,  :PDOClientContactPerson)");
    foreach ($params as $key => &$val) {
        $stmtEnquiryTable->bindParam($key, $val);
    }
    $stmtEnquiryTable->execute();
}

function updateClient($params) {
    global $pdo;
    $stmtUpdateClient = $pdo->prepare("UPDATE `client_table` SET `EntryDateTime`= CURRENT_TIMESTAMP ,`EntryUser`= :PDOEntryUser,`Attended`= 1,`Validity`= 1,`AttendedDateTime`= CURRENT_TIMESTAMP,`Source`= :PDOSource,`Title`= :PDOClientTitle,`ClientName`= :PDOClientName,`ClientContact`= :PDOClientContact,`ClientEmail`= :PDOClientEmail,`Age`= :PDOClientAge,`AgeFormat` = :PDOClientAgeFormat,`DOB`= :PDOClientDOB,`Address`= :PDOClientAddress,`ClientGST`= :PDOClientGST,`ClientPAN`= :PDOClientPAN,`ConsultantId`= :PDOCId, `ClientContactPerson` = :PDOClientContactPerson WHERE ID = :PDOClientID");
    foreach ($params as $key => &$val) {
        $stmtUpdateClient->bindParam($key, $val);
    }
    $stmtUpdateClient->execute();
}

try {
    $IsNewClient = $_GET['JsonIsNewClient'];
    $EntryUser = $_GET['JsonUserName'];
    $ClientName = $_GET['JsonClientName'];
    $ClientEmail = isset($_GET['JsonClientEmail']) ? $_GET['JsonClientEmail'] : '';
    $ClientContact = isset($_GET['JsonClientContact']) && $_GET['JsonClientContact'] !== ''? $_GET['JsonClientContact'] : null;
    $Source = $_GET['JsonSource'];
    $Age = isset($_GET['JsonAge']) ? $_GET['JsonAge'] : '';
    $DOB = isset($_GET['JsonDOB']) ? $_GET['JsonDOB'] : '';
    $Address = isset($_GET['JsonAddress']) ? $_GET['JsonAddress'] : '';
    $Gender = isset($_GET['JsonGender']) ? $_GET['JsonGender'] : '';
    $ConsultantName = isset($_GET['JsonConsultantName']) ? $_GET['JsonConsultantName'] : '';
    $ConsultantContact = isset($_GET['JsonConsultantContact']) ? (int)$_GET['JsonConsultantContact'] : 0;
    $ClientGST = isset($_GET['JsonClientGST']) ? $_GET['JsonClientGST'] : '';
    $ClientPAN = isset($_GET['JsonClientPAN']) ? $_GET['JsonClientPAN'] : '';
    $ClientID = isset($_GET['JsonClientID']) ? $_GET['JsonClientID'] : '';
    $ClientContactPerson = isset($_GET['JsonClientContactPerson']) ? $_GET['JsonClientContactPerson'] : '';

    $CId = 0;
    $ContactCount = 0;
    $AgeFormat = (stripos($Gender, 'Baby.') !== false || stripos($Gender, 'B/o.') !== false) ? 'Months' : 'Years';

    if ($ConsultantContact !== '') {
        $CId = fetchConsultantId($ConsultantContact, $ConsultantName);
        if ($CId == 0) {
            $CId = insertConsultant($EntryUser, $ConsultantName, $ConsultantContact);
        }
    }

    if ($ClientID === '' && $ClientContact !== '') {
    $ContactCount = checkClientContactCount($ClientContact, $ClientName);
    }
         $insertClientParams = [
        ':PDOEntryUser' => $EntryUser,
        ':PDOClientName' => $ClientName,
        ':PDOClientEmail' => $ClientEmail,
        ':PDOClientContact' => $ClientContact,
        ':PDOSource' => $Source,
        ':PDOGender' => $Gender,
        ':PDOAge' => $Age,
        ':PDOClientAgeFormat' => $AgeFormat,
        ':PDODOB' => $DOB,
        ':PDOAddress' => $Address,
        ':PDOClientGST' => $ClientGST,
        ':PDOClientPAN' => $ClientPAN,
        ':PDOCId' => $CId,
        ':PDOClientContactPerson' => $ClientContactPerson
    ];

         $insertEnquiryParams = [
        ':PDOEntryUser' => $EntryUser,
        ':PDOClientName' => $ClientName,
        ':PDOClientEmail' => $ClientEmail,
        ':PDOClientContact' => $ClientContact,
        ':PDOSource' => $Source,
        ':PDOClientTitle' => $Gender,
        ':PDOClientAge' => $Age,
        ':PDOClientDOB' => $DOB,
        ':PDOClientAddress' => $Address,
        ':PDOClientGST' => $ClientGST,
        ':PDOClientPAN' => $ClientPAN,
        ':PDOCId' => $CId,
         ':PDOClientContactPerson' => $ClientContactPerson
    ];

       $updateClientParams = [
        ':PDOEntryUser' => $EntryUser,
        ':PDOClientName' => $ClientName,
        ':PDOClientEmail' => $ClientEmail,
        ':PDOClientContact' => $ClientContact,
        ':PDOSource' => $Source,
        ':PDOClientTitle' => $Gender,
        ':PDOClientAge' => $Age,
        ':PDOClientAgeFormat' => $AgeFormat,
        ':PDOClientDOB' => $DOB,
        ':PDOClientAddress' => $Address,
        ':PDOClientGST' => $ClientGST,
        ':PDOClientPAN' => $ClientPAN,
        ':PDOCId' => $CId,
        ':PDOClientID' => $ClientID,
        ':PDOClientContactPerson' => $ClientContactPerson
    ];

     try {
        if ($ContactCount > 0 || $ClientID !== '') {
            updateClient($updateClientParams);
            insertEnquiry($insertEnquiryParams);
            echo json_encode("Values Inserted Successfully!");
        } else {
            insertClient($insertClientParams);
            insertEnquiry($insertEnquiryParams);
            echo json_encode("Values Inserted Successfully!");
        }
    } catch (PDOException $e) {
        if ($e->getCode() == '23000' && $ClientContact === null) {
            echo json_encode("Values Inserted Successfully!");
        } elseif ($e->getCode() == '23000' && $ClientContact !== null) {
            echo json_encode("Duplicate Entry!");
        } else {
            throw $e;
        }

    }
} catch (PDOException $e) {
    echo json_encode("Error Inserting Data: " . $e->getMessage());
    
}
?>
