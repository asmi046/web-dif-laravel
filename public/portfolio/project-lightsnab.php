<!DOCTYPE html>
<html lang="ru">

<?php 

$pageTitle = "Кейс: Разработка сайта компании 'LightSnab' - Web Diff";
$pageDescription = "Мы разработали корпоративный сайт для компании 'LightSnab', на сайте размещена основная информация о деятельности компании.";
$pageImgAdress = "https://web-diff.ru/img/portfolio/lightsnab/present.jpg";


include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Разработка сайта компании "LightSnab"
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Разработка сайта компании "LightSnab"</h1>
				<p>Мы разработали корпоративный сайт для компании "LightSnab", на сайте размещена основная информация о деятельности компании.</p>
				
				<p><a href = "http://light-snab.ru/">light-snab.ru</a></p>
				<p>
				<span data-form = "Проект Лайтснаб" class = "allBtn unisend_win">Хочу так же</span>
				</p>
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/lightsnab/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#ffe300;color: #000000;">#ffe300</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#f3f3f5;color: #000000;">#f3f3f5</div>
				<div class = "colorBlk" style = "background-color:#37363b;color: white;">#37363b</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Главная страница</h2>
			<img src = "../img/portfolio/lightsnab/main.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/lightsnab/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/lightsnab/nature-ls.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	<div class = "portfolioControl">
		<a title = "Сайт - Пропуска на МКАД" href = "https://web-diff.ru/portfolio/project-propuska" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Сайт - Поселок Селенга" href = "https://web-diff.ru/portfolio/project-selenga" class = "next"></a>
	</div>
	
	<?php include("../footer.php");?>
	
</body>
</html>