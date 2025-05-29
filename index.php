<?php
session_start();

// Проверяем, аутентифицирован ли пользователь
if (!isset($_SESSION['admin'])) {
    // Если пользователь не аутентифицирован, перенаправляем его на страницу входа
    header('Location: login.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<link>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHPGRAM</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
</link>
</head>

<body>
    <div class="wrapper">
        <section class="hero">
            <div class="container">
                <header class="header">
                    <a href="#!" class="logo">
                        <img src="img/Frame 1.png" alt="Логотип" class="logo__pic">
                    </a>
                    <nav class="nav">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="#!" class="nav__link">HOME</a>
                            </li>
                            <li class="nav__item">
                                <a href="#!" class="nav__link">SHOP</a>
                            </li>
                        </ul>
                    </nav>
                    <form action="logout.php" method="post" class="logout">
                        <button type="submit">Выйти</button>
                    </form>
                </header>
                <div class="hero__content">
                    <div class="hero__info">
                        <div class="hero__headline">PHPGRAM</div>
                        <h1 class="title hero__title">Be who you are, without judgement or humiliation.</h1>
                        <div class="hero__desc">Is an innovative platform for developers that provides powerful 
                            Instagram-based tools to easily automate posts, analyse statistics and manage content efficiently. 
                            The created website combines ease of use with a clear interface
                        </div>
                    </div>
                    <button class="btn">WRITE NOW</button>
                </div>
                    <h5 class="head">Add a post</h5>

                <form action="upload.php" method="post" enctype="multipart/form-data" class="forms">
                    <textarea name="title" placeholder="Your title..." required class="comment"></textarea>
                    <input type="file" name="photo" accept="image/*" required class="load"><br>
                    <textarea name="comment" placeholder="Your comment..." required class="comment"></textarea>
                    <button type="submit">Upload</button>
                </form>
                <h2>Posts</h2>
                <div id="photo-gallery" class="photo_gallery"></div>
                <!-- <h2 class="headrev">Reviews</h2>
                <form action="uploadrev.php" method="post" enctype="multipart/form-data" class="forms">
                    <textarea name="name" placeholder="Your name..." required class="usname"></textarea>
                    <textarea name="review" placeholder="Your review..." required class="review"></textarea>
                    <button type="submit">Upload</button>
                </form>
                <div id="reviews" class="photo_gallery"></div>
                --><footer> 
                    <div class="footer-bottom">
                    <p>PHPGRAM. All rights reserved.</p>
                </div>
                </footer>
            </div>
        </section>
    </div>
    <script src="script.js"></script>
</body>

</html>