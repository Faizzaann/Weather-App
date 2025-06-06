# 🧪 Weather Application Testing Strategy

This directory contains the testing strategy, test cases, and execution guide for the Weather Application. All tests are executed using **Blackbox AI**.

---

## 📋 Testing Overview

| Test Type         | Description                                                                 | Files Involved                   | Tool Used    |
|-------------------|-----------------------------------------------------------------------------|----------------------------------|--------------|
| ✅ Unit Testing    | Tests individual PHP functions/methods in isolation                         | `getWeather.php`, `logSearch.php` | Blackbox AI  |
| 🔗 Integration     | Tests communication between modules and APIs                                | PHP APIs ↔ Database / Weather API | Blackbox AI  |
| 🌐 End-to-End      | Simulates full user flow through frontend and backend                       | `index.php`, APIs                | Blackbox AI  |
| 👁️ Visual Testing | Verifies presence and correctness of UI elements (basic DOM assertions)    | `index.php`                      | Blackbox AI  |

---

## 🧠 Step-by-Step Guide to Perform Testing

### 1. 🚀 Set Up Testing Environment

1. **Install Blackbox AI**  
   Download and install from the official documentation. Ensure PHP, Apache (XAMPP), and MySQL are set up.

2. **Configure Project**
   - Open Blackbox AI and create a new project.
   - Set the Base URL: `http://localhost/weather-app/`
   - Install any required dependencies (e.g., PHP extensions).

3. **Import Test Scripts**
   - Copy all test scripts into the test directory of your Blackbox AI project.
   - Make sure all functions/classes are included and formatted correctly.

---

### 2. 🧪 Run Tests

1. **Execute Scripts**
   - Open the test directory in Blackbox AI.
   - Select test scripts to run (or select all).
   - Click **Run** to start execution.

2. **Monitor Results**
   - Watch the console for real-time logs.
   - Check for error messages, stack traces, or failed assertions.

---

### 3. 📈 Review Test Reports

1. **View Reports**
   - After execution, navigate to the **Reports** tab in Blackbox AI.
   - Reports include: status (passed/failed), execution time, and logs.

2. **Analyze Results**
   - Identify common failures and patterns.
   - Take notes on bugs, performance issues, or unexpected behavior.

3. **Document Findings**
   - Create bug reports or developer tasks.
   - Share findings with your team to collaborate on fixes.

---

## 📝 Example Test Scripts

describe('Weather App - Special Characters Handling', () => {
    it('should handle city names with special characters', async () => {
        await browser.url('http://yourappurl/index.php');
        await $('#cityInput').setValue('São Paulo');
        await $('#searchBtn').click();
        const weatherResult = await $('#weatherResult');
        await weatherResult.waitForDisplayed();
        expect(await weatherResult.getText()).toContain('São Paulo');
    });
});

### Unit Test Example: `getWeather.php`
function testGetWeatherNoCity() {
  $_GET['city'] = '';
  ob_start();
  include '../api/getWeather.php';
  $output = ob_get_clean();
  $response = json_decode($output, true);
  assert($response['status'] === 'error');
}

### #End-to-End Test Example:
function testEndToEndValidCitySearch() {
  $city = 'London';
  $response = file_get_contents("http://localhost/weather-app/api/getWeather.php?city=$city");
  $data = json_decode($response, true);
  assert(isset($data['temperature']));
  assert($data['city'] === 'London');
}

----

💡 Additional Tips

Continuous Integration: Integrate Blackbox AI with your CI/CD pipeline for automated testing.
Keep Tests Updated: Update scripts when adding new features or changing logic.
Collaboration: Share reports and feedback with your team to address issues quickly.


