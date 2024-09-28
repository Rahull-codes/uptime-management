<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Monitoring</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jersey+10&family=Libre+Caslon+Text:ital,wght@0,400;0,700;1,400&display=swap');

        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #000;
            /* Black background to match the theme */
            color: white;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Form container styling */
        .form-container {
            font-family: "Libre Caslon Text", serif;
            font-weight: 400;
            font-style: normal;
            -webkit-box-shadow: 10px -10px 22px -6px rgba(204, 196, 204, 1);
            -moz-box-shadow: 10px -10px 22px -6px rgba(204, 196, 204, 1);
            box-shadow: 10px -10px 22px -6px rgba(204, 196, 204, 1);
            background-color: #333;
            /* Dark background for the form */
            padding: 30px;
            border-radius: 15px;
            width: 400px;
            /* box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); */
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        .form-container h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #fff;
        }

        /* Input group styling */
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 18px;
            color: #bbb;
            /* Lighter label color */
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #555;
            /* Dark input background */
            color: white;
        }

        /* Button styling */
        button {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            background-color: #28a745;
            /* Neutral button color */
            border: none;
            border-radius: 10px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: darkgreen;
            /* Lighter color on hover */
        }

        /* Fade in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        .robot-section {
            position: relative;
            animation: float 2s infinite ease-in-out;
        }

        .robot {
            width: 250px;

        }

        .speech-bubble {
            position: absolute;
            top: 40px;
            left: 180px;
            background-color: white;
            color: black;
            padding: 10px;
            border-radius: 10px;
            font-size: 20px;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        #status-container {
            color: black;
        }


        /* Basic styling for the circle and status indicator */
        .status-indicator {
            display: flex;
            align-items: center;
            margin-top: 20px;

        }

        .circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
            background-color: #28a745 !important;
            /* Default color: green for up */
            animation: blink 1s infinite alternate;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0.7;
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="robot-section">
            <img src="robot1.png" alt="Robot" class="robot">
            <div class="speech-bubble">Hey!!</div>
        </div>
    </div>
    <!-- Form for user email and website URL -->
    <div class="form-container" id="form-container">
        <h2>Track Your Website</h2>

        <!-- Email input -->
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <!-- "URL to Monitor" Input -->
        <div class="input-group">
            <label for="monitor_url">URL to Monitor</label>
            <input type="url" id="monitor_url" name="monitor_url" placeholder="Enter the URL to monitor" required>
        </div>

        <button type="button" id="submitBtn">Submit</button>
    </div>

    <!-- Hidden content that shows after submission -->
    <div class="status-container" id="status-container" style="display: none;">
        <div class="status-box">
            <h2 id="submittedUrl">Website URL: </h2>

            <!-- Blinking green circle -->
            <div class="status-indicator">
                <div class="circle"></div>
                <span id="urlStatus">Up Status</span>
            </div>
            <p id="statusText">Status: Up</p>

            <!-- Countdown timer display -->
            <p>Next check in: <span id="timer">03:00</span></p>
            <p>Checked every three minutes</p>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#submitBtn').click(function () {
                const email = $('#email').val();
                const url = $('#monitor_url').val();

                if (!email || !url) {
                    alert("Please fill out both fields.");
                    return false;
                }

                // Hide the form and show the status section
                $('#form-container').hide();
                $('#status-container').show();
                $('#submittedUrl').text('Website URL: ' + url);

                // Send data via AJAX
                $.ajax({
                    url: 'process_alert.php',
                    method: 'POST',
                    data: {
                        email: email,
                        monitor_url: url
                    },
                    success: function (response) {
                        console.log(response);
                        if (response === 'success') {
                            checkWebsiteStatus(url);
                            startTimer(180); // Start the countdown for 3 minutes
                        } else {
                            alert('Error submitting data: ' + response);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('AJAX error:', error);
                    }
                });
            });
        });

        function checkWebsiteStatus(url) {
            fetch('check_status.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    'url': url
                })
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data);  // Log the response to check the format
                    if (data.status === "up") {
                        document.getElementById('urlStatus').textContent = 'Up Status';
                        document.getElementById('statusText').textContent = 'Status: Up';
                        document.querySelector('.circle').style.backgroundColor = '#28a745'; // Green
                    } else if (data.status === "down") {
                        document.getElementById('urlStatus').textContent = 'Down Status';
                        document.getElementById('statusText').textContent = 'Status: Down';
                        document.querySelector('.circle').style.backgroundColor = '#dc3545'; // Red
                    } else if (data.status === "invalid_url") {
                        document.getElementById('urlStatus').textContent = 'Invalid URL';
                        document.getElementById('statusText').textContent = data.message;
                        document.querySelector('.circle').style.backgroundColor = '#ffc107'; // Yellow
                    }
                }).catch(error => {
                    console.error('Error:', error);
                });

        }

        // Timer function to countdown from 3 minutes
        function startTimer(duration) {
            let timer = duration, minutes, seconds;
            const timerDisplay = $('#timer');

            const countdown = setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                timerDisplay.text(minutes + ":" + seconds);

                if (--timer < 0) {
                    clearInterval(countdown); // Stop the countdown when it reaches 0
                }
            }, 1000); // Update every second
        }

        // Function to send AJAX request to PHP to check website status again
        function checkWebsiteStatusAgain() {
            const url = document.getElementById('monitor_url').value; // Get the monitored URL

            // Send AJAX request to the backend
            fetch('check_status.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    'url': url
                })
            })
                .then(response => response.json())
                .then(data => {
                    // Handle the response, update UI, and start the timer again
                    if (data.status === 'down') {
                        // Handle down status (e.g., show alert, send email, etc.)
                        alert('The website is down!');
                    } else {
                        // Restart the timer for the next 3-minute interval
                        startTimer(180); // Start the 3-minute countdown again
                    }
                })
                .catch(error => console.error('Error checking website status:', error));
        }

        // Start the timer when the form is submitted
        document.getElementById('submitBtn').addEventListener('click', function () {
            startTimer(180); // Start the 3-minute timer on submit
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>