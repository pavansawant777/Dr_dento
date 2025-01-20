 
 
?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            background: url('https://www.example.com/path/to/your/background-image.jpg') no-repeat center center fixed; /* Add background image */
            background-size: cover; /* Ensure the background image covers the entire page */
            color: #333; /* Change text color to a dark classic color */
        }

        /* Navigation Bar Styles */
        .nav-bar {
            background: rgba(0, 196, 204, 0.9); /* Add transparency to the navigation bar */
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease-in-out;
            animation: slideDown 0.5s ease-out;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .nav-bar:hover {
            background: rgba(0, 150, 150, 0.9); /* Add transparency to the navigation bar on hover */
            color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .nav-bar .logo {
            display: flex;
            align-items: center;
        }

        .nav-bar .logo img {
            height: 50px;
            margin-right: 10px;
            transition: all 0.3s ease-in-out;
        }

        .nav-bar .menu {
            display: flex;
            gap: 25px;
            font-weight: bold;
            position: relative;
        }

        .nav-bar .menu-item {
            position: relative;
        }

        .nav-bar .menu-item a {
            text-decoration: none;
            color: white; /* Change text color to white */
            padding: 5px 10px;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .nav-bar .menu-item a:hover {
            background-color: white;
            color: #00C4CC;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .nav-bar .dropdown {
            display: none;
            position: absolute;
            background-color: rgb(10, 9, 8);
            top: 110%;
            left: 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            padding: 10px 0;
            z-index: 1000;
            list-style: none;
        }

        .nav-bar .dropdown li {
            padding: 10px 20px;
            cursor: pointer;
            white-space: nowrap;
        }

        .nav-bar .dropdown li:hover {
            background-color: #00C4CC;
            color: rgb(255, 161, 161);
        }

        .nav-bar .menu-item:hover .dropdown {
            display: block;
        }

        .nav-bar .icons {
            display: flex;
            gap: 20px;
            font-size: 22px;
        }

        .nav-bar .icons span {
            position: relative;
            cursor: pointer;
            color: white; /* Change icon color to white */
        }

        .nav-bar .icons span:hover {
            color: #00C4CC;
        }

        .nav-bar .icons .cart-count {
            position: absolute;
            top: -5px;
            right: -10px;
            background-color: #00C4CC;
            color: rgb(128, 92, 92);
            font-size: 12px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Slider Styles */
        .slider-container {
            width: 100%;
            height: 100vh;
            display: flex;
            overflow: hidden;
            position: relative;
        }

        .slides {
            display: flex;
            width: 400%;
            height: 100%;
            transition: transform 0.5s ease-in-out;
        }

        .slide {
            width: 100%;
            height: 100vh;
            flex-shrink: 0;
            position: relative;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            animation: zoomIn 1s ease-in-out, fadeSlide 3s infinite;
        }

        @keyframes zoomIn {
            from {
                transform: scale(1.1);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes fadeSlide {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.7;
            }
        }

        .navigation {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .nav-button {
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            z-index: 100;
        }

        /* Product Section Styles */
        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards;
            text-align: center; /* Center align the title */
        }

        h1 {
            width: 100%;
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .product {
            background-color: rgba(255, 255, 255, 0.9); /* Add transparency to the product background */
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(20px);
            animation: fadeInUp 1s ease-out forwards;
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .product img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .product img:hover {
            transform: scale(1.1);
        }

        .product-info {
            margin-top: 10px;
        }

        .product h3, .product p, .product .price, .product .rating {
            color: #333; /* Change text color to dark classic color */
        }

        .product .price del {
            color: #aaa;
            font-size: 14px;
            margin-right: 10px;
        }

        .product button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .product button:hover {
            background-color: #1abc9c;
        }

        /* Animation keyframes */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Newly Launched Section */
        .newly-launched {
            display: flex;
            flex-wrap: wrap; /* Allows wrapping of items to the next line */
            justify-content: center; /* Center-align the products horizontally */
            gap: 20px; /* Spacing between products */
            padding: 20px;
            margin-top: 40px;
            background-color: rgba(255, 255, 255, 0.9); /* Add transparency to the section background */
        }

        .newly-launched h2 {
            width: 100%;
            text-align: center;
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        .newly-launched .product {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 300px; /* Fixed width for each product */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .video-section {
            text-align: center;
            margin-top: 50px;
            animation: fadeIn 2s ease-in-out;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9); /* Add transparency to the card background */
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 350px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 1s ease-out forwards;
        }

        .card img {
            width: 100%;
            height: auto;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .card img:hover {
            transform: scale(1.1);
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background: linear-gradient(90deg, rgba(0, 196, 204, 1) 0%, rgba(0, 150, 150, 1) 100%);
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background: linear-gradient(90deg, rgba(0, 150, 150, 1) 0%, rgba(0, 196, 204, 1) 100%);
            transform: scale(1.05);
        }

        /* Instagram Reels Section Styles */
        .instagram-reels {
            padding: 40px 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Add transparency to the section background */
            text-align: center;
        }

        .instagram-reels h2 {
            font-size: 28px;
            color: #333; /* Change text color to dark classic color */
            margin-bottom: 20px;
        }

        .reels-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .reel {
            width: 300px;
            height: 500px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .reel:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .reel iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Follow Us Section Styles */
        .follow-us {
            padding: 40px 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Add transparency to the section background */
            text-align: center;
        }

        .follow-us h2 {
            font-size: 28px;
            color: #333; /* Change text color to dark classic color */
            margin-bottom: 20px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-icons a {
            font-size: 24px;
            color: #333; /* Change icon color to dark classic color */
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #00C4CC;
        }

        /* Follow Us on Instagram Section Styles */
        .follow-us-instagram {
            padding: 40px 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Add transparency to the section background */
            text-align: center;
        }

        .follow-us-instagram h2 {
            font-size: 28px;
            color: #333; /* Change text color to dark classic color */
            margin-bottom: 20px;
        }

        .instagram-images {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .instagram-image {
            position: relative;
            width: 200px;
            height: 200px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .instagram-image:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .instagram-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .instagram-image:hover img {
            transform: scale(1.1);
        }

        .instagram-image .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 196, 204, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .instagram-image:hover .overlay {
            opacity: 1;
        }

        .instagram-image .overlay img {
            width: 50px;
            height: 50px;
            filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.5));
        }

        /* Dr. Dento Text Styles */
        .dr-dento-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 48px;
            font-weight: bold;
            color: #00C4CC;
            opacity: 0;
            animation: fadeInText 3s ease-in-out forwards;
        }

        @keyframes fadeInText {
            0% {
                opacity: 0;
                transform: translate(-50%, -50%) scale(0.5);
            }
            50% {
                opacity: 0.5;
                transform: translate(-50%, -50%) scale(1.1);
            }
            100% {
                opacity: 1;
                transform: translate(-50%, -50%) scale(1);
            }
        }
    </style>
</head>
<body>
    <!-- Dr. Dento Text -->
    <div class="dr-dento-text">Dr. Dento</div>

    <!-- Slider -->
    <div class="slider-container">
        <div class="slides" id="slides">
            <div class="slide">
                <img src="https://drdento.com/cdn/shop/files/Oil_Pulling_WB.jpg?v=1728369625&width=1880" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="https://drdento.com/cdn/shop/files/WBanner_2_1880X900_94d9a286-ad50-429f-8ae8-ccea6c569371.jpg?v=1730807761&width=1880" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="https://drdento.com/cdn/shop/files/Banner_1.png?v=1724331177&width=1880" alt="Slide 3">
            </div>
            <div class="slide">
                <img src="https://drdento.com/cdn/shop/files/Frame_2_1_86c735f6-8041-4734-b56c-7b4c8933c332.jpg?v=1730813846&width=1880" alt="Slide 4">
            </div>
        </div>
    </div>

    <!-- Product Category Section -->
    <div class="container">
        <h1>Product Category</h1>

        <!-- Product 1 -->
        <div class="product">
            <img src="https://drdento.com/cdn/shop/files/Group_134_1_570x.png?v=1707384442" alt="Product Image">
            <div class="product-info">
                <button class="add-to-cart">SHOP NOW</button>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="product">
            <img src="https://drdento.com/cdn/shop/files/honey-2_570x.png?v=1707294438" alt="Product Image">
            <div class="product-info">
                <button class="add-to-cart">SHOP NOW</button>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="product">
            <img src="https://drdento.com/cdn/shop/files/honey-3_570x.png?v=1707294437" alt="Product Image">
            <div class="product-info">
                <button class="add-to-cart">SHOP NOW</button>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="product">
            <img src="https://drdento.com/cdn/shop/files/Group_137_570x.webp?v=1708607676" alt="Product Image">
            <div class="product-info">
                <button class="add-to-cart">SHOP NOW</button>
            </div>
        </div>

        <!-- Product 5 -->
        <div class="product">
            <img src="https://drdento.com/cdn/shop/files/Oil_Pullling_Cover_570x.png?v=1728025699" alt="Product Image">
            <div class="product-info">
                <button class="add-to-cart">SHOP NOW</button>
            </div>
        </div>

          <!-- Product 2 -->
          <div class="product">
            <img src="https://drdento.com/cdn/shop/files/honey-2_570x.png?v=1707294438" alt="Product Image">
            <div class="product-info">
                <button class="add-to-cart">SHOP NOW</button>
            </div>
        </div>
        <!-- Product 6 -->
        <div class="product">
            <img src="https://drdento.com/cdn/shop/files/Brush_Head_Icon_7eb8b292-20ce-4f2c-a21a-99be0aa0847e_570x.png?v=1734760588" alt="Product Image">
            <div class="product-info">
                <button class="add-to-cart">SHOP NOW</button>
            </div>
        </div>
    </div>

    <!-- Video Section -->
    <div class="video-section" style="text-align:center; margin-top:50px;">
    <!-- Video Section -->
    <div class="video-section" style="text-align:center; margin-top:50px;">
        <video width="100%" height="auto" controls>
            <source src="https://youtu.be/o5tEJ-FeEYw" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Newly Launched Section -->
    <div class="container">
        <h1>Newly Launched</h1>
        <!-- Product 1 -->
        <div class="product">
            <img src="https://drdento.com/cdn/shop/files/Power_Pair_2_1066x.png?v=1723788295" 
     width="300" 
     height="400" />
            <h3>Pro Series Sonic Smart Electric Toothbrush (Rechargeable)</h3>
            <div class="rating">★★★★★</div>
            <p>Powered by Sonic Technology for 10X better cleaning!</p>
            <p class="price"><del>Rs. 2,999.00</del> Rs. 2,400.00</p>
            <button>Add To Cart</button>
        
           
        </div>
        
        <!-- Product 2 -->
        <div class="product">
            <img src="https://drdento.com/cdn/shop/files/Pro1_1066x.jpg?v=1721984704            " 
     width="300" 
     height="400" />
            <h3>Ultra Series Sonic Electric Toothbrush</h3>
            <div class="rating">★★★★★</div>
            <p>The Ultra features an interdental brush head for cleaning.</p>
            <p class="price">Rs. 1,099.00</p>
            <button>Add To Cart</button>
           
        </div>

        <!-- Product 3 -->
        <div class="product">
            <img src="https://drdento.com/cdn/shop/files/Travel_Pack_Banner_3_1066x.png?v=1723616247  " 
            width="300" 
            height="400" />
            <h3>Neo Series Sonic Electric Toothbrush</h3>
            <div class="rating">★★★★★</div>
            <p>The Neo series features soft DuPont W-shaped bristles.</p>
            <p class="price">Rs. 799.00</p>
            <button>Add To Cart</button>
            
        </div>
    </div>
   
    <div >
        <img src="https://m.media-amazon.com/images/S/aplus-media-library-service-media/0eafef36-ac27-45ac-9db8-b28a9a39a405.__CR0,0,970,600_PT0_SX970_V1___.png " 
        width="1600" 
        height="800" />
    </div>



    <title>Best Selling Products</title>
        <style>
          /* Scoped styles only for #best-sellers section */
          #best-sellers {
            margin: 40px 0;
            text-align: center;
          }
      
          #best-sellers h2 {
            font-size: 2rem;
            margin-bottom: 20px;
          }
      
          #best-sellers .products-container {
            display: flex;
            overflow-x: auto; /* Enable horizontal scrolling */
            gap: 20px; /* Space between products */
            padding: 10px;
            scroll-behavior: smooth; /* Smooth scrolling effect */
          }
      
          #best-sellers .products-container::-webkit-scrollbar {
            height: 8px;
          }
      
          #best-sellers .products-container::-webkit-scrollbar-thumb {
            background: #007bff;
            border-radius: 10px;
          }
      
          #best-sellers .products-container::-webkit-scrollbar-track {
            background: #f1f1f1;
          }
      
          #best-sellers .product {
            background-color: #fff;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 220px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            flex-shrink: 0; /* Prevent shrinking of products */
          }
      
          #best-sellers .product img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
          }
      
          #best-sellers .product h3 {
            font-size: 1.2rem;
            margin-bottom: 8px;
          }
      
          #best-sellers .product .price {
            font-size: 1rem;
            color: #333;
          }
      
          #best-sellers .product .discount {
            color: red;
            font-weight: bold;
          }
      
          #best-sellers .product .ratings {
            font-size: 0.9rem;
            color: #777;
            margin: 10px 0;
          }
      
          #best-sellers .product button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
          }
      
          #best-sellers .product button:hover {
            background-color: #0056b3;
          }
        </style>
      </head>
      <body>
        <div id="best-sellers">
          <h2>Spreading Smiles 💖       </h2>
          <div class="products-container">
            <div class="product">
              <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Travel_Pack_Banner_1.png?v=1723616247" />
              <h3>Oral care</h3>
              <p class="price">dipak k<span class="discount"></span></p>
              <div class="ratings">★★★★☆ (80 Reviews)</div>
              <p>A Refreshing and Effective Combo!
                This mouthwash is gentle on my gums and keeps my mouth feeling fresh for hours</p>
                         </div>
            <div class="product">
              <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Pro_Toothbrush_Cover.png?v=1722071273" />
              <h3>Pro Series Sonic Smart</h3>
              <p class="price">simran k<span class="discount"></span></p>
              <div class="ratings">★★★★☆ (60 Reviews)</div>
              <p>
                Very Good and Refreshing Combo
