<!DOCTYPE html>
<html lang="ru">

<?php 

$pageTitle = "Кейс: Разработка сайта ведущего 'PotapovOfficial' - Web Diff";
$pageDescription = "Личный сайт ведущего Александра Потапова. Мы разработали сайт и дизайн логотипа, на сайте расположено портфолио ведущего, прайс и необходимая контактная информация.";
$pageImgAdress = "https://web-diff.ru/img/portfolio/potapov/present.webp";


include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Разработка сайта ведущего "PotapovOfficial"
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Разработка сайта ведущего "PotapovOfficial"</h1>
				<p>Личный сайт ведущего Александра Потапова. Мы разработали сайт и дизайн логотипа, на сайте расположено портфолио ведущего, прайс и необходимая контактная информация.</p>
				
				<p><a href = "https://potapovofficial.ru/">PotapovOfficial.ru</a></p>
				<p>
				<span data-form = "Проект PotapovOfficial" class = "allBtn unisend_win">Хочу так же</span>
				</p>
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/potapov/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#c51e3a;color: white;">#c51e3a</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#333333;color: white;">#333333</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Главная страница</h2>
			<img src = "../img/portfolio/potapov/screen1.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/potapov/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/potapov/nature.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	<div class = "portfolioControl">
		<a title = "Сайт - Идея Строй" href = "https://web-diff.ru/portfolio/project-ideastroy" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Сайт - Засоров Нет" href = "https://web-diff.ru/portfolio/project-zasorovnet" class = "next"></a>
	</div>
	
	<?php include("../footer.php");?>
	
</body>
</html>