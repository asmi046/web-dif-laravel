@extends('layouts.main')

@section('content')
    <div class = "center portfolio_all portfolio_bcramp ">
        <a href = "https://web-diff.ru/">Главная</a> / <a href = "https://web-diff.ru/portfolio/">Портфолио</a> / Разработка сайта КД "Боева Дача"
    </div>
    <div class = "center portfolio_osnblk">
        <div class = "p_info">
            <h1>Разработка сайта КД "Боева Дача"</h1>
            <p>Мы разработали концепт сайта для клубного дома в элитном районе города Курска. Презентационный сайт с интеграцией VR на страницах сайта.</p>
            
            <p><a href = "http://boeva-dacha.ru/">boeva-dacha.ru</a></p>
            <p>
            <span data-form = "Проект Боева Дача" class = "allBtn unisend_win">Хочу так же</span>
            </p>
        </div>
        <div class = "p_picture">
            <img src = "../img/portfolio/boeva/present.<?php global $imgRaz; echo $imgRaz; ?>">
        </div>
    </div>

    <div class = "center portfolio_all portfolio_colors">
        <h2>Цветовое решение</h2>
        <div class = "clrWraper">
            <div class = "colorBlk" style = "background-color:#8a754a;color: white;">#8a754a</div>
            <div class = "colorBlk" style = "background-color:#FFFFFF; border: 1px solid #28475C;">#FFFFFF</div>
            <div class = "colorBlk" style = "background-color:#dfba6a;color: white;">#dfba6a</div>
        </div>
    </div>

@endsection