I’m so impressed with the Ultra toothbrush! It’s gentle yet powerful
              </p>
                         </div>
            <div class="product">
              <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/ultragreen_1_03a20149-d12f-4298-b165-0f74ca187ac2.png?v=1709889819" />
              <h3>Complete Oral Care...</h3>
              <p class="price">pavan G<span class="discount"></span></p>
              <div class="ratings">★★★★☆ (60 Reviews)</div>
              <p>A Refreshing and Effective Combo!
                This mouthwash is gentle on my gums and keeps my mouth feeling fresh for hours</p>
             
            </div>
            <div class="product">
              <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Untitled_design_15.png?v=1721647564" />
              <h3>Pro Complete care</h3>
              <p class="price">kumar G<span class="discount"></span></p>
              <div class="ratings">★★★☆☆ (30 Reviews)</div>
            <p>Very Good
                Toothpaste are nice and best flavours to try! Whitens teeth in some weeks</p>
            </div>
            <div class="product">
              <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Power_Pair1.png?v=1723788296" />
              <h3>Pro Clean Duo</h3>
              <p class="price">Shubham P <span class="discount"></span></p>
              <div class="ratings">★★★★★ (200 Reviews)</div>
              <p>Very Good
                Toothpaste are nice and best flavours to try! Whitens teeth in some weeks</p>
             
            </div>
            <div class="product">
              <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/neoblue_1.png?v=1706470704" />
              <h3>Neo Series Sonic</h3>
              <p class="price">Ravan das <span class="discount"></span></p>
              <div class="ratings">★★★★★ (300 Reviews)</div>
              <p>
                Very Good
