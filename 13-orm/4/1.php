<?php
/**
 * Created by PhpStorm.
 * User: Sestrenskyi-VO
 * Date: 2016-02-28
 * Time: 11:43
 */
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

//Новое ядро d7
$result = \Bitrix\Main\UserTable::getList(array(
    'filter'=>array('ID'=>'1'),
    'select'=>array('LOGIN')
    //'select'=>array('*')
));

echo 'Пользователь по фильтру: <br>';
while( $row = $result->fetch() ){
    dump($row);
}


require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');

