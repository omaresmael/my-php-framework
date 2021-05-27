<?php

namespace app\controllers;

use app\core\Application;

class Controller
{
    public function home()
    {

        $params = [
            'name'=> 'ahmed',
        ];

        return Application::$app->router->renderView('home', $params);
    }
    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }
    public function handleContact(): string
    {
        return 'handle data';
    }
}