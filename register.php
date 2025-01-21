<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            position: relative;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
        }
        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            cursor: pointer;
            color: #2ab9a4;
            font-size: 14px;
            text-decoration: none;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #2ab9a4;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218f8a;
        }
        /* Media Queries */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            input[type="text"],
            input[type="email"],
            input[type="password"] {
                padding: 8px;
            }
            button {
                padding: 8px;
                font-size: 14px;
            }
        }
        @media (max-width: 480px) {
            .container {
                padding: 10px;
            }
            h2 {
                font-size: 18px;
            }
            input[type="text"],
            input[type="email"],
            input[type="password"] {
                padding: 6px;
                font-size: 14px;
            }
            button {
                padding: 6px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    <a class="back-button" href="header.php">Back </a>
        <h2>Create Account</h2>
        <p>Please register below to create an account</p>
        <form action="submit_registration.php" method="post">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="first_name" required>

            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="last_name" required>

            <label for="email">Your Email Address</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Your Password</label>
            <input type="password" id="password" name="password" required>

             <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        

            <button  name="submit" type="submit">Create Account</button>
        </form>
    </div>
 
  
    
</body>
</html>

</body>
</html>
<?php include 'footer.php';?>