<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <!-- Sidebar Container -->
  <div class="sidebar vh-100 bg-light p-3" id="sidebar">
    <div class="card shadow-2-strong" style="border-radius: 1rem;">
      <div class="card-body p-4 ">
        <h3 class="mb-4">Sign in</h3>
        <div class="form-outline mb-3">
        <label class="form-label" for="typeEmailX-2">Email Address</label>
          <input type="email" id="typeEmailX-2" class="form-control form-control-sm" />
          
        </div>
        <div class="form-outline mb-3">
        <label class="form-label" for="typePasswordX-2">Password</label>
          <input type="password" id="typePasswordX-2" class="form-control form-control-sm" />
         
        </div>
        <button class="btn btn-primary btn-sm btn-block w-100 mb-3" type="submit">Login</button>
        <div class="text"><a class="auth-link link link-underline" href="/account/login#recover">
            <span class="text">Forgot your password?</span></a></div>
       
        <hr class="my-3">
       
       
       
        <button class="btn btn-sm btn-block w-100 create-account-btn" type="submit">
  Create An Account
</button>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div id="main-content">
    <!-- Add main page content here -->
    <button class="btn btn-secondary mt-3 ms-3" id="toggle-sidebar">Login</button>
  </div>

  <!-- CSS -->
  <style>
    .sidebar {
      position: fixed;
      top: 0;
      right: -300px;
      width: 300px;
      max-width: 100%;
      transition: right 0.3s ease-in-out;
    }

    .sidebar.active {
      right: 0;
    }

    #main-content {
      transition: margin-right 0.3s ease-in-out;
    }

    #main-content.sidebar-active {
      margin-right: 300px;
    }
    <style>
  /* Style for 'Create An Account' button */
  .create-account-btn {
    background-color: white;
    color: black;
    border: 1px solid black;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .create-account-btn:hover {
    background-color: black;
    color: white;
    border: 1px solid white;
    box-shadow: 0 4px 6px #2ab9a4; /* Red shadow for hover effect */
  }
</style>

  </style>

  <!-- JavaScript -->
  <script>
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('toggle-sidebar');
    const mainContent = document.getElementById('main-content');

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('active');
      mainContent.classList.toggle('sidebar-active');
    });
  </script>
</body>
</html>
