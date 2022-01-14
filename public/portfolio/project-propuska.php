<!DOCTYPE html>
<html lang="ru">

<?php 

$pageTitle = "Кейс: Создание сайта 'Пропуска на МКАД' - Web Diff";
$pageDescription = "Цель проекта: Разработка информационного сайта с привязкой API сервиса по проверке пропусков на территорию г. Москва. Сайт полность подготовлен и успешно продвигается средства средствами классического SEO.";
$pageImgAdress = "https://web-diff.ru/img/portfolio/propuska/present.jpg";


include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Создание сайта "Пропуска на МКАД"
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Создание сайта "Пропуска на МКАД"</h1>
				<p>Цель проекта: Разработка информационного сайта с привязкой API сервиса по проверке пропусков на территорию г. Москва. Сайт полность подготовлен и успешно продвигается средства средствами классического SEO.</p>
				<span data-form = "Проект Пропуска на МКАД" class = "allBtn unisend_win">Хочу так же</span>
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/propuska/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#ffc40a;color: black;">#ffc40a</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#424244;color: white;">#424244</div>
				<div class = "colorBlk" style = "background-color:#e8e9eb;color: black;">#e8e9eb</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Главная страница</h2>
			<img src = "../img/portfolio/propuska/screen-pm.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/propuska/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/propuska/nature-pm.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	<div class = "portfolioControl">
		<a title = "Сайт - EasyComp 24" href = "https://web-diff.ru/portfolio/project-easy-comp" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Сайт - Лайтснаб" href = "https://web-diff.ru/portfolio/project-lightsnab" class = "next"></a>
	</div>
	
	<?php include("../footer.php");?>
	
</body>
</html>