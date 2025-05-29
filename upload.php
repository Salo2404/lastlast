<?php
include 'db.php';

if (isset($_FILES['photo']) && isset($_POST['title']) && isset($_POST['comment'])) {
    $comment = mysqli_real_escape_string($connection, $_POST['comment']);
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    
    // Автоматическое определение даты создания
    $created_at = date('Y-m-d H:i:s'); // Текущая дата и время
    
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
    
    $target_path = "uploads/" . basename($photo_name);
    
    // Перемещение файла с проверкой
    if (move_uploaded_file($photo_tmp, $target_path)) {
        // Безопасный запрос с подготовленными выражениями
        $query = "INSERT INTO photos (photo_name, comment, title, created_at) 
                  VALUES (?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($connection, $query);
        mysqli_stmt_bind_param($stmt, "ssss", $photo_name, $comment, $title, $created_at);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        // Обработка ошибки загрузки файла
        die("Ошибка загрузки изображения");
    }
}

mysqli_close($connection);
Header("Location: index.php");
exit;