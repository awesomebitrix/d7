<?php
/**
 * Created by PhpStorm.
 * User: Sestrenskyi-VO
 * Date: 2016-02-28
 * Time: 11:34
 */
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

$by ='ID';
$order = 'sort';
$result = CUser::GetList($by, $order, ['IDs'=>1], ['FIELDS'=>['LOGIN']] );

echo 'Пользователь по фильтру: <br>';
while( $row = $result->fetch() ){
    dump($row);
}


require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');