<!DOCTYPE html>
<html lang="ru">

<?php 

$pageTitle = "Кейс: Создание сайта 'Заправка картриджей ДМ' - Web Diff";
$pageDescription = "Мы разработали посадочную страницу для проведения контекстной рекламной компании сервиса по заправке картриджей  компании ДМ.";
$pageImgAdress = "https://web-diff.ru/img/portfolio/dm_lend/present.jpg";

include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Создание посадочной страницы "Заправка картриджей ДМ"
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Создание сайта "Заправка картриджей ДМ"</h1>
				<p>Мы разработали посадочную страницу для проведения контекстной рекламной компании сервиса по заправке картриджей  компании ДМ. </p>
				
				<p><a href = "http://dm-company.ru/zapravka-kartridgey/">dm-company.ru</a></p>
				<p>
				<span data-form = "Проект ДМ заправка" class = "allBtn unisend_win">Хочу так же</span>
				</p>
				
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/dm_lend/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#005bae;color: white;">#005bae</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#e4eff5;color: #000000;">#e4eff5</div>
				<div class = "colorBlk" style = "background-color:#292a2c;color: white;">#292a2c</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Главная страница</h2>
			<img src = "../img/portfolio/dm_lend/main-dm-lend.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/dm_lend/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/dm_lend/nature-dm.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	<div class = "portfolioControl">
		<a title = "Сайт Online-Media" href = "https://web-diff.ru/portfolio/project-onlinemedia" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Сайт - Самосвал46" href = "https://web-diff.ru/portfolio/project-samosval" class = "next"></a>
	</div>
	
	<?php include("../footer.php");?>
	
</body>
</html>