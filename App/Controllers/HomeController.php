<?php

namespace ReactMVC\App\Controllers;
use ReactMVC\App\Models\Lang;

class HomeController
{

    public static function index()
    {
        $lang = new Lang('en');
        $hello = $lang->get('hello');

        $data = [
            'appName' => $_ENV['APP_NAME'],
            'hello' => $hello,
        ];
        view('index', $data);
    }
}