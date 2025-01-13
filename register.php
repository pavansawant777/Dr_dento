 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
 </head>
 <body>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Page with Sidebar</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
  <style>
    /* Basic styling for body and page layout */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    /* Sidebar styling */
    .sidebar {
      position: fixed;
      top: 0;
      left: -250px; /* Hidden by default */
      width: 250px;
      height: 100%;
      background-color: #333;
      color: white;
      padding: 20px;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
      transition: left 0.3s ease-in-out;
    }

    .sidebar.active {
      left: 0; /* Slide in when active */
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .sidebar a {
      display: block;
      color: white;
      text-decoration: none;
      padding: 10px 15px;
      border-radius: 5px;
      margin: 10px 0;
      transition: background 0.3s ease;
    }

    .sidebar a:hover {
      background-color: #575757;
    }

    /* Sidebar toggle button */
    .toggle-btn {
      position: absolute;
      top: 20px;
      left: 20px;
      font-size: 1.5rem;
      cursor: pointer;
      color: white;
      background-color: #333;
      border: none;
      padding: 10px;
      border-radius: 5px;
      z-index: 1000;
    }

    /* Main content */
    .main-content {
      margin-left: 0;
      padding: 20px;
      transition: margin-left 0.3s ease-in-out;
    }

    .main-content.shifted {
      margin-left: 250px; /* Shifted when sidebar is open */
    }

    .overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 999;
    }

    .overlay.active {
      display: block;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div id="sidebar" class="sidebar">
    <h2>Sidebar Menu</h2>
    <a href="#"><i class="fas fa-home"></i> Home</a>
    <a href="#"><i class="fas fa-info-circle"></i> About</a>
    <a href="#"><i class="fas fa-envelope"></i> Contact</a>
    <a href="#"><i class="fas fa-cog"></i> Settings</a>
  </div>

  <!-- Overlay -->
  <div id="overlay" class="overlay"></div>

  <!-- Sidebar Toggle Button -->
  <button id="toggle-btn" class="toggle-btn"><i class="fas fa-bars"></i></button>

  <!-- Main Content -->
  <div id="main-content" class="main-content">
    <h1>Welcome to the Page with a Sidebar</h1>
    <p>This is the main content of the page. Click the toggle button to open or close the sidebar.</p>
  </div>

  <script>
    // JavaScript for sidebar toggle functionality
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggle-btn');
    const overlay = document.getElementById('overlay');
    const mainContent = document.getElementById('main-content');

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('active');
      mainContent.classList.toggle('shifted');
      overlay.classList.toggle('active');
    });

    overlay.addEventListener('click', () => {
      sidebar.classList.remove('active');
      mainContent.classList.remove('shifted');
      overlay.classList.remove('active');
    });
  </script>
</body>
</html>

 </body>
 </html>