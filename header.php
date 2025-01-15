<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar with Dropdown</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    .navbar {
      background-color: black;
    }
    .navbar-brand, .nav-link {
      color: rgb(248, 242, 242) !important;
    }
    .time-box {
      color: black;
      background-color: rgb(238, 243, 243);
      border: 1px solid #ccc;
      padding: 10px 15px;
      border-radius: 5px;
      text-align: center;
    }
    .time-container {
      display: flex;
      gap: 10px;
      justify-content: center;
    }
    #shopNowBtn {
      background-color: #2ab9a4;
      border-radius: 10px;
      margin-right: 70%;
    }
    .slider-container {
      background-color: #2ab9a4;
      padding: 10px 0;
      overflow: hidden;
    }
    .slider-item {
      font-size: 1.2rem;
      font-weight: bold;
      color:rgb(240, 242, 245);
      text-align: center;
    }
    .secondary-navbar {
      background-color: #f8f9fa;
      padding: 10px 0;
      
    }
    .secondary-navbar .nav-link {
      color: #212529 !important;
      font-size: 1.2rem; 
      margin-left: 30px;
      font-weight:bold;
    }
    .secondary-navbar .nav-link:hover {
      text-decoration: underline;
      text-decoration: bold;
      
    }
    .contact-us-link {
      margin-right: 80px; /* Ensures proper margin for Contact Us */
    }

    .icon-container {
      display: flex;             /* Arrange icons in a row */
      align-items: center;       /* Vertically center the icons */
      gap: 40px;                 /* Space between the icons */
      margin-left: 50px;      /* Push icons to the right */
      margin-right:20px;
    }

    .icon-container a {
      color: #212529;            /* Default icon color */
      font-size: 1.5rem;         /* Icon size */
    }

    .icon-container a:hover {
      color: #07dae1;            /* Icon color on hover */
    }
    .navbar .dropdown-toggle::after {
  display: none !important;
  
}



    .navbar .dropdown-divider {
  width: 80%; /* Adjust the width (percentage or pixel value) */
  margin: 5px auto; /* Center the divider and add spacing */
  border-width: 2px; /* Adjust the thickness */
  border-color: #07dae1; /* Change the color of the divider */
    }

      /* Additional Styles for Sidebar */
      .sidebar {
      position: fixed;
      top: 0;
      right: -100%; /* Hidden initially */
      width: 300px;
      height: 100%;
      background-color: #ffffff;
      color: #fff;
      padding: 20px;
      box-shadow: -2px 0 5px rgba(0, 0, 0, 0.5);
      transition: right 0.4s ease;
      z-index: 1050; /* Higher than the content */
    }

    .sidebar.active {
      right: 0; /* Slide-in effect */
    }

    .overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1040; /* Below the sidebar */
    }

    .overlay.active {
      display: block;
    }

    .sidebar h2 {
      font-size: 1.5rem;
      text-align: center;
      margin-bottom: 20px;
      color: black;
    }

    .sidebar form .form-group {
      margin-bottom: 15px;
    }

    .sidebar .btn-primary {
      width: 100%;
    }

    /* Align the icons properly */
    .icon-container {
      display: flex;
      gap: 20px;
    }

    .icon-container a {
      font-size: 1.5rem;
      color: #212529;
    }

    .icon-container a:hover {
      color: #07dae1;
    }
    
   /* General Button Styles */
   .login-btn {
    width: 100%;
    background-color: #2ab9a4;
    color: #fff;
    border: none;
    padding: 10px;
    font-weight: bold;
    margin-bottom: 10px;
    cursor: pointer;
    text-align: center;
    transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition */
    box-shadow: 0px 6px 12px rgba(2,1,1); /* Intensified  shadow on hover */
    margin-top: 10px;
  }

  /* Hover Effect for Login Button */
  .login-btn:hover {
    background-color: #fff; /* Change background to white */
    color: #2ab9a4;       /* Change text color */
    border: 1px solid  black; /* Optional border for highlighting */
    box-shadow: 0px 6px 12px rgba(42,185,164); /* Intensified shadow on hover */
  }

  /* General Button Styles */
  .btn-secondary {
    width: 100%;
    background-color:white;
    border-color: black; 
    color: black;
    border: 2px solid black; /* Border with color */
    padding: 10px;
    font-weight: bold;
    margin-bottom: 10px;
    cursor: pointer;
    text-align: center;
    transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition */
    box-shadow: 0px 6px 12px rgba(42,185,164); /* Intensified blue shadow on hover */
    margin-top: 10px;
  }

  /* Hover Effect for Login Button */
  .btn-secondary:hover {
    background-color: black; /* Change background to white */
    color: #2ab9a4;       /* Change text color */
    border: 1px solid  black; /* Optional border for highlighting */
    border-color: #0056b3; 
    box-shadow: 0px 6px 12px rgba(2,1,1); /* Intensified  shadow on hover */
  }
  </style>

