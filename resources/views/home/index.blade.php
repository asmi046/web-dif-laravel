@extends('layouts.main')

@include('portfolio.portfolio')

@section('content')
	<section class = "screen firstscreen">
		<div class = "firstscreen_blk left">
			<img class = "logo" src = "img/logo.svg">
			<div class = "h1wraper">
				<h1>Разработка сайтов</h1>
				<span class = "h1pn">Эксклюзивный подход и внимание к мелочам</span>
			</div>
			<span data-form = "Кнопка на 1-м экране" class = "allBtn unisend_win">Заказать сайт</span>
		</div>
		

		<div class = "firstscreen_blk rightr rightr_jpg"></div>

	</section>
	
	<section class = "margin_section uslugi"  id = "uslugi">
		<h2>Услуги и цены на разработку сайтов</h2>
		<div class = "center uslugi_bloks">
			@foreach ($uslugi as $item)
				<div class = "usluga">
					<div class = "iconka" style = "background-image:url(img/{{$item->img_name}});"></div>
					<div class = "text">
						<h3>{{$item->name}}</h3>
						<span class = "pText">
							{{$item->description}}
						</span>
						<span class = "price">от {{$item->price}} р.</span>
						<span data-form = "Кнопка заказать сайт-визитку" class = "allBtn unisend_win">Заказать</span>
					</div>
				</div>
			@endforeach
			
		</div>
	</section>
	
	@yield('portfolio_in_main')
	
	<section class = "margin_section contacts" id = "kontakts">
		<h2>Как с нами связаться</h2>
		<div class = "center contacts_bloks">
			<div class = "contacts_blok contact_left">
				<a onclick = "ym(56272033, 'reachGoal', 'phonetap'); return true;" class = "phone" href = "tel:+79036330801">7 903 633 08 01</a>
				<a class = "mail" href = "mailto:info@web-diff.ru">info@web-diff.ru</a>
				<div class = "soc_wraper">
                    <a target="_blank" class = "socbtn" id = "whatsapp" href = "https://wa.me/+79036330801"></a>
                    <a target="_blank" class = "socbtn" id = "telegramm"  href = "tg://resolve?domain=asmist"></a>
                    <a target="_blank" class = "socbtn" id = "instagramm" href = "https://www.instagram.com/asmistudio046/"></a>
				</div>
			</div>
			
			<div class = "contacts_blok contact_right">
				<form class = "form_inpodval">
					<input class = "name_fild" placeholder = "Ваше Имя" type = "text" class = "input_text" id = "name" />
					<input class = "tel_fild" placeholder = "Ваш телефон" type = "text" class = "input_phone" id = "phone" />
					<input class = "form_fild" type="hidden" name="form" value = "Форма контактов">
					<span class = "policyComment">
						Нажимая на кнопку "Отправить запрос" Вы принимаете <a href = "policy.php">политику конфиденциальности и обработки персональных данных</a> 
					</span>
					<span class = "allBtn unisend_btn" onclick = "ym(56272033, 'reachGoal', 'contactsend'); return true;">Заказать обратный звонок</span>
				</form>
			</div>
		</div>
	</section>
	
@endsection