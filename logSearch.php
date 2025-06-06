<?php
header('Content-Type: application/json');
require_once 'connect.php'; 

// Validate input
if (!isset($_POST['city']) || empty(trim($_POST['city']))) {
    echo json_encode(['success' => false, 'error' => 'City parameter missing']);
    exit;
}

$city = trim($_POST['city']);

// Log search to database
try {
    $stmt = $conn->prepare("INSERT INTO searches (city, search_time) VALUES (?, NOW())");
    $stmt->bind_param("s", $city);
    $stmt->execute();
    
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>