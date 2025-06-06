<?php
class AppError {
    private static $logFile = __DIR__ . '/../logs/weather_errors.log';
    
    /**
     * Initialize error logging system
     */
    public static function init() {
        // Create logs directory if missing
        if (!file_exists(dirname(self::$logFile))) {
            mkdir(dirname(self::$logFile), 0777, true);
        }
        
        // Set PHP error logging
        ini_set('error_log', self::$logFile);
    }
    
    /**
     * Log application errors with context
     */
    public static function logError(string $message, array $context = []) {
        $logEntry = sprintf(
            "[%s] ERROR: %s | Context: %s\n",
            date('Y-m-d H:i:s'),
            $message,
            json_encode($context)
        );
        error_log($logEntry, 3, self::$logFile);
    }
    
    /**
     * Log API performance metrics
     */
    public static function logPerformance(string $endpoint, float $responseTime) {
        $entry = sprintf(
            "[%s] PERFORMANCE: %s took %.3f seconds\n",
            date('Y-m-d H:i:s'),
            $endpoint,
            $responseTime
        );
        error_log($entry, 3, self::$logFile);
    }
    
    /**
     * Output to browser console (for frontend debugging)
     */
    public static function consoleLog(string $message) {
        echo "<script>console.log('[PHP] " . addslashes($message) . "');</script>";
    }

    /**
     * Getter for the log file path
     */
    public static function getLogFile(): string {
        return self::$logFile;
    }
}

// Initialize on include
AppError::init();
?>
