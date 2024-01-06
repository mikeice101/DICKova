<?php

class Route
{

    static function index()
    {
        $url = $_SERVER['REQUEST_URI'];
        $method = $_SERVER["REQUEST_METHOD"];

        switch ($method) {
            case 'GET':


            case 'POST':
        }


    }

}