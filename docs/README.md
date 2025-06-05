📘 WeatherApp – Documentation
This folder contains all documentation related to the Planning & Requirements Phase of the WeatherApp project. It outlines functional and non-functional requirements, user stories, AI tool usage, project planning, and effort estimation.

🧠 AI & Project Management Tools Used in Planning Phase
Tool	Purpose
ChatGPT	Generated functional/non-functional requirements, drafted user stories, assisted with role/task planning.
GitHub Projects	Kanban board with "To Do", "In Progress", "Done" columns for SDLC tracking.
Jira (Effort Estimation Focus)	Used to assign story points, prioritize tasks, and estimate team effort.
Asana (Alternative)	Can be used for teams preferring task lists over boards.
Figma	Designing UI wireframes (in progress).

✅ Functional Requirements
Users can search weather by entering a city name.

Users can get weather based on current geolocation.

Display weather details: temperature, humidity, pressure, wind speed.

Provide 5-day forecast with visual breakdowns.

UI must be responsive for both desktop and mobile.

⚙️ Non-Functional Requirements
Response time under 2 seconds.

Handle at least 500 concurrent users.

Ensure 99.9% uptime.

Use accurate weather data via OpenWeatherMap API.

Cross-browser compatibility with modern browsers.

🧾 User Stories with Jira Estimations
ID	As a...	I want to...	So that...	Story Points	Priority
US1	Visitor	Search weather by city	I can know the weather elsewhere	3 SP	High
US2	Traveler	Get weather based on my location	I can prepare for local weather	5 SP	High
US3	General user	View a 5-day forecast	I can plan upcoming days	5 SP	Medium
US4	Mobile user	Access the app on mobile devices	I can use it on the go	2 SP	High
US5	Developer	Easily deploy and maintain the app	I can ensure uptime and fixes	8 SP	Medium

📌 Story Points were estimated using Jira Planning Poker, based on team consensus during sprint planning.

🧭 Project Timeline & Milestones
Phase	Task	Tool(s) Used	Status
Planning	Requirement gathering	ChatGPT	✅ Complete
Planning	User stories & effort estimation	ChatGPT, Jira	✅ Complete
Design	Wireframes, UI layout	Figma	⏳ In Progress
Development	Core coding & AI pair programming	DeepSeek, VS Code	⏳ In Progress
Testing	Test script generation	Testim, Applitools	🔜 Upcoming
Deployment	CI/CD & monitoring setup	GitHub Actions, Datadog	🔜 Upcoming

📊 Why Jira for Story Points?
📈 Visual sprint boards with burndown charts.

⏳ Estimation using Agile story points (1–13 scale).

🤝 Collaborative Planning Poker feature.

📅 Helps define clear sprint goals and developer workload balance.

🧩 Notes & Insights
ChatGPT accelerated requirements drafting and saved hours during planning.

Story points made task complexity more transparent in Jira's sprint board.

AI tools improved initial effort breakdown, but team discussion refined final estimations.

Using GitHub Projects alongside Jira gave both technical and management clarity.
