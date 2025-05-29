<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
        <div class="container">
        <div class="header">
            <div class="logo">PG</div>
            <h1>Создать аккаунт</h1>
            <p>Присоединяйтесь к нашему сообществу и получите доступ к эксклюзивным возможностям</p>
        </div>
        
        <form id="registrationForm">
            <div class="form-grid">
                <div class="input-group">
                    <i class="fas fa-user input-icon"></i>
                    <input type="text" id="firstName" placeholder="Имя" required>
                </div>
                
                <div class="input-group">
                    <i class="fas fa-user input-icon"></i>
                    <input type="text" id="lastName" placeholder="Фамилия" required>
                </div>
                
                <div class="input-group full-width">
                    <i class="fas fa-envelope input-icon"></i>
                    <input type="email" id="email" placeholder="Электронная почта" required>
                </div>
                
                <div class="input-group">
                    <i class="fas fa-globe input-icon"></i>
                    <select id="country" required>
                        <option value="" disabled selected>Страна</option>
                        <option value="ru">Россия</option>
                        <option value="us">США</option>
                        <option value="de">Германия</option>
                        <option value="fr">Франция</option>
                        <option value="jp">Япония</option>
                    </select>
                </div>
                
                <div class="input-group">
                    <i class="fas fa-phone input-icon"></i>
                    <input type="tel" id="phone" placeholder="Телефон">
                </div>
                
                <div class="input-group full-width">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" id="password" placeholder="Пароль" required>
                    <span class="password-toggle" id="togglePassword">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
                
                <div class="input-group full-width">
                    <i class="fas fa-lock input-icon"></i>
                    <input type="password" id="confirmPassword" placeholder="Подтвердите пароль" required>
                </div>
                
                <div class="checkbox-container">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">Я согласен с <a href="#">Условиями использования</a> и <a href="#">Политикой конфиденциальности</a></label>
                </div>
                
                <div class="checkbox-container">
                    <input type="checkbox" id="newsletter">
                    <label for="newsletter">Подписаться на новостную рассылку</label>
                </div>
                
                <button type="submit" id="registerButton">
                    <i class="fas fa-user-plus"></i> Зарегистрироваться
                </button>
                
                <div class="divider">
                    <span>Или зарегистрируйтесь через</span>
                </div>
                
                <div class="footer">
                    <p>Уже есть аккаунт? <a href="login.php">Войти</a></p>
                    <p><a href="forgot.php">Забыли пароль?</a></p>
                </div>
            </div>
        </form>
    </div>
    <script src="reg.js"></script>
</body>
</html>