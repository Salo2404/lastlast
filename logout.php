<?php
session_start(); // Начало сессии
unset($_SESSION); // Удаление всех данных сессии
session_destroy(); // Завершение сессии
header("Location: login.php"); // Перенаправление на страницу входа
exit(); // Завершение скрипта