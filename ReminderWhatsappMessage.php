<?php
include_once './Orders/API/Hospital-Form/Db_Connect.php'; // Include database connection

// Start a secure session
session_start();
session_regenerate_id(true);

// Set CORS headers to allow requests from your frontend (adjust URL as necessary)
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Allow-Credentials: true"); // If using credentials (sessions)

// Handle preflight request for CORS
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Set content type to JSON for API response
header('Content-Type: application/json');

try {
    // Step 1: Fetch appointments scheduled for tomorrow and one week from now
    $stmt = $pdo->prepare("
         SELECT ID, ClientId, AppointmentDate, Reminder, WeekReminder 
        FROM tbl_appointment 
        WHERE (Reminder = 0 AND AppointmentDate = CURDATE() + INTERVAL 1 DAY) 
           OR (WeekReminder = 0 AND AppointmentDate >= CURDATE() + INTERVAL 7 DAY)
    ");
    $stmt->execute();
    $appointments = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($appointments)) {
        http_response_code(200); // No records to process
        echo json_encode(['message' => 'No reminders to send for appointments.']);
        exit;
    }

    foreach ($appointments as $appointment) {
        $appointmentId = $appointment['ID'];
        $clientId = $appointment['ClientId'];
        $appointmentDate = $appointment['AppointmentDate'];

        // Step 2: Fetch ClientName and MobileNumber from client_table
        $clientStmt = $pdo->prepare("SELECT ClientName, ClientContact FROM client_table WHERE ID = :clientId");
        $clientStmt->bindParam(':clientId', $clientId, PDO::PARAM_INT);
        $clientStmt->execute();
        $client = $clientStmt->fetch(PDO::FETCH_ASSOC);

        if (!$client) {
            error_log("\nClient ID not found: {$clientId}", 3, './Message_Error.txt');
            continue; // Skip this appointment if client not found
        }

        // Fetch the mobile number from the ClientContact column
        $mobileNumber = htmlspecialchars($client['ClientContact'], ENT_QUOTES, 'UTF-8');
        $clientName = htmlspecialchars($client['ClientName'], ENT_QUOTES, 'UTF-8'); // Fetch the client name
        
        // Determine the template parameter based on AppointmentDate
        $templateParam = (date('Y-m-d', strtotime($appointmentDate)) == date('Y-m-d', strtotime('+1 day'))) ? '1' : '7';

        // Step 3: Send WhatsApp message via API
        $apiUrl = "https://app.tendigit.in/api/sendtemplate.php?LicenseNumber=95445308244&APIKey=duxby0porheW2IM798tNKCPYH&Contact=91{$mobileNumber}&Template=appointment_reminder_tamil&Param={$clientName},{$templateParam}"; // Use ClientName
        
        $response = file_get_contents($apiUrl);

        if ($response) {
            // Step 4: Update Reminder or WeekReminder column in tbl_appointment table
            if ($templateParam === '1') {
                // Update Reminder for tomorrow's appointments
                $updateStmt = $pdo->prepare("UPDATE tbl_appointment SET Reminder = 1 WHERE ID = :appointmentId");
            } else {
                // Update WeekReminder for next week's appointments
                $updateStmt = $pdo->prepare("UPDATE tbl_appointment SET WeekReminder = 1 WHERE ID = :appointmentId");
            }
            $updateStmt->bindParam(':appointmentId', $appointmentId, PDO::PARAM_INT);
            $updateStmt->execute();
        } else {
            // Log the failed message for this appointment
            error_log("\nFailed to send WhatsApp message for appointment ID: {$appointmentId}", 3, './Message_Error.txt');
        }
    }

    http_response_code(200); // Success
    echo json_encode(['success' => 'Messages processed and reminders updated successfully.']);

} catch (PDOException $e) {
    // Handle any database exceptions
    error_log("\nPDO Error: " . $e->getMessage(), 3, './PDO_Insert_Error.txt'); // Log the error for debugging
    http_response_code(500); // Internal Server Error
    echo json_encode(['error' => 'An error occurred while processing the appointments.']);
} catch (Exception $e) {
    // Handle any other exceptions
    error_log("\nError: " . $e->getMessage(), 3, './General_Error.txt'); // Log the error for debugging
    http_response_code(500); // Internal Server Error
    echo json_encode(['error' => 'An unexpected error occurred.']);
}
?>
