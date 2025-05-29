<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="forgot.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">PG</div>
            <h1>Восстановление пароля</h1>
            <p>Введите адрес электронной почты, связанный с вашей учетной записью, и мы вышлем вам инструкции по восстановлению пароля.</p>
        </div>
        
        <form id="passwordResetForm">
            <div class="input-group">
                <i class="fas fa-envelope input-icon"></i>
                <input type="email" id="email" placeholder="Ваш email" required>
            </div>
            
            <button type="submit" id="resetButton">
                <i class="fas fa-paper-plane"></i> Отправить инструкции
            </button>
        </form>
        
        <div class="success-message" id="successMessage">
            <i class="fas fa-check-circle"></i> Письмо с инструкциями отправлено на ваш email!
        </div>
        
        <div class="footer">
            <p><a href="login.php"><i class="fas fa-arrow-left"></i> Вернуться на страницу входа</a></p>
            <p>Ещё не зарегистрированы? <a href="register.html">Создать аккаунт</a></p>
        </div>
    </div>
    <script src="forgot.js"></script>
</body>
</html>