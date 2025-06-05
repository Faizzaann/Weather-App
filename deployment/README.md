# 🚀 Deployment

## 🎯 Objective
To automate and manage the deployment process of the Weather App from development to production, ensuring reliability and minimal downtime.

## ⚙️ Technologies Used
- **XAMPP**: Used to host the backend (PHP APIs) and connect with MySQL database.
- **PHP**: Backend scripting and API logic.
- **GitHub**: Version control and deployment pipeline.
- **GitHub Actions** *(optional)*: For setting up CI/CD automation.
- **DeepSeek**: Used to auto-generate and validate deployment scripts, including PHP setup and API endpoints.
  
## 📦 Deployment Structure
- `src/` contains the frontend (`index.php`, CSS, JS)
- `backend/` (inside `src/`) contains PHP API files.
- Database imported using phpMyAdmin via XAMPP.
- All code pushed to GitHub repository for version control.

## 🚀 Deployment Steps
1. Code pushed to GitHub repository.
2. GitHub Actions (optional) trigger tests and build.
3. Files are deployed to local server via XAMPP.
4. Database is imported manually or through SQL scripts.
5. API endpoints are verified through Postman or browser.
6. Frontend tested locally at `http://localhost/weather-app/`.

## 🔁 Connection with Monitoring & Maintenance
- **Post-deployment**, logs and analytics are monitored using PHP error logs and browser dev tools.
- Regular **maintenance** tasks are scheduled to ensure API keys, endpoints, and UI stay updated.

## 📷 Screenshots / Logs
- Screenshot of XAMPP dashboard with running services.
- Screenshot of GitHub repo with deployment pipeline (if GitHub Actions used).
- Screenshot of Postman API response.
