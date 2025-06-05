# 🎨 WeatherApp – Design Documentation

This folder includes all design-related elements of the WeatherApp project. The design phase was heavily supported using DeepSeek AI, which helped us generate UI layouts, system diagrams, and architecture decisions efficiently.

---

## 🧠 AI Tool Used: DeepSeek

- DeepSeek was used to:
  - Generate responsive frontend layouts using HTML, CSS, Bootstrap inside `index.php`.
  - Create backend PHP code for API requests, weather data processing, and database interaction.
  - Suggest modular design structure for PHP files.
  - Create flowcharts and system architecture designs.

---

## 🖼️ UI Wireframe Overview

> Designed and suggested by **DeepSeek**

- **Single-page layout using `index.php`**:
  - Search box for entering city name
  - Weather display card (city, temperature, humidity, icons)
  - Forecast section (e.g., 3-day view or hourly)
  - Responsive UI using Bootstrap grid

📁 *Include Screenshots:*
- `/design/wireframes/ui-wireframe.png`
- `/design/wireframes/mobile-view.png`

---

## 🧱 System Architecture (PHP + Web API)

> Diagram generated with DeepSeek & refined manually

### Components:

- **Frontend (`index.php`)**:
  - Combines HTML, CSS, JS, and Bootstrap
  - Sends AJAX request to backend PHP API

- **Backend (PHP APIs)**:
  - Receives request from frontend
  - Fetches data from OpenWeatherMap API
  - Stores/query data in MySQL via XAMPP
  - Sends response as JSON back to frontend

- **Database (XAMPP - MySQL)**:
  - Stores location history, cache data, or search logs

📁 *Include Diagrams:*
- `/design/diagrams/system-architecture.png`
- `/design/diagrams/frontend-backend-flow.png`

---

## 🔄 Data Flow Diagram

1. User enters city name in `index.php`.
2. JavaScript sends an AJAX request to backend PHP API.
3. PHP backend fetches weather data from external Web API.
4. PHP optionally logs or stores data in MySQL DB.
5. Response is returned to frontend in JSON format.
6. JavaScript displays weather data dynamically in UI.

📁 *Include Screenshot:*
- `/design/diagrams/data-flow.png`

---

## 📁 Included Files in `/design/`

| File Path                              | Description                            |
|----------------------------------------|----------------------------------------|
| wireframes/ui-wireframe.png            | Frontend layout wireframe              |
| wireframes/mobile-view.png             | Mobile view of weather display         |
| diagrams/system-architecture.png       | System architecture (PHP + Web API)    |
| diagrams/frontend-backend-flow.png     | Flow between frontend and backend      |
| diagrams/data-flow.png                 | Data flow from input to display        |

---

## 📌 Notes

- PHP backend ensures safe handling of API keys and database interactions.
- AJAX is used in frontend to ensure smooth user experience without page reloads.
- DeepSeek improved the design accuracy and reduced manual effort significantly.


