 document.getElementById('passwordResetForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Показываем сообщение об успехе
            document.getElementById('successMessage').style.display = 'block';
            
            // Анимация кнопки
            const button = document.getElementById('resetButton');
            button.innerHTML = '<i class="fas fa-check"></i> Отправлено!';
            button.style.background = 'linear-gradient(to right, #28a745, #20c997)';
            
            // Блокируем повторную отправку
            button.disabled = true;
            
            // Через 5 секунд возвращаем форму в исходное состояние
            setTimeout(function() {
                document.getElementById('successMessage').style.display = 'none';
                button.innerHTML = '<i class="fas fa-paper-plane"></i> Отправить инструкции';
                button.style.background = 'linear-gradient(to right, #6a11cb, #2575fc)';
                button.disabled = false;
                document.getElementById('passwordResetForm').reset();
            }, 5000);
        });