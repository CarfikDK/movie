<?php
require_once 'vendor/autoload.php';
require_once 'functions/functions.php';

class_alias('\RedBeanPHP\R', '\R');
$db = require_once 'config/connect_db.php';
\R::setup($db['dsn'], $db['user'], $db['pass']);
$movies = \R::find('movies');
//debug($movies);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profilm</title>
	<link rel="stylesheet" href="styles/style.css">
	<link rel="icon" href="../../img/logo.png">
</head>
<body>
	<header>
		<div id="logo" onclick="slowScroll('top')">
			<span>Profilm</span>
		</div>
		<div id="about">
			<a href="index.php" title="Фильмы" onclick="slowScroll('#main')">Фильмы</a>
			<a href="/404.html" title="Контакты" onclick="slowScroll('#main')">Контакты</a>
			<a href="/404.html" title="FAQ" onclick="slowScroll('#main')">FAQ</a>
		</div>
	</header>

	<div id="top">
		<h1>Pro-кат Фильмов</h1>
	</div>
	<section>
	<div id="films">
		<h2>Лучший выбор фильмов</h2>
		<h4>Всегда есть что посмотреть</h4>
    <?php if ($movies) : ?>
	<?php foreach ($movies as $movie) : ?>
		<div class="img">
			<img src="img/<?= $movie->img ?>" alt="">
			<span><?= $movie->title ?></span>
			<a href="about.php/?id=<?=$movie->id?>">Подробнее</a>
		</div>

	<?php endforeach; ?>
	<?php endif; ?>
	</section>
	
	<footer>
		<hr class="hr">
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
</body>
</html>