Toothbhrush are nice and best to try! Whitens teeth in some weeks
              </p>
            </div>
          </div>
        </div>

        <div >
            <img src="https://drdento.com/cdn/shop/files/our-story-mobile.jpg?v=1674141383&width=750 " 
            width="1600" 
            height="600" />
        </div>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                animation: fadeIn 3s ease-in;
            }
    
            @keyframes fadeIn {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }
    
            .header {
                text-align: center;
                font-size: 50px;
                font-weight: bold;
                margin: 50px 0;
                animation: slideIn 1s ease-out;
            }
    
            @keyframes slideIn {
                from {
                    transform: translateY(-50px);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }
    
            .container {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                justify-content: center;
                padding: 40px;
            }
    
            .card {
                background: #f9f9f9;
                border: 1px solid #ddd;
                border-radius: 10px;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                align-items: center;
                max-width: 350px; /* Adjusted to make the cards smaller */
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                width: 100%;
                opacity: 0;
                transform: translateY(50px);
                animation: slideUp 0.5s ease-out forwards;
            }
    
            @keyframes slideUp {
                from {
                    opacity: 0;
                    transform: translateY(50px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
    
            .card img {
                width: 100%; 
                height: auto;
                object-fit: cover;
                transition: transform 0.3s ease;
            }
    
            .card:hover img {
                transform: scale(1.05);
            }
    
            .card-content {
                padding: 20px;
                width: 100%; 
                text-align: center;
            }
    
            .card-title {
                font-size: 24px; /* Adjusted title size */
                font-weight: bold;
                margin: 10px 0;
            }
    
            .card-description {
                font-size: 16px; /* Adjusted description size */
                color: #555;
                margin: 10px 0;
            }
    
            .btn {
                display: inline-block;
                text-decoration: none;
                color: #fff;
                background: #38b6ff;
                padding: 10px 20px; /* Adjusted button size */
                border-radius: 5px;
                text-align: center;
                transition: background 0.3s ease;
            }
    
            .btn:hover {
                background: #222a2e;
            }
    
            @media (max-width: 768px) {
                .card {
                    max-width: 100%; /* Cards will take full width on smaller screens */
                }
                .card-content {
                    width: 90%;
                }
            }
        </style>
    </head>
    <body>
    
        <div class="header">BEYOND THE WISDOM TEETH</div>
    
        <div class="container">
            <!-- Card 1 -->
            <div class="card">
                <img src="https://drdento.com/cdn/shop/articles/Healthy_DietIntro_720x.jpg?v=1733998593" alt="Diet Impacts Smile">
                <div class="card-content">
                    <div class="card-title">Impact of Diet on Oral Health: Foods That Help and Harm</div>
                    <div class="card-description">Did you know that your daily diet and oral health go hand in hand? While some foods can shield your smile by building up enamel or supporting gum health, others can lead to faster decay, potentially compromising your...</div>
                    <a href="#" class="btn">View Details</a>
                </div>
            </div>
    
            <!-- Card 2 -->
            <div class="card">
                <img src="https://drdento.com/cdn/shop/articles/Oil_Pulling_Blog_0_720x.png?v=1731405253" alt="Impact of Diet">
                <div class="card-content">
                    <div class="card-title">The Science Behind Oil Pulling: How It Works to Improve Oral Hygiene</div>
                    <div class="card-description">Did you know that a simple swish of oil could elevate your oral health routine? Oil pulling, a time-honored Ayurvedic practice, has become a popular method for enhancing oral hygiene. By swishing oil in your mouth, you can...</div>
                    <a href="#" class="btn">View Details</a>
                </div>
            </div>
    
            <!-- Card 3 -->
            <div class="card">
                <img src="https://drdento.com/cdn/shop/articles/Smile_Creative_720x.jpg?v=1730703963" alt="Oil Pulling">
                <div class="card-content">
                    <div class="card-title">Dr.Dento: Redefining Oral Care with Advanced Electric Toothbrushes</div>
                    <div class="card-description">The world of oral care has revolutionized a lot. We have experienced a significant shift from basic toothbrushes to smart toothbrushes. But the revolution doesn't end here. Today, even electric toothbrushes have the latest features, keeping oral health...</div>
                    <a href="#" class="btn">View Details</a>
                </div>
            </div>
        </div>
    
        <div class="container">
            <!-- Card 1 -->
            <div class="card">
                <img src="https://drdento.com/cdn/shop/articles/Toxic_blog_800_x_512_px_720x.png?v=1709200451" alt="Diet Impacts Smile">
                <div class="card-content">
                    <div class="card-title">Shift from Toxic to Organic</div>
                    <div class="card-description">It is no secret that the world around us is rampantly shifting from toxic to organic in every aspect of their lives! Starting from their diets, fashion choices, skincare products, personal care products, and even furnishing. This is...</div>
                    <a href="#" class="btn">View Details</a>
                </div>
            </div>
    
            <!-- Card 2 -->
            <div class="card">
                <img src="https://drdento.com/cdn/shop/articles/Bristles_blog_800_x_512_px_720x.png?v=1708605260" alt="Impact of Diet">
                <div class="card-content">
                    <div class="card-title">The Science Behind Oil Pulling: How It Works to Improve Oral Hygiene</div>
                    <div class="card-description">Did you know that a simple swish of oil could elevate your oral health routine? Oil pulling, a time-honored Ayurvedic practice, has become a popular method for enhancing oral hygiene. By swishing oil in your mouth, you can...</div>
                    <a href="#" class="btn">View Details</a>
                </div>
            </div>
    
            <!-- Card 3 -->
            <div class="card">
                <img src="https://drdento.com/cdn/shop/articles/Blogforevm_720x.png?v=1721799941" alt="Oil Pulling">
                <div class="card-content">
                    <div class="card-title">Manual or Electric Toothbrushes: Which one to use?</div>
                    <div class="card-description">Can you believe that the first modern-day toothbrush was invented way back in 1780 by William Addis! His initial design only consisted of a handle that was carved from cow bone attached with pig bristles. We have...</div>
                    <a href="#" class="btn">View Details</a>
                </div>
            </div>
        </div>

        <!-- Follow Us on Instagram Section -->
        <div class="follow-us-instagram">
            <h2>Follow Us on Instagram</h2>
            <div class="instagram-images">
                <div class="instagram-image">
                    <img src="https://d355puud9fjvtt.cloudfront.net/dr-dento-test.myshopify.com/3525819260934174231_image_1" alt="Instagram Image 1">
                    <div class="overlay">
                        <img src="https://img.freepik.com/free-vector/instagram-background-gradient-colors_23-2147823814.jpg?semt=ais_hybrid" alt="Instagram Logo">
                    </div>
                </div>
                <div class="instagram-image">
                    <img src="https://d355puud9fjvtt.cloudfront.net/dr-dento-test.myshopify.com/3531677864900973629_image_1" alt="Instagram Image 2">
                    <div class="overlay">
                        <img src="https://img.freepik.com/free-vector/instagram-background-gradient-colors_23-2147823814.jpg?semt=ais_hybrid" alt="Instagram Logo">
                    </div>
                </div>
                <div class="instagram-image">
                    <img src="https://d355puud9fjvtt.cloudfront.net/dr-dento-test.myshopify.com/3493234573166609575_image_1" alt="Instagram Image 3">
                    <div class="overlay">
                        <img src="https://img.freepik.com/free-vector/instagram-background-gradient-colors_23-2147823814.jpg?semt=ais_hybrid" alt="Instagram Logo">
                    </div>
                </div>
                <div class="instagram-image">
                    <img src="https://d355puud9fjvtt.cloudfront.net/dr-dento-test.myshopify.com/3479388392280894783_image_1" alt="Instagram Image 4">
                    <div class="overlay">
                        <img src="https://img.freepik.com/free-vector/instagram-background-gradient-colors_23-2147823814.jpg?semt=ais_hybrid" alt="Instagram Logo">
                    </div>
                </div>
                <div class="instagram-image">
                    <img src="https://d355puud9fjvtt.cloudfront.net/dr-dento-test.myshopify.com/3531677864900973629_image_1" alt="Instagram Image 2">
                    <div class="overlay">
                        <img src="https://img.freepik.com/free-vector/instagram-background-gradient-colors_23-2147823814.jpg?semt=ais_hybrid" alt="Instagram Logo">
                    </div>
                </div>
                <div class="instagram-image">
                    <img src="https://d355puud9fjvtt.cloudfront.net/dr-dento-test.myshopify.com/3506944690012739269_image_1" alt="Instagram Image 2">
                    <div class="overlay">
                        <img src="https://img.freepik.com/free-vector/instagram-background-gradient-colors_23-2147823814.jpg?semt=ais_hybrid" alt="Instagram Logo">
                    </div>
                </div>
            </div>
        </div>

        
    <script>
        var currentIndex = 0;

        function moveSlider() {
            const slides = document.getElementById("slides");
            const totalSlides = document.querySelectorAll(".slide").length;
            currentIndex = (currentIndex + 1) % totalSlides;
            slides.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        setInterval(moveSlider, 3000);
    </script>
    <?php include 'footer.php';?>
</body>
</html>
