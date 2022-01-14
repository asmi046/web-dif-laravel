<!DOCTYPE html>
<html lang="ru">

<?php 

$pageTitle = "Кейс: Сайт Tabula Rassa - банкротство физлиц - Web Diff";
$pageDescription = "Посадочная страница для рекламы услуг по банкротству физических лиц. Были проведены работы по разработке сайта и настройке событий Яндекс.Метрики.";
$pageImgAdress = "https://web-diff.ru/img/portfolio/tabula/present.webp";


include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Сайт Tabula Rassa - банкротство физлиц
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Сайт Tabula Rassa - банкротство физлиц</h1>
				<p>Посадочная страница для рекламы услуг по банкротству физических лиц. Были проведены работы по разработке сайта и настройке событий Яндекс.Метрики.</p>
				<p><a href = "https://fizbankrot46.ru/">fizbankrot46.ru</a></p>
				<p>
				<span data-form = "Проект Tabula Rassa" class = "allBtn unisend_win">Хочу так же</span>
				</p>
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/tabula/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#be1e2d;color: white;">#be1e2d</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#e8e9ed;color: #FFFFFF;">#e8e9ed</div>
				<div class = "colorBlk" style = "background-color:#37363b;color: white;">#37363b</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Главная страница</h2>
			<img src = "../img/portfolio/tabula/main-tabula.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/tabula/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/tabula/nature-tab.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	<div class = "portfolioControl">
		<a title = "Сайт - Самосвал46" href = "https://web-diff.ru/portfolio/project-samosval" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Сайт - Русский ФабрикантЪ" href = "https://web-diff.ru/portfolio/project-makmol" class = "next"></a>
	</div>
	
	<?php include("../footer.php");?>
	
</body>
</html>