<!DOCTYPE html>
<html lang="ru">

<?php 
$pageTitle = "Кейс: Разработка сайта компании 'Идея Строй' - Web Diff";
$pageDescription = "Мы создали сайт визитку для компании застройщика который полностью соответствует требованиям законодательства относительно сайтов компаний данного вида деятельности.";
$pageImgAdress = "https://web-diff.ru/img/portfolio/ideastroy/present.webp";

include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Разработка сайта компании "Идея Строй"
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Разработка сайта компании "Идея Строй"</h1>
				<p>Мы создали сайт визитку для компании застройщика который полностью соответствует требованиям законодательства относительно сайтов компаний данного вида деятельности.</p>
				
				<p><a href = "http://idea-stroi.ru/">idea-stroi.ru</a></p>
				<p>
				<span data-form = "Проект Идея-Строй" class = "allBtn unisend_win">Хочу так же</span>
				</p>
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/ideastroy/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#B49F7E;color: white;">#B49F7E</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#d8df20;color: #000000;">#d8df20</div>
				<div class = "colorBlk" style = "background-color:#333333;color: white;">#333333</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Главная страница</h2>
			<img src = "../img/portfolio/ideastroy/main.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/ideastroy/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Раздел О компании</h2>
			<img src = "../img/portfolio/ideastroy/about.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Раздел Контакты</h2>
			<img src = "../img/portfolio/ideastroy/contacts.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/ideastroy/nature-is.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	<div class = "portfolioControl">
		<a title = "Проект Боева Дача" href = "https://web-diff.ru/portfolio/project-boeva" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Сайт - PotapovOfficial" href = "https://web-diff.ru/portfolio/project-potapov" class = "next"></a>
	</div>
	
	<?php include("../footer.php");?>
	
</body>
</html>