<!DOCTYPE html>
<html lang="ru">

<?php 
$pageTitle = "Кейс: Разработка сайта КД Боева Дача - Web Diff";
$pageDescription = "Мы разработали концепт сайта для клубного дома в элитном районе города Курска. Презентационный сайт с интеграцией VR на страницах сайта.";
$pageImgAdress = "https://web-diff.ru/img/portfolio/boeva/present.webp";

include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Разработка сайта КД "Боева Дача"
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Разработка сайта КД "Боева Дача"</h1>
				<p>Мы разработали концепт сайта для клубного дома в элитном районе города Курска. Презентационный сайт с интеграцией VR на страницах сайта.</p>
				
				<p><a href = "http://boeva-dacha.ru/">boeva-dacha.ru</a></p>
				<p>
				<span data-form = "Проект Боева Дача" class = "allBtn unisend_win">Хочу так же</span>
				</p>
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/boeva/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#8a754a;color: white;">#8a754a</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#dfba6a;color: white;">#dfba6a</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image portfolio_image_many">
			<h2>Страницы сайта</h2>
			<img src = "../img/portfolio/boeva/BD_1.<?php global $imgRaz; echo $imgRaz; ?>">
			<img src = "../img/portfolio/boeva/BD_2.<?php global $imgRaz; echo $imgRaz; ?>">
			<img src = "../img/portfolio/boeva/BD_3.<?php global $imgRaz; echo $imgRaz; ?>">
			<img src = "../img/portfolio/boeva/BD_4.<?php global $imgRaz; echo $imgRaz; ?>">
			<img src = "../img/portfolio/boeva/BD_5.<?php global $imgRaz; echo $imgRaz; ?>">
			<img src = "../img/portfolio/boeva/BD_7.<?php global $imgRaz; echo $imgRaz; ?>">
			<img src = "../img/portfolio/boeva/BD_8.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/boeva/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/boeva/nature.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	<div class = "portfolioControl">
		<a title = "Сайт - Русский ФабрикантЪ" href = "https://web-diff.ru/portfolio/project-makmol" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Сайт - Идея Строй" href = "https://web-diff.ru/portfolio/project-ideastroy" class = "next"></a>
	</div>
	
	<?php include("../footer.php");?>
	
</body>
</html>