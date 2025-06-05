# 📘 WeatherApp – Documentation

This repository contains all documentation related to the **Planning & Requirements Phase** of the WeatherApp project. It outlines functional and non-functional requirements, user stories, AI tool usage, project planning, and effort estimation.

---

## 🧠 AI & Project Management Tools Used in Planning Phase

| Tool             | Purpose                                                                 |
|------------------|-------------------------------------------------------------------------|
| ChatGPT          | Generated functional/non-functional requirements, user stories, and task planning. |
| GitHub Projects  | Used for Kanban board with columns: `To Do`, `In Progress`, `Done`.     |
| Jira (Story Points) | Assigned story points, prioritized tasks, estimated team effort using Planning Poker. |
| Asana (Optional) | Alternative for task list-based management.                             |
| Figma            | UI wireframe design (in progress).                                      |

---

## ✅ Functional Requirements

- Users can search weather by entering a city name.
- Users can get weather based on current geolocation.
- Display weather details: temperature, humidity, pressure, wind speed.
- Show 5-day weather forecast with icons and daily breakdowns.
- Responsive UI design for both desktop and mobile.

---

## ⚙️ Non-Functional Requirements

- App should respond in under 2 seconds.
- Must support at least 500 concurrent users.
- Ensure 99.9% system uptime.
- Provide accurate data from OpenWeatherMap API.
- Compatibility with modern browsers (Chrome, Firefox, Edge, Safari).

---

## 🧾 User Stories with Jira Estimations

| ID   | As a...         | I want to...                         | So that...                           | Story Points | Priority |
|------|------------------|--------------------------------------|--------------------------------------|--------------|----------|
| US1  | Visitor          | Search weather by city               | I can know the weather elsewhere     | 3 SP         | High     |
| US2  | Traveler         | Get weather based on my location     | I can prepare for local weather      | 5 SP         | High     |
| US3  | General user     | View a 5-day forecast                | I can plan upcoming days             | 5 SP         | Medium   |
| US4  | Mobile user      | Access the app on mobile devices     | I can use it on the go               | 2 SP         | High     |
| US5  | Developer        | Deploy and maintain the app easily   | I can ensure uptime and fixes        | 8 SP         | Medium   |

> 🧩 *Story Points estimated via Jira Planning Poker during sprint planning sessions.*

---

## 🧭 Project Timeline & Milestones

| Phase       | Task                              | Tool(s) Used            | Status         |
|-------------|-----------------------------------|--------------------------|----------------|
| Planning    | Requirement gathering             | ChatGPT                  | ✅ Complete     |
| Planning    | User stories & effort estimation  | ChatGPT, Jira            | ✅ Complete     |
| Design      | Wireframes, UI layout             | Figma                    | ⏳ In Progress  |
| Development | Core coding with AI pair programming | DeepSeek, VS Code     | ⏳ In Progress  |
| Testing     | Test script generation            | Testim, Applitools       | 🔜 Upcoming     |
| Deployment  | CI/CD setup & monitoring          | GitHub Actions, Datadog  | 🔜 Upcoming     |

---

## 📊 Why Jira for Story Points?

- 📈 Visual sprint boards with **burndown charts**.
- ⏳ Estimation using Agile **story points (1–13 scale)**.
- 🤝 **Collaborative Planning Poker** during sprint planning.
- 📅 Clear sprint goals & developer workload estimation.

---

## 🧩 Notes & Insights

- ChatGPT greatly accelerated requirement drafting and saved planning time.
- Jira made task complexity and planning transparent with visual story point tracking.
- Team discussions refined AI-generated estimates for greater accuracy.
- Using **GitHub Projects + Jira** gave both technical and management visibility.

---

