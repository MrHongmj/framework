<?php
/**
 * Created by PhpStorm.
 * User: hongmj
 * Date: 2018/6/5
 * Time: 22:22
 */
//单一入口
//常量定义

define("ROOT_DIR",dirname(__FILE__).DIRECTORY_SEPARATOR);

//应用目录
define("APP",ROOT_DIR."app".DIRECTORY_SEPARATOR);
//系统目录
define("SYSTEM",ROOT_DIR."system".DIRECTORY_SEPARATOR);

//系统核心类
define("CORE",SYSTEM."core".DIRECTORY_SEPARATOR);


//当前系统模式
define("DEBUG",true);

if(DEBUG){
    ini_set("display_errors","on");
}else{
    ini_set("display_errors","off");
}

include_once CORE."Loader.php";

spl_autoload_register("\System\Core\Loader::autoLoad");

System\Core\ApplicationBase::run();