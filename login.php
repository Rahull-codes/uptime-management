<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spline Background with Animation</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden;
      font-family: Arial, sans-serif;
    }

    /* Fullscreen Spline Background */
    .spline-background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    /* Example content */
    .content {
      position: relative;
      z-index: 1;
      color: white;
      text-align: center;
      padding-top: 40vh;
      font-size: 2rem;
    }

    /* Button Style */
    .start-button {
      margin-top: 20px;
      background-color: rgba(0, 0, 0, 0.7);
      border: none;
      padding: 10px 20px;
      font-size: 1.2rem;
      color: white;
      cursor: pointer;
      border-radius: 8px;
    }

    .start-button:hover {
      background-color: rgba(255, 255, 255, 0.2);
      color: black;
    }
  </style>
</head>
<body>

  <!-- Spline Viewer as Background -->
  <spline-viewer class="spline-background" url="https://prod.spline.design/mJePA6P0afqm0qSQ/scene.splinecode"></spline-viewer>

  <!-- Example Content -->
  <div class="content">
    <h1>TRACK YOUR SITE</h1>
    <button class="start-button" onclick="navigateToNextPage()">Start Now</button>
  </div>

  <!-- Spline Viewer Module -->
  <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.28/build/spline-viewer.js"></script>

  <!-- JavaScript to handle button click -->
  <script>
    function navigateToNextPage() {
      window.location.href = "Homepage.php";  // You can replace "next-page.html" with your actual URL
    }
  </script>
</body>
</html>