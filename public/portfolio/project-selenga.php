<!DOCTYPE html>
<html lang="ru">

<?php 

$pageTitle = "Кейс: Разработка сайта - Коттеджный поселок 'Селенга' - Web Diff";
$pageDescription = "Сайт для коттеджного поселка 'Селенга' с инерактивной картой расположения земельных участков. Трафик на сайт приводится через контекстную рекламу и рекламу в осциальных сетях.";
$pageImgAdress = "https://web-diff.ru/img/portfolio/selenga/present.jpg";

include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Разработка сайта - Коттеджный поселок "Селенга"
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Разработка сайта - Коттеджный поселок "Селенга"</h1>
				<p>Сайт для коттеджного поселка "Селенга" с инерактивной картой расположения земельных участков. Трафик на сайт приводится через контекстную рекламу и рекламу в осциальных сетях.</p>
				<p><a href = "http://selenga.info/">selenga.info</a></p>
				<p>
				<span data-form = "Проект Селенга" class = "allBtn unisend_win">Хочу так же</span>
				</p>
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/selenga/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#76be43;color: white;">#76be43</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#8865ac;color: white;">#8865ac</div>
				<div class = "colorBlk" style = "background-color:#817272;color: white;">#817272</div>
				<div class = "colorBlk" style = "background-color:#f7b21d;color: #000000;">#f7b21d</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Главная страница</h2>
			<img src = "../img/portfolio/selenga/main.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/selenga/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Страница генплана</h2>
			<img src = "../img/portfolio/selenga/genplan.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/selenga/nature-sg.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	<div class = "portfolioControl">
		<a title = "Сайт - Лайтснаб" href = "https://web-diff.ru/portfolio/project-lightsnab" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Сайт - Портфолио Интерьерно" href = "https://web-diff.ru/portfolio/project-interierno" class = "next"></a>
	</div>
	
	<?php include("../footer.php");?>
	
</body>
</html>