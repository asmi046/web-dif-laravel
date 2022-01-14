<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioElement extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio_elements')->insert([
            'name' => 'Разработка сайта КД "Боева Дача"',
            'smile_name' => 'Сайт КД "Боева Дача"',
            'type' => "Корпоративный сайт",
            'smile_description' => 'Мы разработали концепт сайта для клубного дома в элитном районе города Курска. Презентационный сайт с интеграцией VR на страницах сайта.',
            'site_lnk' => 'http://boeva-dacha.ru/',
            'directory' => 'boeva',
            'obl_img' => 'obl.jpg',
            'main_img' => 'present.jpg',
            'colors' => '#8a754a|w,#FFFFFF|b,#dfba6a|w',
        ]);
        
        DB::table('portfolio_elements')->insert([
            'name' => 'Создание сайта "Заправка картриджей ДМ"',
            'smile_name' => 'Лендинг "Заправка картриджей ДМ"',
            'type' => "Посадочная страницы",
            'smile_description' => 'Мы разработали посадочную страницу для проведения контекстной рекламной компании сервиса по заправке картриджей  компании ДМ.',
            'site_lnk' => 'http://dm-company.ru/zapravka-kartridgey/',
            'directory' => 'dm_lend',
            'obl_img' => 'obl.jpg',
            'main_img' => 'present.jpg',
            'colors' => '#005bae|w,#FFFFFF|b,#e4eff5|w,#292a2c|w',
        ]);
        
        DB::table('portfolio_elements')->insert([
            'name' => 'Разработка сайта компании "Идея Строй"',
            'smile_name' => 'Сайта компании "Идея Строй"',
            'type' => "Сайт визитка",
            'smile_description' => 'Мы создали сайт визитку для компании застройщика который полностью соответствует требованиям законодательства относительно сайтов компаний данного вида деятельности.',
            'site_lnk' => 'http://idea-stroi.ru/',
            'directory' => 'ideastroy',
            'obl_img' => 'obl.jpg',
            'main_img' => 'present.jpg',
            'colors' => '#B49F7E|w,#FFFFFF|b,#d8df20|b,#333333|w',
        ]);
        
        DB::table('portfolio_elements')->insert([
            'name' => 'Разработка сайта-портфолио "Интерьерно"',
            'smile_name' => 'Сайта-портфолио "Интерьерно"',
            'type' => "Сайт визитка",
            'smile_description' => 'Мы разработали сайт-портфолио и страницу для публикации ссылок в Instagramm для компании "Интерьерно". Сайт  расчитан на публикацию мпректов по мебелеровке помещений с фото и видео материалами.',
            'site_lnk' => 'http://portfolio.interierno.com/',
            'directory' => 'interierno',
            'obl_img' => 'obl.jpg',
            'main_img' => 'present.jpg',
            'colors' => '#33bd3d|w,#FFFFFF|b,#D4C528|w,#333333|w',
        ]);
        
        DB::table('portfolio_elements')->insert([
            'name' => 'Редизайн сайта EasyComp24',
            'smile_name' => 'Редизайн сайта EasyComp24',
            'type' => "Корпоративный сайт",
            'smile_description' => 'Цель проекта: разработать новый концепт дизайна сайта для компании EasyComp24, уйти от ресованных персонажей, добавить живых людей и оптимизировать рабочее пространство сайта.',
            'site_lnk' => '',
            'directory' => 'easycom_new',
            'obl_img' => 'obl.jpg',
            'main_img' => 'present.jpg',
            'colors' => '#6cc72a|w,#FFFFFF|b,#28475c|w,#3a424d|w',
        ]);
        
        DB::table('portfolio_elements')->insert([
            'name' => 'Разработка сайта компании "LightSnab"',
            'smile_name' => 'Сайт компании "LightSnab"',
            'type' => "Корпоративный сайт",
            'smile_description' => 'Мы разработали корпоративный сайт для компании "LightSnab", на сайте размещена основная информация о деятельности компании.',
            'site_lnk' => 'http://light-snab.ru/',
            'directory' => 'lightsnab',
            'obl_img' => 'obl.jpg',
            'main_img' => 'present.jpg',
            'colors' => '#ffe300|w,#FFFFFF|b,#f3f3f5|w,#37363b|w',
        ]);
        
        DB::table('portfolio_elements')->insert([
            'name' => 'Разработка сайта компании "Русский ФабрикантЪ"',
            'smile_name' => 'Сайт "Русский ФабрикантЪ"',
            'type' => "Корпоративный сайт",
            'smile_description' => 'Мы разработали сайт компании "Русский ФабрикантЪ". Презентационный сайт основная цель которого показать продукцию компании и ее характеристики.',
            'site_lnk' => 'http://makmol.ru/',
            'directory' => 'makmol',
            'obl_img' => 'obl.jpg',
            'main_img' => 'present.jpg',
            'colors' => '#706E60|w,#FFFFFF|b,#b5a170|w,#BE1E2D|w',
        ]);
    }
}
