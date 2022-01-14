<!DOCTYPE html>
<html lang="ru">

<?php 

$pageTitle = "Кейс: Разработка лендинга 'Самосвал46' - Web Diff";
$pageDescription = "Мы разработали посадочную страницу под контекстную рекламу для службы доставки сыпучих грузов 'Самосвал46'. На сайте динмически меняется шапка для различных запросов из контекста";
$pageImgAdress = "https://web-diff.ru/img/portfolio/samosval/present.jpg";

include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Разработка лендинга "Самосвал46"
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Разработка лендинга "Самосвал46"</h1>
				<p>Мы разработали посадочную страницу под контекстную рекламу для службы доставки сыпучих грузов "Самосвал46". На сайте динмически меняется шапка для различных запросов из контекста</p>
				<p><a href = "http://samosval046.ru/">samosval046.ru</a></p>
				<p>
				<span data-form = "Проект Самосвал46" class = "allBtn unisend_win">Хочу так же</span>
				</p>
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/samosval/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#fab347;color: #000000;">#fab347</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#e58c2e;color: white;">#e58c2e</div>
				<div class = "colorBlk" style = "background-color:#37c22b;color: white;">#37c22b</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Главная страница</h2>
			<img src = "../img/portfolio/samosval/main.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/samosval/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/samosval/nature-samosval.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	<div class = "portfolioControl">
		<a title = "Заправка картриджей ДМ" href = "https://web-diff.ru/portfolio/project-dm" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Сайт - Tabula Rssa" href = "https://web-diff.ru/portfolio/project-tabula" class = "next"></a>
	</div>
	
	<?php include("../footer.php");?>
	
</body>
</html>