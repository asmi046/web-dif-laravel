<!DOCTYPE html>
<html lang="ru">

<?php 

$pageTitle = "Кейс: Разработка сайта для психотерапевта Нины Марченко - Web Diff";
$pageDescription = "Цель проекта: Разработать персональный сайт и несколько посадочных страниц для рекламы авторских терапефтических туров. ";
$pageImgAdress = "https://web-diff.ru/img/portfolio/marhenko/present.jpg";


include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Разработка сайта для психотерапевта Нины Марченко
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Разработка сайта для психотерапевта Нины Марченко</h1>
				<p>Цель проекта: Разработать персональный сайт и несколько посадочных страниц для рекламы авторских терапефтических туров. </p>
				<span data-form = "Проект Марченко" class = "allBtn unisend_win">Хочу так же</span>
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/marhenko/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#4fad9d;color: white;">#4fad9d</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#f47555;color: white;">#f47555</div>
				<div class = "colorBlk" style = "background-color:#453c3d;color: white;">#453c3d</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Посадочная страница для тура в Черногорию</h2>
			<img src = "../img/portfolio/marhenko/Screen-1.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/marhenko/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Страница блога</h2>
			<img src = "../img/portfolio/marhenko/Screen-2.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/marhenko/nature_NM.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	
	<div class = "portfolioControl">
		<a title = "Сайт - Портфолио Интерьерно" href = "https://web-diff.ru/portfolio/project-interierno" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Сайт Online-Media" href = "https://web-diff.ru/portfolio/project-onlinemedia" class = "next"></a>
	</div>
	
	
	<?php include("../footer.php");?>
	
</body>
</html>