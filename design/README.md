# 🎨 Design Overview

This directory contains all design-related documentation and diagrams for the Weather App project. It covers both user interface layout planning and system architecture visualization.

---

## 🛠 Tools Used

- **Figma**: Used to draw UI wireframes and system architecture diagrams.
- **ChatGPT**: Assisted in planning layout structure and technical design.
- **Figma AI**: Helped in generating responsive components and refining visual structure.

---

## 🖼️ UI Wireframe Diagram

### Purpose:
To provide a visual blueprint of the app’s user interface across devices (desktop and mobile).

### Components Included:
- **Search Bar** – for users to enter city names.
- **Weather Information Card** – displays city, temperature, humidity, and weather icon.
- **Forecast Section** – shows a multi-day (e.g., 3-day or 5-day) weather forecast.
- **Responsive Layout** – built using Bootstrap grid concepts to adapt to different screen sizes.

This wireframe helps align development with user expectations and ensures a clean, functional layout before coding begins.

---

## 🧱 System Architecture Diagram

### Purpose:
To illustrate how frontend, backend, API, and database components interact within the Weather App system.

### Key Layers:
- **Frontend (HTML, CSS, JS, Bootstrap)**:
  - User interface is rendered in `index.php`.
  - Uses AJAX to send city/location input to backend.

- **Backend (PHP APIs)**:
  - Accepts requests, queries external weather API.
  - Returns formatted JSON data.
  - Optionally saves data to a local MySQL database.

- **Database (MySQL via XAMPP)**:
  - Used for storing user queries or caching frequent API responses.

- **Data Flow**:
  - Frontend ↔ Backend (PHP) ↔ Weather API & MySQL Database

---

## 📁 Design Deliverables

- UI Wireframe Diagram (desktop and mobile layouts)
- System Architecture Diagram
- Frontend-Backend Communication Diagram
- Design Notes explaining layout decisions and component flow
