document.getElementById('weatherForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const city = document.getElementById('cityName').value;
    const apiKey = document.getElementById('apiKey').value;

    if (city && apiKey) {
        fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}`)
            .then(response => response.json())
            .then(data => {
                const weatherWidget = document.getElementById('weatherData');
                const temp = Math.round(data.main.temp - 273.15); // Converting Kelvin to Celsius
                const weatherDescription = data.weather[0].description;
                weatherWidget.innerHTML = `
                    <h2>Weather in ${city}</h2>
                    <p>${temp}°C</p>
                    <p>${weatherDescription}</p>
                `;
            })
            .catch(error => {
                console.error('Error fetching weather data:', error);
                weatherWidget.innerHTML = `<p>Error fetching weather data.</p>`;
            });
    } else {
        alert('Please enter both city name and API key.');
    }
});


// Email - Static Display (example)
const emailWidget = document.querySelector('.email');
emailWidget.innerHTML = `
    <h2>Email</h2>
    <p>No new emails</p>
`;

