<!DOCTYPE html>
<html lang="ru">

<?php 

$pageTitle = "Кейс: Разработка сайта-портфолио 'Интерьерно' - Web Diff";
$pageDescription = "Мы разработали сайт-портфолио и страницу для публикации ссылок в Instagramm для компании 'Интерьерно'. Сайт  расчитан на публикацию мпректов по мебелеровке помещений с фото и видео материалами.";
$pageImgAdress = "https://web-diff.ru/img/portfolio/interierno/present.jpg";

include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Разработка сайта-портфолио "Интерьерно"
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Разработка сайта-портфолио "Интерьерно"</h1>
				<p>Мы разработали сайт-портфолио и страницу для публикации ссылок в Instagramm для компании "Интерьерно". Сайт  расчитан на публикацию мпректов по мебелеровке помещений с фото и видео материалами.</p>
				
				<p><a href = "http://portfolio.interierno.com/">portfolio.interierno.com</a></p>
				<p>
				<span data-form = "Проект Интерьерно" class = "allBtn unisend_win">Хочу так же</span>
				</p>
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/interierno/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#33bd3d; color: white;">#33bd3d</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#D4C528; color: white;">#D4C528</div>
				<div class = "colorBlk" style = "background-color:#333333; color: white;">#333333</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Главная страница</h2>
			<img src = "../img/portfolio/interierno/main.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/interierno/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/interierno/natur-inter.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	<div class = "portfolioControl">
		<a title = "Сайт - Поселок Селенга" href = "https://web-diff.ru/portfolio/project-selenga" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Сайт - Доктор Марченко" href = "https://web-diff.ru/portfolio/project-marhenko" class = "next"></a>
	</div>
	
	
	<?php include("../footer.php");?>
	
</body>
</html>