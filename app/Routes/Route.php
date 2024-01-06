<?php

namespace App\Routes;

class Route
{

    static function index()
    {
        $url = $_SERVER['REQUEST_URI'];
        $method = $_SERVER["REQUEST_METHOD"];

        switch ($method) {
            case 'GET':
                require('../app/Views/Developer.php' );
                break;
            case 'POST':
                self::post($url);
                break;
        }
    }
    private static function post($url)
    {
    }

}