<?php
/**
 * Created by PhpStorm.
 * User: hongmj
 * Date: 2018/6/5
 * Time: 23:17
 */

namespace System\Core;


class ApplicationBase
{
    public static function run(){
        list($controller,$action) = Route::parseUri();
        var_dump($controller,$action);
        echo "application run";
    }

    //url解析获取controller、action

    //实例化controller

    //获取respond返回值


}