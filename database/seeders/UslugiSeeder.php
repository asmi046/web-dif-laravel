<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UslugiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('uslugi')->insert([
            'name' => 'Разработка сайта визитки',
            'price' => 12000,
            'show' => true,
            'description' => 'Простой сайт без системы управления поможет заявить о Вашей компании в сети и даст посетителям общее представление о Вашем бизнесе. Сайт будет снабжен простым но уникальным дизайном будет иметь форму обратной связи без спама.',
            'img_name' => 'site-visitka.svg'
        ]);
        
        \Illuminate\Support\Facades\DB::table('uslugi')->insert([
            'name' => 'Разработка Lending Page',
            'price' => 15000,
            'show' => true,
            'description' => 'Посадочная страница для продажи товара или услуги, самая важная для клиента информация поданная в максимально удобной форме + призыв к действию. Уникальный дизайн, CTA, тригеры стимулирующие посетителя к совершению действия.',
            'img_name' => 'site-lending.svg'
        ]);
        
        \Illuminate\Support\Facades\DB::table('uslugi')->insert([
            'name' => 'Разработка корпоративного сайта',
            'price' => 18000,
            'show' => true,
            'description' => 'Многостраничный сайт с системой управления (CMS). Неогрвниченные возможности по редактированию и добавлению материалов (текст, фото, видео) а так же дальнейшей доработке сайта. Вы получите уникальный дизайн и настройку SEO плагинов.',
            'img_name' => 'site-korporativ.svg'
        ]);
        
       \Illuminate\Support\Facades\DB::table('uslugi')->insert([
            'name' => 'Разработка сайта каталога',
            'price' => 20000,
            'show' => true,
            'description' => 'Рубрицированный каталог продукции с вложенными категориями и метками для ускоренного поиска +поиск по каталогу и настройка дополнительных полей для товара. Уникальный дизайн, система управления (CMS) и настройку SEO плагинов.',
            'img_name' => 'site-catalog.svg'
        ]);
        
        \Illuminate\Support\Facades\DB::table('uslugi')->insert([
            'name' => 'Разработка интернет-магазина',
            'price' => 25000,
            'show' => true,
            'description' => 'Полноценный интернет магазин с каталогом товаров, корзиной, покупкой в 1 клик. Возможность настройки дополнительных полей для товаров и вывод YML фида для контекстной рекламы или публикации в агрегаторах. Неограниченная возможность доработки.',
            'img_name' => 'site-shop.svg'
        ]);
    }
}
