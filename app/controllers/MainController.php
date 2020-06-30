<?php

namespace app\controllers;

use webshop\libs\Cache;

class MainController extends AppController
{
    // public $layout = 'test';

    public function indexAction()
    {
        $posts = \R::findAll('tables');
        // $this->layout = 'test';
        // echo __METHOD__;
        $this->setMeta('Главная страница', 'Описание', "Ключи");
        $name = 'test';
        $age = 30;
        $names = ['Andrey', 'Jane'];
        $cache = Cache::instance();
        $this->set(compact('name','age', 'names', 'posts'));
    }
}