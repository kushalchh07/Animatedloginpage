<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Forecast</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .container {
            padding: 80px 20px 20px 20px; /* Adjust padding to keep space for the navbar */
            text-align: center;
        }
        .hourly-forecast {
            margin-top: 20px;
        }
        .forecast-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
        .search-box {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="homepage.php">Home</a>
        <a href="hourlyforecast.php">Get Hourly Forecast</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class="container">
        <h1>Weather Forecast</h1>
        <div class="search-box">
            <input type="text" id="cityInput" placeholder="Enter city name">
            <button onclick="getWeather()">Get Weather</button>
        </div>
        <div id="weatherInfo" class="weather-info">
            <!-- Weather information will be displayed here -->
        </div>
        <!-- <div id="hourlyForecast" class="hourly-forecast">
            Hourly forecast information will be displayed here
        </div> -->
    </div>
    
    <script src="script.js"></script>
</body>
</html>

