<?php
//require_once('../../config.php');
$link_l="<link rel='stylesheet' type='text/css' href='";	
$link_r="'/>";
$script_l='<script type="text/javascript" src="';
$script_r='"></script>';

$rn="\r\n\t";
$arr=[
 $link_l._PUBLIC_.'/static/assets/font-awesome-4.7.0/css/font-awesome.min.css'.$link_r,
 $link_l._PUBLIC_.'/static/assets/font-awesome-4.7.0/css/font-awesome.css'.$link_r,
 $script_l._PUBLIC_.'/static/assets/js/jquery-1.10.2.js'.$script_r

];
$a=implode($rn,$arr)."\r\n";
?>
