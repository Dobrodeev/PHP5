<?php
/**
 * Created by PhpStorm.
 * User: dobrodeev
 * Date: 07.08.2018
 * Time: 17:53

return array(
    'news/([0-9]+)'=>'news/view/$1', // шаблон регулярки
    ''=>'news/index'
);*/
return array(
    'cart'=>'cart/view',// обращаемся к классу cartController & к методу view
    'news/([0-9]+)' => 'news/view/$1',// обращаемся к классу newsController и к методу actionView к конкретному номеру новости
    '' => 'news/index',// обращаемся к классу newsController и к методу actionIndex для вывода всех новостей
);