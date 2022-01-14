<!DOCTYPE html>
<html lang="ru">

<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153068751-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153068751-1');
</script>

<meta charset="utf-8">


<title>Web-diff</title>
<meta name="description" content="Web-diff - разработка сайтов">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400|PT+Sans&display=swap" rel="stylesheet">
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#e26560">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#e26560">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#e26560">
<link rel="stylesheet" href="style.css?v=1.0.3">

<link rel="apple-touch-icon" sizes="256x256" href="img/icon256.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/icon32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/icon16.png">
<link rel="mask-icon" href="img/logo-mini.svg" color="#FFFFFF">
<meta name="theme-color" content="#e26560">

<meta name="yandex-verification" content="3d8799b5b6c59a5b" />

</head>

<body class = "main_page">

<header class = "h_inpage">
		<a class = "logoInPage" href = "#"></a>
		<ul class = "menu menu-header mobileHide">
            <li><a href = "#uslugi">Услуги</a></li>
            <li><a href = "portfolio/">Портфолио</a></li>
            <li><a href = "contacts.php">Контакты</a></li>
		</ul>
		<div class = "h_wraper mobileHide">
			<a onclick = "ym(56272033, 'reachGoal', 'phonetap'); return true;" href = "tel:79036330801">7 903 633 08 01</a>
		</div>
		
		<a class = "phone_h desctopHide" href = "tel:+79036330801"></a>
		
		<div class = "hamburger desctopHide">
			<div class = "hm_line"></div>
			<div class = "hm_line"></div>
			<div class = "hm_line"></div>
		</div>
</header>

@yield('content')

<footer>
		<div class = "logo-white"></div>
		<ul class = "menu menu-footer">
            <li><a href = "https://web-diff.ru/#uslugi">Услуги</a></li>
            <li><a href = "https://web-diff.ru/portfolio/">Портфолио</a></li>
            <li><a href = "https://web-diff.ru/contacts.php">Контакты</a></li>
		</ul>
		<div class = "rekvizits">
			<span>ИП Смирнов Андрей Алексеевич</span></br>
			<span>ИНН: 463246349734</span></br>
			<span>ОГРН: 313463235300020</span></br>
			<a href = "https://asmi-studio.ru/">Проэкт Asmi-Studio.ru</a>
		</div>
	</footer>
	
	<!-- <script type="text/javascript" src="js/jquery.js?ver=1.12.5"></script>
	<script type="text/javascript" src="js/jquery.arcticmodal-0.3.min.js?ver=1.0.1"></script>
	<script type="text/javascript" src="js/scripts.min.js?ver=1.0.1"></script>
	<script src="js/scripts.js?ver=1.0.1"></script> -->
	
</body>
</html>