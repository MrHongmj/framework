<?php
/**
 * Created by PhpStorm.
 * User: hongmj
 * Date: 2018/6/5
 * Time: 23:12
 */
namespace System\Core;
function md($a){
    if(is_array($a)){
        print_r($a);
    }else{
        echo $a;
    }
}