<?php
/**
 * Created by PhpStorm.
 * User: Sestrenskyi-VO
 * Date: 2016-02-23
 * Time: 03:45
 */
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
?>
<?php
\Bitrix\Main\GroupTable::add([
    'NAME'=>'Имя группы',
    'DESCRIPTION'=>'Группа добавлена с использованием API ORM D7'
]);

?>
<? require( $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php' ); ?>