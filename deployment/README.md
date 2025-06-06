# 🌦️ Weather App – Deployment Guide

## 🎯 Objective

To automate and manage the deployment process of the Weather App from development to production using **XAMPP** and **GitHub**, ensuring reliability and minimal downtime.

---

## ⚙️ Technologies Used

| Technology       | Purpose                                        |
|------------------|------------------------------------------------|
| **XAMPP**        | Host PHP APIs and manage MySQL database locally |
| **PHP**          | Backend scripting for API logic                |
| **GitHub**       | Version control and central code repository    |
| **GitHub Actions** (optional) | CI/CD automation for testing and deployment |
| **DeepSeek**     | Auto-generates deployment scripts and validates APIs |

---

## 🚀 Deployment Steps

1. ✅ Push Code to GitHub
- Ensure the entire `weather-app/` structure is committed and pushed.
- Commit message example:
  ```  
  bash
  git add .
  git commit -m "Deploy weather app to GitHub"
  git push origin main

  ---

2. ⚙️ GitHub Actions (Optional CI/CD Setup)
  
Set up .github/workflows/deploy.yml to run tests and trigger deployment scripts.

Example: Run unit tests and notify if any fail.

---

3. 💻 Local Deployment via XAMPP
Start XAMPP

Launch Apache and MySQL services via the XAMPP Control Panel.

Place Files

Copy the contents of weather-app/src/ into the htdocs/ directory.
Example path: C:\xampp\htdocs\weather-app\

Import Database

Open http://localhost/phpmyadmin/

Create a database (e.g., weather_app)

Import weather_app.sql using the Import tab.

Verify API Endpoints

Test APIs in Postman or browser:

Example: http://localhost/Weather-App/getWeather.php?city=London

Access Frontend

Open http://localhost/Weather-App/index.php in your browser.

Ensure the weather information is fetched and displayed.


