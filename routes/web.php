<?php

use app\core\Application;

$app->router->get('/','home');

$app->router->get('/contact',function(){
    return 'hallow world';
});

