<?php
/**
 * Created by PhpStorm.
 * User: hongmj
 * Date: 2018/6/5
 * Time: 23:25
 */

namespace System\Core;


class Route
{
    public static $controller = 'index';
    public static $action = 'index';
    public function __construct()
    {

    }

    public static function parseUri(){
        if (isset($_SERVER['REQUEST_URI']) && !empty($_SERVER['REQUEST_URI'])) {
            $pathArr = explode('/',ltrim($_SERVER['REQUEST_URI'],'/'));
            self::$controller = isset($pathArr['0'])&&!empty($pathArr['0']) ? $pathArr['0'] : self::$controller;
            self::$action = isset($pathArr['1'])&&!empty($pathArr['1']) ? $pathArr['1'] : self::$action;
        }
        return [self::$controller,self::$action];
    }
}