</head>
<body>
  <!-- Top Navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Build Your Own Box @599</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="row w-100 align-items-center">
          <div class="col-12 col-md-6">
            <div class="time-container">
              <div class="time-box">
                <div id="hours">00</div>
                <div class="time-label">Hours</div>
              </div>
              <div class="time-box">
                <div id="minutes">00</div>
                <div class="time-label">Minutes</div>
              </div>
              <div class="time-box">
                <div id="seconds">00</div>
                <div class="time-label">Seconds</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 text-center text-md-end mt-3 mt-md-0">
            <button class="btn btn-primary" id="shopNowBtn">Shop Now</button>
          </div>
         
        </div>
      </div>
    </div>
  </nav>

  <!-- Slider -->
  <div class="slider-container">
    <div class="slider">
      <div class="slider-item">Free Surprise Gift On All Orders</div>
      <div class="slider-item">SUPER SALE-UP TO 25% OFF on all orders!</div>
      <div class="slider-item">Extra 5% Off on Prepaid Orders</div>
    </div>
  </div>

  <!-- Secondary Navigation bar -->
  <nav class="secondary-navbar navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://drdento.com/cdn/shop/files/Dr._Dento_with_Black_R_370x.png?v=1720175907" alt="logo" width="150" height="60">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#secondaryNavbar" aria-controls="secondaryNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="secondaryNavbar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarShop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Shop
  </a>
  <ul class="dropdown-menu" aria-labelledby="navbarShop">
    <li>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/All_Products.svg?v=1724476997" alt="Shop 1 Logo" width="30" height="30" class="me-2">
        <span>All</span>
      </a>
    </li>
    <li><hr class="dropdown-divider"></li>
    <li>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Toothbrush.svg?v=1724476997" alt="Shop 2 Logo" width="30" height="30" class="me-2">
        <span>Electric Toothbrush</span>
      </a>
    </li><li><hr class="dropdown-divider"></li>
    <li>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Toothpaste.svg?v=1724476998" alt="Shop 3 Logo" width="30" height="30" class="me-2">
        <span>Toothpast</span>
      </a>
    </li><li><hr class="dropdown-divider"></li>
    <li>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Mouthwash.svg?v=1724476997" alt="Shop 4 Logo" width="30" height="30" class="me-2">
        <span>MouthWash</span>
      </a>
    </li><li><hr class="dropdown-divider"></li>
    <li>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Oil_Pulling.svg?v=1728890421" alt="Shop 5 Logo" width="30" height="30" class="me-2">
        <span>Oil Pulling</span>
      </a>
    </li><li><hr class="dropdown-divider"></li>
    <li>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Combo.svg?v=1728890421" alt="Shop 6 Logo" width="30" height="30" class="me-2">
        <span>Combos</span>
      </a>
    </li><li><hr class="dropdown-divider"></li>
    <li>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Brush_Head.svg?v=1726818322" alt="Shop 7 Logo" width="30" height="30" class="me-2">
        <span>BrushHeads</span>
      </a>
    </li>
  </ul>
