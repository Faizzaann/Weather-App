<?php
require_once 'appError.php';

header('Content-Type: text/html; charset=UTF-8');

// Use public method to get log file path
$logFile = AppError::getLogFile();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Error Monitoring Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f9f9f9; }
        pre { background: #f0f0f0; padding: 15px; border-radius: 5px; border: 1px solid #ddd; }
        h1 { color: #333; }
        .critical { color: red; font-weight: bold; }
        .stats { margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Error Monitoring Dashboard</h1>
    
    <?php if (!file_exists($logFile)): ?>
        <p>No errors logged yet.</p>
    <?php else: ?>
        <h3>Last 10 Entries</h3>
        <?php
        $logLines = file($logFile);
        $lastLogs = array_slice($logLines, -10);
        ?>
        <pre><?= htmlspecialchars(implode("", $lastLogs)) ?></pre>

        <div class="stats">
            <h3>Statistics</h3>
            <?php
            $errorCount = count(preg_grep('/ERROR:/', $logLines));
            $perfCount = count(preg_grep('/PERFORMANCE:/', $logLines));
            ?>
            <p>Total <span class="critical">Errors</span>: <strong><?= $errorCount ?></strong></p>
            <p>Performance Logs: <strong><?= $perfCount ?></strong></p>
        </div>
    <?php endif; ?>
</body>
</html>
