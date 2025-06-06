<?php
// Start session (optional for future user features)
session_start();

// Include database connection
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }
        .weather-card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        .weather-icon {
            width: 100px;
            height: 100px;
        }
        #searchHistory {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">🌤️ Weather Dashboard</h1>
        
        <!-- Search Form -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" id="cityInput" class="form-control" placeholder="Enter city (e.g., London)" autocomplete="off">
                    <button id="searchBtn" class="btn btn-primary">Search</button>
                </div>
            </div>
        </div>

        <!-- Weather Display -->
        <div id="weatherResult" class="weather-card text-center d-none">
            <!-- Dynamic content will appear here -->
        </div>

        <!-- Error Display -->
        <div id="errorDisplay" class="alert alert-danger d-none"></div>

        <!-- Search History (PHP-powered) -->
        <div id="searchHistory" class="mt-5">
            <h4>Recent Searches</h4>
            <ul class="list-group">
                <?php
                // Display last 5 searches from database
                $sql = "SELECT DISTINCT city FROM searches ORDER BY search_time DESC LIMIT 5";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<li class="list-group-item clickable-city">' . htmlspecialchars($row['city']) . '</li>';
                    }
                } else {
                    echo '<li class="list-group-item">No searches yet</li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <!-- Bootstrap & jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Main JavaScript -->
    <script>
        $(document).ready(function() {
            // Handle search button click
            $('#searchBtn').click(fetchWeather);
            
            // Handle city click from history
            $('.clickable-city').click(function() {
                $('#cityInput').val($(this).text());
                fetchWeather();
            });

            // Handle Enter key
            $('#cityInput').keypress(function(e) {
                if (e.which == 13) {
                    fetchWeather();
                }
            });
        });

        async function fetchWeather() {
            const city = $('#cityInput').val().trim();
            
            if (!city) {
                showError("Please enter a city name!");
                return;
            }

            // Clear previous results
            $('#weatherResult').addClass('d-none');
            $('#errorDisplay').addClass('d-none');

            try {
                // Fetch weather data
                const weatherResponse = await fetch(`api/getWeather.php?city=${encodeURIComponent(city)}`);
                const weatherData = await weatherResponse.json();

                if (weatherData.cod !== 200) {
                    showError(weatherData.message || "City not found!");
                    return;
                }

                // Log successful search
                await logSearch(city);
                
                // Display weather
                displayWeather(weatherData);
                
            } catch (error) {
                showError("Failed to fetch weather data. Please try again.");
                console.error(error);
            }
        }

        function displayWeather(data) {
            const html = `
                <h2>${data.name}, ${data.sys.country}</h2>
                <img src="https://openweathermap.org/img/wn/${data.weather[0].icon}@2x.png" class="weather-icon">
                <h3>${Math.round(data.main.temp)}°C</h3>
                <p class="text-capitalize"><strong>${data.weather[0].description}</strong></p>
                <div class="row mt-4">
                    <div class="col-md-3">
                        <p>💧 Humidity: ${data.main.humidity}%</p>
                    </div>
                    <div class="col-md-3">
                        <p>🌬️ Wind: ${data.wind.speed} km/h</p>
                    </div>
                    <div class="col-md-3">
                        <p>☁️ Clouds: ${data.clouds.all}%</p>
                    </div>
                    <div class="col-md-3">
                        <p>🌡️ Feels like: ${Math.round(data.main.feels_like)}°C</p>
                    </div>
                </div>
            `;
            
            $('#weatherResult').html(html).removeClass('d-none');
        }

        async function logSearch(city) {
            try {
                await $.post('api/logSearch.php', { city: city });
            } catch (error) {
                console.error("Failed to log search:", error);
            }
        }

        function showError(message) {
            $('#errorDisplay').text(message).removeClass('d-none');
        }
    </script>
</body>
</html>