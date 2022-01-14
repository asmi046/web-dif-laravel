<!DOCTYPE html>
<html lang="ru">

<?php 

$pageTitle = "Кейс: Разработка сайта компании 'Русский ФабрикантЪ' - Web Diff";
$pageDescription = "Мы разработали сайт компании 'Русский ФабрикантЪ'. Презентационный сайт основная цель которого показать продукцию компании и ее характеристики.";
$pageImgAdress = "https://web-diff.ru/img/portfolio/makmol/present.webp";


include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Разработка сайта компании "Русский ФабрикантЪ"
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Разработка сайта компании "Русский ФабрикантЪ"</h1>
				<p>Мы разработали сайт компании "Русский ФабрикантЪ". Презентационный сайт основная цель которого показать продукцию компании и ее характеристики.</p>
				
				<p><a href = "http://makmol.ru/">makmol.ru</a></p>
				<p>
				<span data-form = "Проект Русский ФабрикантЪ" class = "allBtn unisend_win">Хочу так же</span>
				</p>
				
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/makmol/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#706E60;color: white;">#706E60</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#b5a170;color: white;">#b5a170</div>
				<div class = "colorBlk" style = "background-color:#BE1E2D;color: white;">#BE1E2D</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image portfolio_image_many">
			<h2>Страницы сайта</h2>
			<img src = "../img/portfolio/makmol/Scrin-1.<?php global $imgRaz; echo $imgRaz; ?>">
			<img src = "../img/portfolio/makmol/Scrin-2.<?php global $imgRaz; echo $imgRaz; ?>">
			<img src = "../img/portfolio/makmol/Scrin-3.<?php global $imgRaz; echo $imgRaz; ?>">
			<img src = "../img/portfolio/makmol/Scrin-4.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/makmol/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/makmol/nature-mm.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	
	<div class = "portfolioControl">
		<a title = "Сайт - Tabula Rssa" href = "https://web-diff.ru/portfolio/project-tabula" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Сайт - Клубный дом Боева дача" href = "https://web-diff.ru/portfolio/project-boeva" class = "next"></a>
	</div>
	
	
	<?php include("../footer.php");?>
	
</body>
</html>