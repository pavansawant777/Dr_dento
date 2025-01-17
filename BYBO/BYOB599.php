<?php include 'header.php';?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BYOB 599</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <a href="#"><img src="../BYBO/BYBO photos/Freshnesskit.jpg" style="height:600px; width: 100%;"></a>
    
    <div class="marquee">
        <span>
          
         <h2><b> <span class="icon"><i class="fa-solid fa-fire-flame-curved"></i> Holistic Approach to Oral Care </span><span class="icon"><i class="fa-solid fa-fire-flame-curved"></i>
          Sustainable and Eco-Friendly </span> <span class="icon"><i class="fa-solid fa-fire-flame-curved"></i>
          Technology-Driven and Research-Backed </span><span class="icon"><i class="fa-solid fa-fire-flame-curved"></i>
          Enhanced Plaque-Removal </span><span class="icon"><i class="fa-solid fa-fire-flame-curved"></i>
          Recommended by Experts </span> </b></h2>
        </span>
    </div><br>
    <div class="step-container">
      <div class="step">
        <div class="circle"><a href=""><i class="fa-regular fa-compass"></i></a></div>
        <p>Add Any 2 Products</p></div>
    
      <div class="line"></div>
      <div class="step">
        <div class="circle"><a href="#"><i class="fa-regular fa-compass"></i></a></div>
        <p>Add Any 2 Freebie</p></div>
      </div>
    </div>
    <div class="card" style="width: 18rem;float: left;margin-left: 10px;padding-right: 5px;">
      <img src="../BYBO/BYBO photos/Lemon.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Aloe Lemongrass Mouthwash
          300ml</h5>
        <p class="card-text">₹299.00</p>
        <a href="#" class="btn btn-primary" style="margin-left: 65px;">Add To Box</a>
      </div></div>
      <div class="card" style="width: 18rem;float: left; margin-left: 10px;">
      <img src="../BYBO/BYBO photos/cucumber.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cucumber Mint Mouthwash
          300ml</h5>
        <p class="card-text">₹299.00</p>
        <a href="#" class="btn btn-primary" style="margin-left: 65px;">Add To Box</a>
      </div></div>
      <div class="card" style="width: 18rem;float: left; margin-left: 10px;">
      <img src="../BYBO/BYBO photos/mint.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Fennel Mint Oil Pulling(100ml)</h5>
        <p class="card-text">₹299.00</p>
        <a href="#" class="btn btn-primary" style="margin-left: 65px;">Add To Box</a>
      </div></div>
      <div class="card" style="width: 18rem;float: left; margin-left: 10px;">
      <img src="../BYBO/BYBO photos/green.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Matcha Green Tea Toothpaste(125gm)</h5>
        <p class="card-text">₹299.00</p>
        <a href="#" class="btn btn-primary" style="margin-left: 65px;">Add To Box</a>
      </div></div>
      <div class="card" style="width: 18rem;float: left; margin-left: 10px;margin-top: 10px;">
      <img src="../BYBO/BYBO photos/vanilla.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Vanilla Icey Mint Toothpaste(125gm)</h5>
        <p class="card-text">₹299.00</p>
        <a href="#" class="btn btn-primary" style="margin-left: 65px;">Add TO Box</button></a>
      </div></div>
      <div class="card" style="width: 18rem; margin-left: 10px;margin-top: 10px;">
      <img src="../BYBO/BYBO photos/watermelon.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Watermelon Mint Mouthwash
        300ml</h5>
        <p class="card-text">₹299.00</p>
        <a href="#" class="btn btn-primary" style="margin-left: 65px;">Add To Box</a>
      </div>
    </div>
    <div class="container">
      <div class="bundle-message">
        Add <span id="product-count">4</span> product(s) to get the bundle at ₹<span id="bundle-price">599.00</span>
      </div>
      <div class="product-selector">
        <button class="product-btn" onclick="updateTotal(1)">1</button>
        <button class="product-btn" onclick="updateTotal(2)">2</button>
        <button class="product-btn" onclick="updateTotal(3)">3</button>
        <button class="product-btn" onclick="updateTotal(4)">4</button>
    </div>
      <div class="footer-bar">
        <button class="btn btn-outline-secondary" onclick="goBack()">Back</button>
        <span>Total ₹<span id="total-amount">0.00</span></span>
        <button class="btn btn-primary" onclick="proceedToCheckout()">Proceed To Checkout</button>
      </div>
    </div>
      <br>
      <br>
      <h2 style="text-align: center;"><b>Best-Selling Product</b></h2>

      <div id="best-sellers">
        <div class="products-container">
          <div class="product">
           <a href="#"> <img src="../BYBO/BYBO photos/travel.jpg"></a>
            <h3>Travel Pack</h3>
            <p class="price">499.99 <span class="discount">50% off</span></p>
            <div class="ratings">★★★★☆ (120 Reviews)</div>
          
          </div>
          <div class="product">
            <a href="#"><img src="../BYBO/BYBO photos/series.jpg"></a>
            <h3>Pro Series Sonic Smart</h3>
            <p class="price">Rs. 2,400.00 <span class="discount">30% off</span></p>
            <div class="ratings">★★★★☆ (85 Reviews)</div>
          </div>
          <div class="product">
            <a href="#"><img src="../BYBO/BYBO photos/sonic.jpg" ></a>
            <h3>Ultra Series Sonic Electric...</h3>
            <p class="price">1099 <span class="discount">25% off</span></p>
            <div class="ratings">★★★☆☆ (30 Reviews)</div>   
          </div>
          <div class="product">
            <a href="#"><img src="../BYBO/BYBO photos/complete.jpg"></a>
            <h3>Complete Oral Care...</h3>
            <p class="price">Rs. 1,499.00<span class="discount">20% off</span></p>
            <div class="ratings">★★★★☆ (60 Reviews)</div>
          
          </div>
          <div class="product">
            <a href="#"><img src="../BYBO/BYBO photos/morning.jpg"></a>
            <h3>Morning Essential Duo </h3>
            <p class="price">Rs. 899.00 <span class="discount">25% off</span></p>
            <div class="ratings">★★★☆☆ (30 Reviews)</div>
          </div>
          <div class="product">
            <a href="#"><img src="../BYBO/BYBO photos/Neo.jpg"></a>
            <h3>Neo Series Sonic</h3>
            <p class="price">Rs. 799.00 <span class="discount">15% off</span></p>
            <div class="ratings">★★★★★ (300 Reviews)</div>
          </div>
          <div class="product">
            <a href="#"><img src="../BYBO/BYBO photos/procomplete.jpg"></a>
            <h3>Pro Complete Care</h3>
            <p class="price">Rs. 3,199.00 <span class="discount">35% off</span></p>
            <div class="ratings">★★★★★ (200 Reviews)</div>
          </div>
          <div class="product">
            <a href="#"><img src="../BYBO/BYBO photos/clean.jpg"></a>
            <h3>Pro Clean Duo</h3>
            <p class="price">Rs. 2,999.00 <span class="discount">5% off</span></p>
            <div class="ratings">★★★★★ (200 Reviews)</div>
          </div>
        </div>
      </div>
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php include 'footer.php';?>