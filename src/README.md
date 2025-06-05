# 💻 WeatherApp – Source Code

This folder contains the full source code for both the frontend and backend of the WeatherApp. The application fetches real-time weather data using external APIs and displays it in a responsive web interface.

---

## 📁 Folder Structure

src/
├── index.php # Main frontend interface
├── assets/ # CSS, JS, and image files
│ ├── css/
│ ├── js/
│ └── images/
├── api/ # PHP APIs for backend logic
│ ├── getWeather.php
│ └── config.php # Database/API config
└── db/ # (Optional) DB-related PHP files
└── connect.php


---

## 🌐 Frontend Overview

- **File**: `index.php`
- **Tech Stack**:
  - HTML5, CSS3
  - Bootstrap 5 for responsive layout
  - JavaScript (vanilla) for API calls and UI updates
- **Features**:
  - Search weather by city name
  - Display temperature, humidity, condition icon
  - Show forecast (e.g., 3-day outlook)
  - Responsive design for desktop and mobile

### 🔧 How it Works

1. User enters a city name.
2. JavaScript sends an AJAX request to `api/getWeather.php`.
3. Response is parsed and weather info is displayed dynamically.

---

## 🔙 Backend Overview

- **Language**: PHP
- **APIs Used**: OpenWeatherMap API (or similar)
- **Files**:
  - `getWeather.php`: Main API that fetches weather data.
  - `config.php`: Stores API key and constants.
  - `connect.php`: (Optional) MySQL connection for storing logs/cache.
- **Response Format**: JSON

### 🔐 API Workflow

1. Frontend sends HTTP request with city name.
2. PHP fetches weather data using `file_get_contents()` or `cURL`.
3. Data is processed and returned to frontend as JSON.

---

## 🔌 Technologies Used

| Area         | Technology          |
|--------------|---------------------|
| Frontend     | HTML, CSS, JS       |
| Styling      | Bootstrap 5         |
| Backend      | PHP                 |
| API          | OpenWeatherMap API  |
| Dev Tools    | XAMPP (Apache + MySQL) |
| AI Support   | DeepSeek for code generation |

---

## ⚙️ Setup Instructions

1. Install XAMPP and run Apache & MySQL.
2. Clone this repo and move the `src/` folder into `htdocs/`.
3. Open `localhost/src/index.php` in your browser.
4. (Optional) Configure your API key in `config.php`.

---

## 🔍 Example API Request (Frontend to Backend)

```js
fetch('api/getWeather.php?city=Karachi')
  .then(response => response.json())
  .then(data => {
    // Update UI
  });

📝 Notes
We can replace OpenWeatherMap API with any free/public weather API.

All AI-generated code portions (via DeepSeek or GitHub Copilot) are commented.

✅ Deliverables in this Folder
File/Folder	Description
index.php	Main web page with Bootstrap-based UI
api/getWeather.php	PHP backend API for weather info
assets/css/	Stylesheets
assets/js/	JavaScript for AJAX and interactivity
config.php	Contains constants (e.g., API keys)
