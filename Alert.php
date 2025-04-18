<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🔔Alerts | FarmForecast</title>
    <link rel="stylesheet" href="alert.css">
</head>
<body>
    <header>
        <h1>Smart Agricultural Alerts</h1>
        <p>Stay ahead with real-time notifications for your farming operations</p>
    </header>
    
    <div class="container">
        <div class="dashboard">
            <div>
                <div class="panel">
                    <h2 class="panel-title">
                        Current Conditions
                        <div id="notification-bell">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <div class="notification-badge">3</div>
                        </div>
                    </h2>
                    
                    <div class="weather-card">
                        <div style="font-size: 24px;">Punjab, Phagwara</div>
                        <div style="font-size: 16px;" id="current-date">Wednesday, April 16, 2025</div>
                        <div class="temperature" id="current-temp">72°F</div>
                        <div style="font-size: 18px;">Partly Cloudy</div>
                        
                        <div class="weather-details">
                            <div class="weather-detail">
                                <div class="detail-value" id="current-humidity">45%</div>
                                <div class="detail-label">Humidity</div>
                            </div>
                            <div class="weather-detail">
                                <div class="detail-value" id="current-precipitation">0%</div>
                                <div class="detail-label">Precipitation</div>
                            </div>
                            <div class="weather-detail">
                                <div class="detail-value" id="current-wind">8 mph</div>
                                <div class="detail-label">Wind</div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 style="margin: 20px 0 10px 0;">5-Day Forecast</h3>
                    <div class="forecast-days" id="forecast-container">
                        <!-- Forecast days will be generated by JavaScript -->
                    </div>
                </div>
                
                <div class="panel">
                    <h2 class="panel-title">Farm Profile</h2>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" id="location" value="Sacramento Valley, CA">
                    </div>
                    <div class="form-group">
                        <label for="field-size">Field Size</label>
                        <input type="text" id="field-size" value="120 acres">
                    </div>
                    <div class="form-group">
                        <label for="crop-type">Primary Crop</label>
                        <select id="crop-type">
                            <option value="corn" selected>Corn</option>
                            <option value="wheat">Wheat</option>
                            <option value="soybean">Soybean</option>
                            <option value="rice">Rice</option>
                            <option value="alfalfa">Alfalfa</option>
                            <option value="tomatoes">Tomatoes</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="soil-type">Soil Type</label>
                        <select id="soil-type">
                            <option value="loam" selected>Loam</option>
                            <option value="clay">Clay</option>
                            <option value="sandy">Sandy</option>
                            <option value="silt">Silt</option>
                            <option value="clay-loam">Clay Loam</option>
                        </select>
                    </div>
                    
                    <button id="update-profile-btn">Update Profile</button>
                </div>
                
                <div class="panel">
                    <h2 class="panel-title">Alert Settings</h2>
                    <div class="settings-group">
                        <span class="settings-label">Frost Alerts</span>
                        <label class="toggle-switch">
                            <input type="checkbox" id="frost-alerts" checked>
                            <span class="toggle-slider"></span>
                        </label>
                    </div>
                    <div class="settings-group">
                        <span class="settings-label">Drought Conditions</span>
                        <label class="toggle-switch">
                            <input type="checkbox" id="drought-alerts" checked>
                            <span class="toggle-slider"></span>
                        </label>
                    </div>
                    <div class="settings-group">
                        <span class="settings-label">Planting Windows</span>
                        <label class="toggle-switch">
                            <input type="checkbox" id="planting-alerts" checked>
                            <span class="toggle-slider"></span>
                        </label>
                    </div>
                    <div class="settings-group">
                        <span class="settings-label">Pest & Disease</span>
                        <label class="toggle-switch">
                            <input type="checkbox" id="pest-alerts" checked>
                            <span class="toggle-slider"></span>
                        </label>
                    </div>
                    <div class="settings-group">
                        <span class="settings-label">Extreme Weather</span>
                        <label class="toggle-switch">
                            <input type="checkbox" id="weather-alerts" checked>
                            <span class="toggle-slider"></span>
                        </label>
                    </div>
                    <div class="settings-group">
                        <span class="settings-label">SMS Notifications</span>
                        <label class="toggle-switch">
                            <input type="checkbox" id="sms-notifications" checked>
                            <span class="toggle-slider"></span>
                        </label>
                    </div>
                    <div class="settings-group">
                        <span class="settings-label">Email Reports</span>
                        <label class="toggle-switch">
                            <input type="checkbox" id="email-notifications" checked>
                            <span class="toggle-slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            
            <div>
                <div class="panel" id="alerts-panel">
                    <h2 class="panel-title">Active Alerts</h2>
                    <ul class="alerts-list" id="alerts-list">
                        <!-- Alerts will be generated by JavaScript -->
                    </ul>
                </div>
                
                <div class="panel">
                    <h2 class="panel-title">Crop Status</h2>
                    <div style="display: flex; margin-bottom: 20px;">
                        <div style="flex: 1;">
                            <img src="Corn image.jpg" alt="Corn field" class="crop-image">
                        </div>
                        <div style="flex: 1; padding-left: 20px;">
                            <h3>Corn - V6 Growth Stage</h3>
                            <p class="crop-info">Planted: March 25, 2025</p>
                            <p class="crop-info">Estimated Harvest: September 10, 2025</p>
                            <p class="crop-info">Growing Degree Days: 512 GDD</p>
                            
                            <div style="margin-top: 15px;">
                                <div style="display: flex; justify-content: space-between;">
                                    <span>Growth Progress</span>
                                    <span>30%</span>
                                </div>
                                <div class="progress-container">
                                    <div class="progress-bar" style="width: 30%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3>Current Conditions</h3>
                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin-top: 15px;">
                        <div style="text-align: center;">
                            <div>Soil Temperature</div>
                            <div style="font-size: 24px; font-weight: 500;">62°F</div>
                            <span class="badge badge-optimal">Optimal</span>
                        </div>
                        <div style="text-align: center;">
                            <div>Soil Moisture</div>
                            <div style="font-size: 24px; font-weight: 500;">28%</div>
                            <span class="badge badge-caution">Moderate</span>
                        </div>
                        <div style="text-align: center;">
                            <div>Growth Rate</div>
                            <div style="font-size: 24px; font-weight: 500;">+2.1"/wk</div>
                            <span class="badge badge-optimal">Normal</span>
                        </div>
                    </div>
                </div>
                
                <div class="panel">
                    <h2 class="panel-title">Planting Windows</h2>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-top: 15px;">
                        <div style="padding: 15px; border-radius: 8px; background-color: #e8f5e9; border-left: 4px solid #4caf50;">
                            <h3>Corn</h3>
                            <p><strong>Optimal Window:</strong> Mar 15 - Apr 30</p>
                            <p><strong>Status:</strong> <span class="badge badge-optimal">In Progress</span></p>
                            <p><strong>Soil Temperature:</strong> 62°F (Target: >55°F)</p>
                            <p><strong>Days Remaining:</strong> 14</p>
                        </div>
                        
                        <div style="padding: 15px; border-radius: 8px; background-color: #e0f7fa; border-left: 4px solid #00acc1;">
                            <h3>Soybeans</h3>
                            <p><strong>Optimal Window:</strong> May 1 - Jun 15</p>
                            <p><strong>Status:</strong> <span class="badge badge-caution">Coming Soon</span></p>
                            <p><strong>Soil Temperature:</strong> 62°F (Target: >60°F)</p>
                            <p><strong>Days Until Start:</strong> 16</p>
                        </div>
                        
                        <div style="padding: 15px; border-radius: 8px; background-color: #fff8e1; border-left: 4px solid #ffb300;">
                            <h3>Winter Wheat</h3>
                            <p><strong>Optimal Window:</strong> Oct 1 - Nov 15</p>
                            <p><strong>Status:</strong> <span class="badge badge-warning">Months Away</span></p>
                            <p><strong>Current Phase:</strong> Off-season</p>
                            <p><strong>Days Until Start:</strong> 168</p>
                        </div>
                        
                        <div style="padding: 15px; border-radius: 8px; background-color: #f3e5f5; border-left: 4px solid #9c27b0;">
                            <h3>Cover Crops</h3>
                            <p><strong>Optimal Window:</strong> Sep 1 - Oct 15</p>
                            <p><strong>Status:</strong> <span class="badge badge-warning">Months Away</span></p>
                            <p><strong>Current Phase:</strong> Off-season</p>
                            <p><strong>Days Until Start:</strong> 138</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Set current date
            const currentDate = new Date();
            document.getElementById('current-date').textContent = currentDate.toLocaleDateString('en-US', { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            });
            
            // Generate 5-day forecast
            const forecastContainer = document.getElementById('forecast-container');
            const days = ['Thu', 'Fri', 'Sat', 'Sun', 'Mon'];
            const weatherIcons = ['☀️', '⛅', '☁️', '🌧️', '⛈️'];
            const temps = [75, 78, 68, 65, 70];
            
            days.forEach((day, index) => {
                const dayElement = document.createElement('div');
                dayElement.className = 'forecast-day';
                dayElement.innerHTML = `
                    <div class="day-name">${day}</div>
                    <div style="font-size: 24px;">${weatherIcons[index]}</div>
                    <div class="day-temp">${temps[index]}°F</div>
                `;
                forecastContainer.appendChild(dayElement);
            });
            
            // Generate alerts
            const alerts = [
                {
                    type: 'frost',
                    title: 'Overnight Frost Risk',
                    message: 'Temperatures expected to drop to 32°F overnight. Consider protecting sensitive crops.',
                    time: 'Today, 8:15 AM',
                    icon: '❄️'
                },
                {
                    type: 'drought',
                    title: 'Moderate Drought Alert',
                    message: 'Rainfall 35% below average for the season. Consider adjusting irrigation schedules.',
                    time: 'Yesterday, 3:42 PM',
                    icon: '☀️'
                },
                {
                    type: 'planting',
                    title: 'Optimal Corn Planting Window',
                    message: 'Soil temperature and moisture levels optimal for corn planting in the next 14 days.',
                    time: 'Yesterday, 9:20 AM',
                    icon: '🌱'
                },
                {
                    type: 'pest',
                    title: 'Corn Rootworm Risk Increasing',
                    message: 'Monitoring indicates increasing corn rootworm populations. Scout fields and consider treatment options.',
                    time: 'Apr 14, 11:30 AM',
                    icon: '🐛'
                },
                {
                    type: 'weather',
                    title: 'Heavy Rain Expected',
                    message: 'Heavy rainfall forecast for Apr 18-19. Expect 1.5-2" of precipitation which may affect field operations.',
                    time: 'Apr 14, 8:05 AM',
                    icon: '🌧️'
                }
            ];
            
            const alertsList = document.getElementById('alerts-list');
            
            alerts.forEach(alert => {
                const alertElement = document.createElement('li');
                alertElement.className = `alert-item ${alert.type}-alert`;
                
                alertElement.innerHTML = `
                    <div class="alert-icon ${alert.type}-icon">${alert.icon}</div>
                    <div class="alert-content">
                        <div class="alert-title">${alert.title}</div>
                        <div class="alert-message">${alert.message}</div>
                        <div class="alert-time">${alert.time}</div>
                        <div class="alert-actions">
                            <button class="alert-button">Mark as Read</button>
                            <button class="alert-button">More Details</button>
                        </div>
                    </div>
                `;
                
                alertsList.appendChild(alertElement);
            });
            
            // Simulate dynamic content
            const simulateChanges = () => {
                // Update current temperature randomly
                const tempElement = document.getElementById('current-temp');
                let currentTemp = parseInt(tempElement.textContent);
                currentTemp += Math.floor(Math.random() * 3) - 1; // Random change between -1 and +1
                tempElement.textContent = `${currentTemp}°F`;
                
                // Update humidity randomly
                const humidityElement = document.getElementById('current-humidity');
                let currentHumidity = parseInt(humidityElement.textContent);
                currentHumidity += Math.floor(Math.random() * 5) - 2; // Random change between -2 and +2
                currentHumidity = Math.max(30, Math.min(80, currentHumidity)); // Keep between 30% and 80%
                humidityElement.textContent = `${currentHumidity}%`;
                
                // Update wind randomly 
                const windElement = document.getElementById('current-wind');
                let currentWind = parseInt(windElement.textContent);
                currentWind += Math.floor(Math.random() * 3) - 1; // Random change between -1 and +1
                currentWind = Math.max(3, Math.min(15, currentWind)); // Keep between 3 and 15 mph
                windElement.textContent = `${currentWind} mph`;
            };
            
            // Simulate changes every 8 seconds
            setInterval(simulateChanges, 8000);
            
            // Add new alert randomly
            setTimeout(() => {
                const newAlerts = [
                    {
                        type: 'planting',
                        title: 'Soil Moisture Optimal',
                        message: 'Current soil moisture levels ideal for seed germination. Consider accelerating planting schedule.',
                        time: 'Just now',
                        icon: '💧'
                    },
                    {
                        type: 'frost',
                        title: 'Frost Warning Update',
                        message: 'Forecasted overnight low reduced to 35°F. Frost risk downgraded but still monitor sensitive crops.',
                        time: 'Just now',
                        icon: '❄️'
                    }
                ];
                
                const randomAlert = newAlerts[Math.floor(Math.random() * newAlerts.length)];
                const alertElement = document.createElement('li');
                alertElement.className = `alert-item ${randomAlert.type}-alert`;
                
                alertElement.innerHTML = `
                    <div class="alert-icon ${randomAlert.type}-icon">${randomAlert.icon}</div>
                    <div class="alert-content">
                        <div class="alert-title">${randomAlert.title}</div>
                        <div class="alert-message">${randomAlert.message}</div>
                        <div class="alert-time">${randomAlert.time}</div>
                        <div class="alert-actions">
                            <button class="alert-button">Mark as Read</button>
                            <button class="alert-button">More Details</button>
                        </div>
                    </div>
                `;
                
                alertsList.insertBefore(alertElement, alertsList.firstChild);
                
                // Update notification count
                const notificationBadge = document.querySelector('.notification-badge');
                notificationBadge.textContent = parseInt(notificationBadge.textContent) + 1;
            }, 5000);

            // Handle mark as read buttons
            document.addEventListener('click', function(e) {
                if (e.target.classList.contains('alert-button') && e.target.textContent === 'Mark as Read') {
                    const alertItem = e.target.closest('.alert-item');
                    alertItem.style.opacity = '0.5'; // Mark as read by reducing opacity

                    // Update notification count
                    const notificationBadge = document.querySelector('.notification-badge');
                    notificationBadge.textContent = parseInt(notificationBadge.textContent) - 1;
                }
            });
        });
    </script>
</body>
</html>