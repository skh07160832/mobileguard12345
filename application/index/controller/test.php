<?php
	
//require('../../common/config.php');
//$t=str_replace('\\','/',__DIR__);



require(stristr(str_replace('\\','/',__DIR__)
,'common',true).'common/config.php');
echo _COMMON_."<br/>";
echo _INDEX_."<br/>";
//echo _PUBLIC_;
echo "=========";


echo _PUBLIC_;
class test{
	public function myfunc(){
		echo _PUBLIC_."fdtgdfgd";
		echo "方法";
}
myfunc();
}

//$qqq=new ss();
//$qqq->myfunc();
echo "=========";
 // exit;          
//require(stristr(__DIR__,'finalphp',true).'finalphp/common/config.php');
require_once(_INDEX_.'/common/init.inc.php');
//$r=_COMMON_;
//$r= str_replace('\\','/',_COMMON_);
//define("_TUPIAN_",str_replace('\\','/',_INDEX_).'/common/图片' );
//echo _TUPIAN_;

//echo "<img src='http://localhost/finalphp/common/图片/tupian1.jpg'>";
///echo "<img src='/finalphp/common/图片/tupian1.jpg'>";
//echo $r;
//echo "<a><img src='".$r."/图片/tupian1.jpg'></a>";
$a='eewrewr';
//echo _COMMON_;
echo "<br/>";
echo _INDEX_;
$smarty->assign("a",$a);
$smarty->display(_INDEX_."/templates/index/test.tpl");

?>