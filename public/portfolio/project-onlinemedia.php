<!DOCTYPE html>
<html lang="ru">

<?php 

$pageTitle = "Кейс: Сайт рекламного агентства 'OnLine Media' - Web Diff";
$pageDescription = "Презентационный сайт для рекламного агентства 'OnLine Media', нами был разработан одностраничный сайт на котором размещена вся необходимая информация о деятельности компании и предоставляемых рекламных площадках";
$pageImgAdress = "https://web-diff.ru/img/portfolio/onlinemedia/present.jpg";


include("../head-tech.php");?>

<body class = "all_page">

	<?php include("../windows.php");?>


	<?php include("../header.php");?>
	
	<section class = "portfolio_section">
		<div class = "center portfolio_all portfolio_bcramp ">
			<a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Разработка сайта рекламного агентства "OnLine Media" 
		</div>
		<div class = "center portfolio_osnblk">
			<div class = "p_info">
				<h1>Сайт рекламного агентства "OnLine Media"</h1>
				<p>Презентационный сайт для рекламного агентства "OnLine Media", нами был разработан одностраничный сайт на котором размещена вся необходимая информация о деятельности компании и предоставляемых рекламных площадках</p>
				
				<p><a href = "http://24online.media/">24online.media</a></p>
				<p>
				<span data-form = "Проект OnLine Media" class = "allBtn unisend_win">Хочу так же</span>
				</p>
				
			</div>
			<div class = "p_picture">
				<img src = "../img/portfolio/onlinemedia/present.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_colors">
			<h2>Цветовое решение</h2>
			<div class = "clrWraper">
				<div class = "colorBlk" style = "background-color:#fd2f3c;color: white;">#fd2f3c</div>
				<div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
				<div class = "colorBlk" style = "background-color:#e8e9ed;color: #000000;">#e8e9ed</div>
				<div class = "colorBlk" style = "background-color:#313131;color: white;">#313131</div>
			</div>
		</div>
		
		
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Главная страница</h2>
			<img src = "../img/portfolio/onlinemedia/main-olm.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
		<div class = "center portfolio_all portfolio_mobile">
			<h2>Адаптация под мобильные устройства</h2>
			<div class = "p_picture">
				<img src = "../img/portfolio/onlinemedia/mob.<?php global $imgRaz; echo $imgRaz; ?>">
			</div>
		</div>
		
		<div class = "center portfolio_all portfolio_image">
			<h2>Аctually</h2>
			<img src = "../img/portfolio/onlinemedia/nature-olm.<?php global $imgRaz; echo $imgRaz; ?>">
		</div>
		
	</section>
	
	<div class = "portfolioControl">
		<a title = "Сайт - Доктор Марченко" href = "https://web-diff.ru/portfolio/project-marhenko" class = "prev"></a>
		<a title = "Все портфолио" href = "https://web-diff.ru/portfolio/" class = "all"></a>
		<a title = "Заправка картриджей ДМ" href = "https://web-diff.ru/portfolio/project-dm" class = "next"></a>
	</div>
	
	
	<?php include("../footer.php");?>
	
</body>
</html>