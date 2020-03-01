<?php
require_once 'vendor/autoload.php';
require_once 'functions/functions.php';

class_alias('\RedBeanPHP\R', '\R');
$db = require_once 'config/connect_db.php';
\R::setup($db['dsn'], $db['user'], $db['pass']);
$id = $_GET['id'];
$movies = \R::find('movies', "WHERE id=" . $id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profilm</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="theme" href="js/localst.js">
    <link rel="icon" href="../../img/logo.png">
</head>
<body>
<header>
<div id="logo" onclick="slowScroll('top')">
    <span>Profilm</span>
</div>
    <div id="about">
        <a href="/index.php" title="Фильмы" onclick="slowScroll('#main')">Фильмы</a>
        <a href="" id="DarkTheme"">Темная Тема</a>
        <a href="" id="WhiteTheme">Светлая Тема</a>
    </div>
</header>
<?php foreach ($movies as $movie) : ?>
<div id="top">
    <h1>Pro-Фильм</h1>
    <span><?= $movie->title; ?></span>
</div>
<section>
    <div class="img2">
        <img src="/img/<?= $movie->img; ?>" alt="" style="width: 300px; height: 400px;">
    </div>
    <div class="aboutMovie">
        <h4>Оценка: <?= $movie->rating; ?></h4>
        <br>
        <h5>Длительность: <?= $movie->duration; ?></h5>
        <br>
        <p>  <?= $movie->about; ?></p>
        <br>
        <p><a href="/404.html"><input class="button" type="button" name="buy" value="Заказать"></a></p>
    </div>
</section>
<?php endforeach; ?>
<footer>
    <div class="faq">
        <div>
            <span class="title">Оплата</span>
            <span class="heading">Как производиться оплата?</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto doloribus laudantium ipsa, quo sequi veniam sapiente adipisci esse porro. Laboriosam aut facere ipsam quo non quidem quaerat consequuntur expedita. Reiciendis.</p>
            <span class="heading">Как производиться оплата?</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto doloribus laudantium ipsa, quo sequi veniam sapiente adipisci esse porro. Laboriosam aut facere ipsam quo non quidem quaerat consequuntur expedita. Reiciendis.</p>
            <span class="heading">Как производиться оплата?</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto doloribus laudantium ipsa, quo sequi veniam sapiente adipisci esse porro. Laboriosam aut facere ipsam quo non quidem quaerat consequuntur expedita. Reiciendis.</p>
        </div>
        <div>
            <span class="title">Гарантии</span>
            <span class="heading">Какие гарантии?</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto doloribus laudantium ipsa, quo sequi veniam sapiente adipisci esse porro. Laboriosam aut facere ipsam quo non quidem quaerat consequuntur expedita. Reiciendis.</p>
            <span class="heading">Как производиться оплата?</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto doloribus laudantium ipsa, quo sequi veniam sapiente adipisci esse porro. Laboriosam aut facere ipsam quo non quidem quaerat consequuntur expedita. Reiciendis.</p>
            <span class="heading">Как производиться оплата?</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto doloribus laudantium ipsa, quo sequi veniam sapiente adipisci esse porro. Laboriosam aut facere ipsam quo non quidem quaerat consequuntur expedita. Reiciendis.</p>
        </div>
        <div>
            <span class="title">Мы</span>
            <span class="heading">Почему именно мы?</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto doloribus laudantium ipsa, quo sequi veniam sapiente adipisci esse porro. Laboriosam aut facere ipsam quo non quidem quaerat consequuntur expedita. Reiciendis.</p>
            <span class="heading">Как производиться оплата?</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto doloribus laudantium ipsa, quo sequi veniam sapiente adipisci esse porro. Laboriosam aut facere ipsam quo non quidem quaerat consequuntur expedita. Reiciendis.</p>
            <span class="heading">Как производиться оплата?</span>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto doloribus laudantium ipsa, quo sequi veniam sapiente adipisci esse porro. Laboriosam aut facere ipsam quo non quidem quaerat consequuntur expedita. Reiciendis.</p>
        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    function slowScroll(id) {
        $('html, body').animade ({
            scrollTop: $(id).offset().top
        }, 500);
    }

    $(document).on("scroll", function () {
        if($(window).scrollTop() === 0)
            $("header").removeClass("fixed");
        else
            $("header").attr("class", "fixed");
    });
</script>
<script>
    window.onload = function () {
        if (localStorage.getItem('bg') != null)
        {
            var color1 = localStorage.getItem('bg');
            document.getElementsByTagName('html')[0].style.background = color1;
        }
        document.getElementById('DarkTheme').onclick = function () {
            console.log('work');
            document.getElementsByTagName('html')[0].style.background = '#3b3b3b';
            localStorage.setItem('bg','#3b3b3b');
        }
        document.getElementById('WhiteTheme').onclick = function () {
            console.log('work');
            document.getElementsByTagName('html')[0].style.background = '#EDEDED';
            localStorage.setItem('bg','#EDEDED');
        }
    }
</script>
</body>
</html>