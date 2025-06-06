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
│ └── config.php # Database/API config and constants
└── db/ # (Optional) Database-related PHP files
└── connect.php # MySQL connection handler


---

## 🌐 Frontend Overview

- **File:** `index.php`  
- **Tech Stack:** HTML5, CSS3, Bootstrap 5, JavaScript (vanilla)  
- **Features:**  
  - Search weather by city name  
  - Display temperature, humidity, and condition icon  
  - Show a 3-day weather forecast  
  - Responsive design for desktop and mobile  

---

## 🔧 How It Works

1. User enters a city name in the search bar.  
2. JavaScript sends an AJAX request to `api/getWeather.php`.  
3. The backend fetches real-time weather data from an external API.  
4. Data is parsed and returned as JSON to the frontend.  
5. Frontend dynamically updates the UI with the weather information.

---

## 🔙 Backend Overview

- **Language:** PHP  
- **External API:** OpenWeatherMap API (or any other weather API)  
- **Key Files:**  
  - `getWeather.php`: Fetches and processes weather data.  
  - `config.php`: Contains API keys and other configuration constants.  
  - `connect.php` (optional): Handles MySQL database connection for caching or logging.

- **Response Format:** JSON

---

## 🔐 API Workflow

- Frontend sends HTTP requests with city names as query parameters.  
- Backend uses PHP functions (`file_get_contents()` or `cURL`) to retrieve weather data.  
- Backend processes and returns formatted JSON data to frontend.

---

## 🔌 Technologies Used

| Area      | Technology                 |
| --------- | --------------------------|
| Frontend  | HTML, CSS, JavaScript     |
| Styling   | Bootstrap 5               |
| Backend   | PHP                       |
| API       | OpenWeatherMap API        |
| Dev Tools | XAMPP (Apache + MySQL)    |
| AI Support| DeepSeek for code generation, GitHub Copilot |

---

## ⚙️ Setup Instructions

1. Install XAMPP and start Apache and MySQL services.  
2. Clone this repository.  
3. Place the `src/` folder inside `htdocs/` directory of XAMPP.  
4. Open `http://localhost/src/index.php` in your web browser.  
5. (Optional) Add your API key to `api/config.php`.  

---

## 🔍 Example API Request (Frontend to Backend)

```js
fetch('api/getWeather.php?city=London')
  .then(response => response.json())
  .then(data => {
    // Update UI elements with weather data here
  });

