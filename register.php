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
  <!--  <div class="container">
    <a class="back-button" href="header.php">Back </a>
        <h2>Create Account</h2>
        <p>Please register below to create an account</p>
        <form action="/submit_registration" method="post">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="first_name" required>

            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="last_name" required>

            <label for="email">Your Email Address</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Your Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Create Account</button>
        </form>
    </div>-->

    <?php
// Start session
session_start();

// Database configuration
$host = "localhost";
$db_name = "dentodb";
$username = "root";
$password = "";

try {
    // Connect to the database
    $conn = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = trim($_POST['first_name']);
    $lastname = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $user_password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Validate form inputs
    if (empty($firstname)||empty($lastname) || empty($email) || empty($password) || empty($confirm_password)) {
        $error_message = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format.";
    } elseif ($user_password !== $confirm_password) {
        $error_message = "Passwords do not match.";
    } else {
        // Check if email already exists
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $error_message = "Email is already registered.";
        } else {
            // Hash the password
            $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

            // Insert new user into the database
            $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
            $stmt->bindParam(':first_name', $firstname);
            $stmt->bindParam(':last_name', $lastname);
            $stmt->bindParam(':last_email', $lastemail);
            $stmt->bindParam(':password', $hashed_password);

            if ($stmt->execute()) {
                $_SESSION['success_message'] = "Registration successful. You can now log in.";
                header("Location: home.php"); // Redirect to the login page
                exit;
            } else {
                $error_message = "Something went wrong. Please try again.";
            }
        }
    }
}
?>
    <h2>Register</h2>
    <?php if (!empty($error_message)) : ?>
        <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
    <?php endif; ?>
    <form method="POST" action="/submit_registration">
        <label for="name">First Name:</label>
        <input type="text" id="name" name="first_name" required>
        <br><br>
        <label for="name">Last Name:</label>
        <input type="text" id="name" name="last_name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <br><br>
        <button type="submit">Register</button>
    </form>
    <p>Already have an account? <a href="header.php">Login here</a>.</p>
</body>
</html>

</body>
</html>
<?php include 'footer.php';?>