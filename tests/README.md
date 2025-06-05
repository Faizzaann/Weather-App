# 🧪 WeatherApp – Testing Overview

This folder contains the test scripts, reports, and documentation related to the testing phase of the WeatherApp. Testing ensures the functionality, reliability, and usability of both frontend and backend components.

---

## 🧠 AI Tools Used for Testing

| Tool       | Purpose                                  |
|------------|------------------------------------------|
| Testim     | Generated and ran frontend UI test cases |
| ChatGPT    | Helped write PHP unit test cases         |
| DeepSeek   | Suggested improvements and test logic    |

---

## 🧪 Types of Testing Performed

### ✅ Functional Testing (Frontend)
- **Tools**: Testim AI
- **Tests**:
  - City input field accepts valid/invalid input.
  - Weather information loads correctly after search.
  - UI updates correctly after API call.

### ⚙️ API Testing (Backend)
- **Tools**: Postman, ChatGPT
- **Tests**:
  - `getWeather.php` returns valid JSON.
  - Handles invalid or missing `city` parameter.
  - Response includes required fields: temperature, humidity, condition.

### 🔄 Integration Testing
- **Tests**:
  - Frontend and backend communicate correctly via AJAX.
  - Application handles slow or failed API responses gracefully.

### 👁️ Manual UI Testing
- **Devices**: Desktop, tablet, mobile browsers
- **Browsers**: Chrome, Firefox, Edge
- **Tests**:
  - Layout responsiveness.
  - Button actions and form submissions.
  - Display of forecast results.

---

## 📝 Test Results

| Test Case                             | Status   |
|--------------------------------------|----------|
| Valid city input                     | ✅ Pass   |
| Invalid city name                    | ✅ Pass   |
| API returns valid weather data       | ✅ Pass   |
| API handles missing `city` param     | ✅ Pass   |
| UI updates after AJAX call           | ✅ Pass   |
| Layout responsive on mobile/tablet   | ✅ Pass   |

---

## 🧪 Sample Test Case (Functional – Frontend)

```javascript
Test("Search for Weather", async () => {
  await click("Search");
  await type("input[name='city']", "Karachi");
  await click("button[type='submit']");
  await waitForText("Temperature", 5000);
});


🔄 How to Run Tests
Open Postman and test http://localhost/src/api/getWeather.php?city=London

Use Testim CLI or dashboard to run frontend test cases.

Manually verify layout and weather display on different screen sizes.


| File Name              | Description                            |
| ---------------------- | -------------------------------------- |
| `test-results.md`      | Test logs and outputs                  |
| `postman-tests.json`   | Postman collection for backend testing |
| `ui-tests.testim.json` | Auto-generated test cases by Testim    |
