
<?php include 'header.php';?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.cart-box {
    position: fixed;
    top: 10%;
    right: 5%;
    width: 450px;
    max-height: 100%;
    background: #ffffff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    overflow-y: auto;
    z-index: 1000;
}

.cart-header {
    background-color: #d3c3c3;
    color:blue;
    text-align: center;
    padding: 10px;
    font-weight: bold;
    font-size: 1.2rem;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.cart-content {
    padding: 10px;
    text-align: center;
    
}

.cart-content p {
    font-size: 0.9rem;
    color: #333;
    margin-bottom: 10px;
}

.shop-now {
    display: inline-block;
    background-color: #000;
    color: #fff;
    text-decoration: none;
    padding: 8px 16px;
    border-radius: 5px;
    margin-bottom: 20px;
    font-size: 0.9rem;
    width: 100%;
}

.product-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    border-bottom: 1px solid #ddd;
    height: 250px;
}

.product-item:last-child {
    border-bottom: none;
}

.product-image {
    max-width: 150px;
    height: auto;
    border-radius: 4px;
}

.product-info {
    flex-grow: 1;
    margin-left: 10px;
    text-align: left;
}

.product-info h4 {
    margin: 0;
    font-size: 0.9rem;
    color: #333;
}

.product-info p {
    margin: 5px 0;
    font-size: 0.8rem;
    color: #666;
}

.add-button {
    background-color: #6a0dad;
    color: #fff;
    padding: 6px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 0.8rem;
}

.add-button:hover {
    background-color: #5a00c1;
}

@media (max-width: 480px) {
    .cart-box {
        width: 90%;
        right: 5%;
        top: 5%;
    }

    .product-info h4 {
        font-size: 0.8rem;
    }

    .add-button {
        padding: 4px 8px;
        font-size: 0.7rem;
    }
}
    </style>
</head>
  <body>
        <div class="cart-box">
            <div class="cart-header">YOUR CART (0)</div><br>
            <div class="cart-content">
                <h2><b>YOUR CART IS EMPTY!</b></h2>
                <p>Add Our Products To Upgrade Your Smile!</p>
                <a href="#" class="shop-now">Shop Now</a>
                <div class="product-item">
                    <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/neored_1_x480.png"  alt="Neo Series Sonic Electric Toothbrush" class="product-image">
                    <div class="product-info">
                        <h4>Neo Series Sonic Electric Toothbrush</h4>
                        <p>Rs. 799.00</p>
                    </div>
                    <button class="add-button">ADD</button>
                </div>
                <div class="product-item">
                    <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/ultragreen_1_x480.png" alt="Ultra Series Sonic Electric Toothbrush" class="product-image">
                    <div class="product-info">
                        <h4>Ultra Series Sonic Electric Toothbrush</h4>
                        <p>Rs. 1,099.00</p>
                    </div>
                    <button class="add-button">ADD</button>
                </div>
                <div class="product-item">
                    <img src="https://cdn.shopify.com/s/files/1/0666/5080/0412/files/Pro_Toothbrush_Cover_x480.png" alt="Pro Series Sonic Smart Electric Toothbrush" class="product-image">
                    <div class="product-info">
                        <h4>Pro Series Sonic Smart Electric Toothbrush(Rechargable)</h4>
                        <p><del>Rs. 2,999.00</del> Rs. 2,400.00</p>
                    </div>
                    <button class="add-button">ADD</button>
                </div>
            </div>
        </div>
    



</body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php include 'footer.php';?>