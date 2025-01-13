<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>/* Sidebar Styles */
.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  top: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.8); /* Transparent background */
  overflow-x: hidden;
  transition: 0.3s ease;
  padding-top: 60px;
  display: none; /* Initially hidden */
  z-index: 9999; /* Ensure it appears over content */
}

/* Sidebar content styling */
.sidebar-content {
  width: 250px;
  padding: 15px;
  background-color: white;
  border-radius: 10px;
}

/* Close button styling */
.btn-close {
  position: absolute;
  right: 20px;
  top: 10px;
  background: transparent;
  border: none;
  font-size: 1.5rem;
}

/* Make sure the login form is centered */
.sidebar-content form {
  display: flex;
  flex-direction: column;
}

/* Sidebar toggle (login icon) adjustment */
#openLoginSidebar {
  cursor: pointer;
}
</style>
</head>

  
<body>
  <!-- Sidebar for Login Form -->
<div id="loginSidebar" class="sidebar">
  <div class="sidebar-content">
    <button id="closeSidebar" class="btn btn-close">X</button>
    <h2>Login Form</h2>
    <form action="login.php" method="post">
      <div class="mb-3">
        <label for="username" class="form-label">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</div>

<script>
  // Open sidebar
document.getElementById('openLoginSidebar').addEventListener('click', function() {
  document.getElementById('loginSidebar').style.width = '250px';
  document.getElementById('loginSidebar').style.display = 'block'; // Show the sidebar
  document.body.style.backgroundColor = 'rgba(0, 0, 0, 0.5)'; // Dim background when sidebar is open
});

// Close sidebar
document.getElementById('closeSidebar').addEventListener('click', function() {
  document.getElementById('loginSidebar').style.width = '0';
  document.getElementById('loginSidebar').style.display = 'none';
  document.body.style.backgroundColor = ''; // Reset background color
});

// Close sidebar if clicked outside
window.addEventListener('click', function(event) {
  if (event.target == document.getElementById('loginSidebar')) {
    document.getElementById('loginSidebar').style.width = '0';
    document.getElementById('loginSidebar').style.display = 'none';
    document.body.style.backgroundColor = '';
  }
});
</script>
</body>
</html>