</li>

<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarByob" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    BYOB
  </a>
  <ul class="dropdown-menu" aria-labelledby="navbarByob">
  <li>
      <a class="nav-link dropdown-toggle" href="#">
        <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/All_Products.svg?v=1724476997" alt="Shop 1 Logo" width="30" height="30" class="me-2">
        <span>All</span>
      </a>
    </li>
    <li><a class="dropdown-item" href="#">BYOB@599</a></li>
    <li><a class="dropdown-item" href="#">BYOB@799</a></li>
    <li><a class="dropdown-item" href="#">BYOB@999</a></li>
    <li><a class="dropdown-item" href="#">BYOB@1299</a></li>
    <li><a class="dropdown-item" href="#">BYOB@1999</a></li>
    
  </ul>
</li>

          <li class="nav-item">
            <a class="nav-link" href="#">Our Story</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link contact-us-link" href="#">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
     <!-- Add icons inside the navbar -->
     <div class="icon-container">
            <a href="search.html"><i class="fa fa-magnifying-glass"></i></a> <!-- Search Icon -->
            <a href="#" id="loginIcon"><i class="fa fa-user"></i></a>
            <a href="likes.html"><i class="fa fa-heart"></i></a> <!-- Like Icon -->
            <a href="cart.html"><i class="fa fa-cart-shopping"></i></a> <!-- Cart Icon -->
          </div>

           <!-- Sidebar for Login Form -->
<div id="sidebar" class="sidebar" style="background-color: white; padding: 20px; color: #fff; width: 300px; border-radius: 10px;">
  <h2 style="text-align: center; margin-bottom: 20px;">Login</h2>
  <form>
    <div class="form-group" style="margin-bottom: 15px;">
      <label for="email" style="font-weight: bold; display: block; color: black;">Email Address</label>
      <input type="email" class="form-control" id="email" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" placeholder="Enter email">
    </div>
    <div class="form-group" style="margin-bottom: 15px;">
      <label for="password" style="font-weight: bold; display: block; color: black;">Password</label>
      <input type="password" class="form-control" id="password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-primary login-btn">Login</button>
    <div class="form-group d-flex justify-content-between" style="margin-bottom: 15px; font-size: 0.9em;">
      <a href="#" style="color: black; text-decoration: underline; margin-top: 10px;">Forgot Your Password?</a>
    </div>
    
    <button type="button" class="btn btn-secondary">Create an Account</button>
  </form>
</div>


  <!-- Overlay -->
  <div id="overlay" class="overlay"></div>
  </nav>

  <script>
    function updateTime() {
      const now = new Date();
      document.getElementById('hours').innerHTML = String(now.getHours()).padStart(2, '0');
      document.getElementById('minutes').innerHTML = String(now.getMinutes()).padStart(2, '0');
      document.getElementById('seconds').innerHTML = String(now.getSeconds()).padStart(2, '0');
    }
    setInterval(updateTime, 1000);
    updateTime();
  </script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.slider').slick({
        autoplay: true,         
        autoplaySpeed: 2000,    
        arrows: false,          
        dots: false,            
        infinite: true,         
        slidesToShow: 1,        
        slidesToScroll: 1,      
        speed: 1000,            
        vertical: false,        
      });
    });
  </script>

  <!-- Scripts -->
  <script>
    const loginIcon = document.getElementById('loginIcon');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    // Show the sidebar and overlay when the login icon is clicked
    loginIcon.addEventListener('click', () => {
      sidebar.classList.add('active');
      overlay.classList.add('active');
    });

    // Hide the sidebar and overlay when clicking outside
    overlay.addEventListener('click', () => {
      sidebar.classList.remove('active');
      overlay.classList.remove('active');
    });
  </script>

  
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
