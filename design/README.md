# 🎨 WeatherApp – Design Documentation

This folder contains the UI design, wireframes, and architecture diagrams for the WeatherApp project. All designs were created using **Figma**.

---

## 🛠️ Design Tool Used: Figma

- Figma was used to:
  - Create responsive UI wireframes for the weather app
  - Design system architecture diagrams
  - Visualize the frontend-backend interaction
  - Create data flow diagrams for better understanding of communication

---

## 🖼️ UI Wireframe Overview

> Created in Figma to visualize the layout of the application interface.

- **Main Components**:
  - Search bar to enter city name
  - Weather info card showing city, temperature, humidity, icon
  - Forecast section (e.g., 3-day weather)
  - Responsive layout using Bootstrap grid

📁 *Figma Files/Screenshots:*
- `/design/wireframes/main-ui-wireframe.png`
- `/design/wireframes/mobile-ui-wireframe.png`

---

## 🧱 System Architecture Diagram

> Designed in Figma to show how the components interact within the system.

### Key Components:

- **Frontend (`index.php`)**
  - User interface built with HTML, CSS, Bootstrap, and JS
  - Sends AJAX requests to backend PHP API

- **Backend (PHP APIs)**
  - Receives requests and fetches data from a weather API
  - Processes and returns results in JSON
  - Stores data in MySQL via XAMPP if needed

- **Database (MySQL using XAMPP)**
  - Stores user queries, cached weather info, etc.

📁 *Diagram Screenshots:*
- `/design/diagrams/system-architecture.png`
- `/design/diagrams/frontend-backend-communication.png`

---

## 🔄 Data Flow Diagram

1. User inputs city name in the frontend.
2. JavaScript sends an AJAX call to the backend API.
3. PHP backend fetches data from external weather API.
4. Backend processes and sends JSON response.
5. JavaScript updates the UI dynamically with results.

📁 *Include Screenshot:*
- `/design/diagrams/data-flow.png`

---

## 📁 Folder Contents

| File Path                                   | Description                                 |
|---------------------------------------------|---------------------------------------------|
| wireframes/main-ui-wireframe.png            | Main screen layout for desktop              |
| wireframes/mobile-ui-wireframe.png          | Mobile screen layout                        |
| diagrams/system-architecture.png            | Backend and frontend interaction overview   |
| diagrams/frontend-backend-communication.png | Request/response flow between PHP and JS    |
| diagrams/data-flow.png                      | End-to-end data processing flow             |

---

## 🔎 Summary

- All design assets were created with Figma to streamline visualization and communication.
- Wireframes helped in planning a responsive and user-friendly layout.
- System and data flow diagrams guided the implementation of backend and frontend logic.
