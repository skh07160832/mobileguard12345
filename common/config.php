<?php
define("_INDEX_", str_replace('\\','/',dirname(__DIR__)));//定义首页地址
define("_COMMON_",str_replace('\\','/',__DIR__));//定义conmon地址
define('_APP_',_INDEX_.'/application' );//定义application地址

$pos= strripos(_INDEX_, '/');
$temp= substr(_INDEX_,$pos);
define('_PUBLIC_',$temp.'/public');  //定义public地址    
define('INDEX',$temp);  //定义public地址    

?>