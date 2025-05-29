<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
if ($username == "admin" && $password == "123") {
    $_SESSION["admin"] = true;
    header("Location: index.php");
    exit;
} else {
    echo "Неверный логин или пароль!";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="login-container">
        <div class="header">
            <div class="logo">PG</div>
            <h1>You're welcome</h1>
            <p>Enter your login details</p>
        </div>
        
        <form method="POST">
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            
            <button type="submit">Log in</button>
        </form>
        
        <div class="footer">
            <p>No account? <a href="reg.php">Sign up </a></p>
            <p><a href="forgot.php">Forgot your password?</a></p>
        </div>
    </div>
</body>
</html>
