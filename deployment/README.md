# 🚀 WeatherApp – Deployment & Maintenance

This folder contains files and configurations related to deployment, CI/CD automation, and system monitoring for the WeatherApp project.

---

## 🔧 Tools Used

| Tool             | Purpose                                                |
|------------------|--------------------------------------------------------|
| GitHub Actions   | Automate build and deployment steps                    |
| DeepSeek         | AI-generated deployment scripts and optimization tips  |
| XAMPP            | Local development environment with Apache & MySQL      |

---

## 🚀 Deployment Workflow

### 📁 Step 1: Environment Setup
- **XAMPP** is installed for local server hosting.
- PHP files are placed in `htdocs/WeatherApp/`.
- MySQL used for storing user and weather logs (if applicable).

### 📁 Step 2: Directory Structure
- `index.php` → Main frontend interface
- `/api/getWeather.php` → Backend API for weather data
- `/assets/` → JS, CSS, and images
- `/db/` → SQL scripts for database setup

### 🔁 Step 3: CI/CD with GitHub Actions
- A GitHub Actions workflow file is created: `.github/workflows/deploy.yml`
- Every push to `main` branch triggers:
  - Code linting
  - Deployment build
  - Test suite execution

### 🛠️ Sample GitHub Actions Workflow

```yaml
name: Deploy PHP WeatherApp

on:
  push:
    branches: [ "main" ]

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
      - name: Checkout Repository
        uses: actions/checkout@v3

      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: '8.2'

      - name: Run PHP Linter
        run: php -l src/index.php

      - name: Simulate Deployment (Local Only)
        run: echo "Deploy to local server using XAMPP"

