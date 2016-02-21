<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

function dd( $data ){
	global $APPLICATION;
	$APPLICATION->RestartBuffer();
	dump($data);
	exit;	
}
   
?>