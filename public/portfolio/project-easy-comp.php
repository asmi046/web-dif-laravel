<!DOCTYPE html>
<html lang="ru">

<?php 

$pageTitle = "Кейс: Редизайн сайта EasyComp24 - Web Diff";
$pageDescription = "Цель проекта: разработать новый концепт дизайна сайта для компании EasyComp24, уйти от ресованных персонажей, добавить живых людей и оптимизировать рабочее пространство сайта.";
$pageImgAdress = "https://web-diff.ru/img/portfolio/easycom_new/present.jpg";

include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp">
		<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Редизайн сайта EasyComp24
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Редизайн сайта EasyComp24</h1>
				<p>Цель проекта: разработать новый концепт дизайна сайта для компании EasyComp24, уйти от ресованных персонажей, добавить живых людей и оптимизировать рабочее пространство сайта.</p>
				<p></p>
				<span data-form = "Проект Изикомп" class = "allBtn unisend_win">Хочу так же</span>
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/easycom_new/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#6cc72a;color: white;">#6cc72a</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#28475c;color: white;">#28475c</div>
				<div class = "colorBlk" style = "background-color:#3a424d;color: white;">#3a424d</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Главная страница</h2>
			<img src = "../img/portfolio/easycom_new/main.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/easycom_new/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/easycom_new/2.jpg">
		</div>
		
	</section>
	
	<div class = "portfolioControl">
		<a title = "Проект Засоров Нет" href = "https://web-diff.ru/portfolio/project-zasorovnet" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Проект - Пропуска Мкад" href = "https://web-diff.ru/portfolio/project-propuska" class = "next"></a>
	</div>
	
	<?php include("../footer.php");?>
	
</body>
</html>