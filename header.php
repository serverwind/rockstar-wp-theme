<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav id='navi'>
            <span id='menu-button' class='navi-hamburger'><i class="fas fa-bars"></i></span>
            <span class='site-logo'><img src="assets/img/rg-logo.png"></span>
            <span class='navi-items'><i class="fas fa-home"></i> <a href='single.html'>Home</a></span>
            <span class='navi-items'><i class="fas fa-newspaper"></i> <a href='single.html'>Новости</a></span>
            <span class='navi-items'><i class="fas fa-book"></i> <a href='single.html'>Статьи</a></span>
            <span class='navi-items'><i class="fas fa-video"></i> <a href='single.html'>Видео</a></span>
            <span class='navi-items'><i class="fas fa-download"></i> <a href='single.html'>Файлы</a></span>
            <span class='navi-items'><i class="fas fa-gamepad"></i> <a href='single.html'>Игры</a></span>
            <span class='navi-items'><i class="fab fa-twitch"></i> <a href='single.html'>Cтримы</a></span>
            <span class='navi-items'><i class="fas fa-comment-alt"></i> <a href='single.html'>Socials</a></span>
            <span id='search-icon' class='navi-search-button'><i class="fas fa-search"></i></span>
            <form class='search-form'><input class='search-field' type="text" name="search" placeholder="Поиск..."><button class='search-button'><i class="fas fa-search" aria-hidden="true"></i></button></form>
        </nav>
    </header>