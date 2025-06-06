<?php
require_once 'config.php';
require_once 'appError.php'; // 👈 Replace monitor.php

header('Content-Type: application/json');

$startTime = microtime(true);

try {
    if (!isset($_GET['city'])) {
        throw new Exception('Missing city parameter');
    }

    $city = $_GET['city'];
    $apiUrl = "https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=" . API_KEY . "&units=metric";
    
    // Debug log
    AppError::consoleLog("Fetching weather for: $city");
    
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $apiUrl,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 5
    ]);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    if (curl_errno($ch)) {
        throw new Exception("CURL Error: " . curl_error($ch));
    }
    
    if ($httpCode !== 200) {
        AppError::logError("API Error $httpCode", [
            'city' => $city,
            'response' => $response
        ]);
        throw new Exception("Weather API failed");
    }
    
    // Log performance
    AppError::logPerformance(
        "getWeather", 
        microtime(true) - $startTime
    );
    
    echo $response;

} catch (Exception $e) {
    AppError::logError($e->getMessage(), [
        'city' => $city ?? null,
        'trace' => $e->getTraceAsString()
    ]);
    
    echo json_encode([
        'cod' => '500',
        'message' => 'Weather service unavailable'
    ]);
}
?>