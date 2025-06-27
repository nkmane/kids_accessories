<?php
session_start();

// If user is not logged in, redirect to login page
if (!isset($_SESSION['user_email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kids Accessories - Home</title>
    <style>
        body {
            background: #ffe6e6;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 700px;
            margin: 60px auto;
            background: #fff3f3;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 12px #ff9999;
            text-align: center;
        }
        h2 {
            color: #cc0066;
        }
        a.button {
            display: inline-block;
            margin-top: 20px;
            background: #ff6699;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 25px;
        }
        a.button:hover {
            background: #cc0052;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user_email']); ?>!</h2>
        <p>You have successfully logged in to Kids Accessories.</p>
        <a href="logout.php" class="button">Logout</a>
    </div>
</body>
</html>
