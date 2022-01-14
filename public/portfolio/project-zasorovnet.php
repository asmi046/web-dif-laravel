<!DOCTYPE html>
<html lang="ru">

<?php 


$pageTitle = "Кейс: Разработка сайта службы 'Zasoroff.net' - Web Diff";
$pageDescription = "Сайт службы по прочистке канализации 'Zasoroff.net', мы разработали сайт службы и вынесли услуги на отдельные страницы для организации рекламной компании в Яндекс и Google.";
$pageImgAdress = "https://web-diff.ru/img/portfolio/zasorovnet/present.webp";


include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Разработка сайта службы "Zasoroff.net" 
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Разработка сайта службы "Zasoroff.net"</h1>
				<p>Сайт службы по прочистке канализации "Zasoroff.net", мы разработали сайт службы и вынесли услуги на отдельные страницы для организации рекламной компании в Яндекс и Google.</p>
				
				<p><a href = "https://netzasorof.ru/">NetZasorof.ru</a></p>
				<p>
				<span data-form = "Проект ЗасоровНет" class = "allBtn unisend_win">Хочу так же</span>
				</p>
				
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/zasorovnet/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#0076c0;color: white;">#0076c0</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#f3f3f5;color: #000000;">#f3f3f5</div>
				<div class = "colorBlk" style = "background-color:#37363b;color: white;">#37363b</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Главная страница</h2>
			<img src = "../img/portfolio/zasorovnet/main.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/zasorovnet/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/zasorovnet/nature-zn.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	
	<div class = "portfolioControl">
		<a title = "Сайт - PotapovOfficial" href = "https://web-diff.ru/portfolio/project-potapov" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Сайт - EasyComp 24" href = "https://web-diff.ru/portfolio/project-easy-comp" class = "next"></a>
	</div>
	
	
	<?php include("../footer.php");?>
	
</body>
</html>