# 📡 Monitoring

## 🎯 Objective
To continuously track application health, performance, and system errors in both frontend and backend components of the Weather App.

## 🧠 AI Tools Used
- **DeepSeek**: Helped us analyze backend PHP logic to identify potential bottlenecks and inefficient code.
- **(Optional/Simulated)**: *Datadog* or *New Relic* was considered for real-time monitoring (CPU, memory, API response time).

## 🔧 Monitoring Techniques
- **PHP error logging** using `error_log()` function.
- **Browser Dev Tools** to inspect network requests, JavaScript performance, and frontend rendering speed.
- **Log Files**: Server-side logging using PHP to store error or exception messages.
- **API Monitoring**: Monitored weather API response success/failure with logs and alerts.
  
## 📷 Sample Monitoring Evidence
- Screenshot of PHP error log file output.
- Screenshot from browser DevTools → Network & Console tab.
- Placeholder image of Datadog dashboard (for visualization).

## 🛠 Future Enhancements
- Integrate Datadog for detailed metrics.
- Use CRON jobs to ping the API and notify via email/SMS if it fails.
- Implement uptime monitoring using free tools like UptimeRobot.
