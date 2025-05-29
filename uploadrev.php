<?php
include 'config.php';

if (isset($_POST['name']) && isset($_POST['review'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $comment = mysqli_real_escape_string($connection, $_POST['review']);
    $query = "INSERT INTO pases (name, review) VALUES ('$name','$review')";
    mysqli_query($connection, $query);
}


mysqli_close($connection);


header("Location: index.php");