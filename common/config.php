<?php
//define("ROOT",str_replace('\\','/',dirname(__FILE__)));
define("_COMMON_",str_replace('\\','/',__DIR__));
define("_INDEX_", str_replace('\\','/',dirname(__DIR__)));


$pos= strripos(_INDEX_, '/');
$temp= substr(_INDEX_,$pos);
define('_PUBLIC_',$temp.'/common/public');      

?>