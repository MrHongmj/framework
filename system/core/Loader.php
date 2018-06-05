<?php
/**
 * Created by PhpStorm.
 * User: hongmj
 * Date: 2018/6/5
 * Time: 22:49
 */
namespace System\Core;

class Loader
{
    private static $classMap;
    public function __construct()
    {

    }

    public static function autoLoad($class){
        $file = self::findFile($class);
        if(file_exists($file)){
            self::requireFile($file);
        }else{
            throw new \Exception("auto load file“".$file."” is not exits");
        }
    }

    private static function findFile($class){
        $pathArr = explode(DIRECTORY_SEPARATOR,$class);
        $fileName = end($pathArr).".php";
        array_pop($pathArr);
        $filePath = ROOT_DIR;

        if(!empty($pathArr)){
            foreach ($pathArr as $path){
                $filePath .= strtolower($path).DIRECTORY_SEPARATOR;
            }
        }

        return $filePath.$fileName;
    }

    private static function requireFile($file){
        if (is_file($file)) {
            require $file;
        }
    }

    public static function test($a)
    {
        md($a);
    }

}