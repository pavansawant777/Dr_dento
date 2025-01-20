
<?php include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oil pulling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            overflow-x:hidden;
        }
        .header {
            background-color: #d5f3ff;
            text-align: center;
            padding: 20px;
            position: relative;
        }
        .header h1 {
            font-size: 28px;
            color: #00274d;
        }
        .header p {
            font-size: 18px;
            color: #003d73;
            margin: 10px 0;
        }
        .header .highlights {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 20px;
        }
        .header .highlights div {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 16px;
            color: #005d89;
        }
        .header .highlights img {
            width: 48px; /* Increase image size */
            height: 48px;
        }
        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            opacity: 0;
            animation: fadeIn 2s ease-out forwards;
        }
        .product {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(20px);
            animation: slideUp 1s ease-out forwards;
        }
        .product h3 {
            font-size: 18px;
            color: #333;
        }
        .product p {
            font-size: 14px;
            color: #666;
        }
        .product .price {
            font-size: 18px;
            color: #ff4d4d;
            margin: 10px 0;
        }
        .product .price del {
            color: #aaa;
            font-size: 14px;
            margin-right: 10px;
        }
        .product .rating {
            color: #1abc9c;
            font-size: 16px;
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
        .features {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }
        .features img {
            width: 32px; /* Increase image size */
            height: 32px;
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
    </style>
</head>
<body>
    <div class="header">
        <h1></h1>
        <div >
            <img src="https://drdento.com/cdn/shop/files/WBanner_1_1880X900_5a3e913b-0c3a-4307-940e-060866aa3ee4.jpg?v=1730808274&width=1880    " 
            width="1600" 
            height="800" />
        </div>
    </div>
    <div class="container">
        
        
        <!-- Product 2 -->
        <div class="product">
            <img src="https://drdento.com/cdn/shop/files/1_5bdd8eba-1847-4ca7-802c-336c4a1791b6_1066x.jpg?v=1727954039" 
     width="300" 
     height="400" />
            <h3>Fennel Mint Oil Pulling(100ml) </h3>
            <div class="rating">★★★★★</div>
            <p> Ancient Practice, Modern Formula.</p>
            <p class="price">Rs. 5,099.00</p>
            <button>Add To Cart</button>
            <div class="features">
                <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/plant-based.png?v=1703074538" alt="Vegan">
                <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/no-alcohol.png?v=1703075068" alt="No Alcohol">
                <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/fluoride.png?v=1703075210" alt="Fluoride Free">
                <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/sls-free.png?v=1703075362" alt="SLS Free">
            </div>
        </div>
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
          <h2>Best Selling Products</h2>
          <div class="products-container">
            <div class="product">
              <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Travel_Pack_Banner_1.png?v=1723616247" />
              <h3>Product 1 Name</h3>
              <p class="price">229.99 <span class="discount">20% off</span></p>
              <div class="ratings">★★★★☆ (120 Reviews)</div>
              <button>Add to Cart</button>
            </div>
            <div class="product">
              <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Pro_Toothbrush_Cover.png?v=1722071273" />
              <h3>Pro Series Sonic Smart</h3>
              <p class="price">199.99 <span class="discount">15% off</span></p>
              <div class="ratings">★★★★☆ (85 Reviews)</div>
              <button>Add to Cart</button>
            </div>
            <div class="product">
              <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/ultragreen_1_03a20149-d12f-4298-b165-0f74ca187ac2.png?v=1709889819" />
              <h3>Complete Oral Care...</h3>
              <p class="price">1499.99 <span class="discount">10% off</span></p>
              <div class="ratings">★★★★☆ (60 Reviews)</div>
              <button>Add to Cart</button>
            </div>
            <div class="product">
              <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Untitled_design_15.png?v=1721647564" />
              <h3>Pro Complete care</h3>
              <p class="price">999.99 <span class="discount">25% off</span></p>
              <div class="ratings">★★★☆☆ (30 Reviews)</div>
              <button>Add to Cart</button>
            </div>
            <div class="product">
              <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Power_Pair1.png?v=1723788296" />
              <h3>Pro Clean Duo</h3>
              <p class="price">179.99 <span class="discount">5% off</span></p>
              <div class="ratings">★★★★★ (200 Reviews)</div>
              <button>Add to Cart</button>
            </div>
            <div class="product">
              <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/neoblue_1.png?v=1706470704" />
              <h3>Neo Series Sonic</h3>
              <p class="price">249.99 <span class="discount">30% off</span></p>
              <div class="ratings">★★★★★ (300 Reviews)</div>
              <button>Add to Cart</button>
            </div>
          </div>
        </div>
      </body>
        
      <?php include 'footer.php';
     ?>















