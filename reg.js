// Обработка формы регистрации
document.getElementById('registrationForm').addEventListener('submit', function(e) {
    e.preventDefault();
            
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const button = document.getElementById('registerButton');
            
    // Проверка совпадения паролей
    if (password !== confirmPassword) {
        alert('Пароли не совпадают!');
        return;
    }
            
    // Анимация успешной регистрации
    button.innerHTML = '<i class="fas fa-check"></i> Регистрация успешна!';
    button.style.background = 'linear-gradient(to right, #28a745, #20c997)';
    button.disabled = true;
            
    // Через 3 секунды перенаправляем на страницу входа
    setTimeout(function() {
        window.location.href = 'login.php';
    }, 3000);
});