
<?php include '/header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
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
            flex-direction: column;
            align-items: center;
            gap: 50px;
            padding: 40px;
        }

        .card {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: row;
            align-items: center;
            max-width: 1100px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%; /* Ensure the card width is 100% */
        }

        .card img {
            width: 50%; /* Set image width to 50% */
            height: auto;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .card:hover img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 40px;
            width: 50%; /* Set content width to 50% */
        }

        .card-title {
            font-size: 34px;
            font-weight: bold;
            margin: 30px 0;
        }

        .card-description {
            font-size: 20px;
            color: #555;
            margin: 30px 0;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background: #38b6ff;
            padding: 16px 28px;
            border-radius: 5px;
            text-align: center;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #222a2e;
        }

        @media (max-width: 768px) {
            .card {
                flex-direction: column;
            }

            .card img, .card-content {
                width: 100%; /* Stack image and content on mobile screens */
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
                <div class="card-title">Impact of Diet on Oral Health: Foods That Help and Harm
                    
                   </div>
                <div class="card-description"> Did you know that your daily diet and oral health go hand in hand? While some foods can shield your smile by building up enamel or supporting gum health, others can lead to faster decay, potentially compromising your...</div>
                <a href="#" class="btn">View Details</a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <img src="https://drdento.com/cdn/shop/articles/Oil_Pulling_Blog_0_720x.png?v=1731405253" alt="Impact of Diet">
            <div class="card-content">
                <div class="card-title">The Science Behind Oil Pulling: How It Works to Improve Oral Hygiene
                   
                    </div>
                <div class="card-description"> Did you know that a simple swish of oil could elevate your oral health routine? Oil pulling, a time-honored Ayurvedic practice, has become a popular method for enhancing oral hygiene. By swishing oil in your mouth, you can...</div>
                <a href="#" class="btn">View Details</a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card">
            <img src="https://drdento.com/cdn/shop/articles/Smile_Creative_720x.jpg?v=1730703963" alt="Oil Pulling">
            <div class="card-content">
                <div class="card-title">Dr.Dento: Redefining Oral Care with Advanced Electric Toothbrushes
                </div>
                <div class="card-description">   The world of oral care has revolutionized a lot. We have experienced a significant shift from basic toothbrushes to smart toothbrushes. But the revolution doesn't end here. Today, even electric toothbrushes have the latest features, keeping oral health..</div>
                <a href="#" class="btn">View Details</a>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Card 1 -->
        <div class="card">
            <img src="https://drdento.com/cdn/shop/articles/Toxic_blog_800_x_512_px_720x.png?v=1709200451" alt="Diet Impacts Smile">
            <div class="card-content">
                <div class="card-title">Shift from Toxic to Organic
                             </div>
                <div class="card-description"> It is no secret that the world around us is rampantly shifting from toxic to organic in every aspect of their lives! Starting from their diets, fashion choices, skincare products, personal care products, and even furnishing. This is...
                    .</div>
                <a href="#" class="btn">View Details</a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card">
            <img src="https://drdento.com/cdn/shop/articles/Bristles_blog_800_x_512_px_720x.png?v=1708605260" alt="Impact of Diet">
            <div class="card-content">
                <div class="card-title">The Science Behind Oil Pulling: How It Works to Improve Oral Hygiene
                   
                    </div>
                <div class="card-description"> Did you know that a simple swish of oil could elevate your oral health routine? Oil pulling, a time-honored Ayurvedic practice, has become a popular method for enhancing oral hygiene. By swishing oil in your mouth, you can...</div>
                <a href="#" class="btn">View Details</a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card">
            <img src="https://drdento.com/cdn/shop/articles/Blogforevm_720x.png?v=1721799941" alt="Oil Pulling">
            <div class="card-content">
                <div class="card-title">Manual or Electric Toothbrushes: Which one to use?
                </div>
                <div class="card-description">        Can you believe that the first modern day toothbrush was invented way back in 1780 by William Addis! His initial design only consisted of a handle that was carved from cow bone attached with pig bristles. We have..
                </div>
                <a href="#" class="btn">View Details</a>
            </div>
        </div>
    </div>
</body>
</html>
