<?php 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('Exception');



//throw new \Bitrix\Main\ArgumentTypeException('Аргумент,  которые генерирует исключения', 'Тип аргумента');

try{
	throw new \Bitrix\Main\ArgumentTypeException('Аргумент,  которые генерирует исключения', 'Тип аргумента');
}catch( Exception $e){
	echo 'Перехваченое исключения';
}



?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>