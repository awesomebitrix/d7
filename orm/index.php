<?php
/**
 * Created by PhpStorm.
 * User: Sestrenskyi-VO
 * Date: 2016-02-21
 * Time: 23:42
 */
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('ORM');


$by = 'ID'; // элемент сортировки
$order = 'sort'; //направления сортировки
$result = CGroup::GetList( $by, $order, array('ID'=>1) );



echo 'Группа пользователей по фильтру' . "<br/>";
while( $row = $result->fetch() ){
    //dd($row);
    dump($row);
}




CModule::IncludeModule('iblock');

$result2 = CIBlockElement::GetList(false, ['ID'=>1], false, false, ['NAME']);
echo 'Элемент ИБ по фильтру' . "<br/>";
while( $row = $result2->fetch() ){
    //dd($row);
    dump($row);
}


/*
BookTable::getList([
    'select' => ... //имена полей,  которые необходимо получить в результате
    'filter'=> ...  //описание для фильтра WHERE и HAVING
    'group'=>...    //явное указание полей,  по которым нужно группировать результат
    'order'=>...    //параметры сортировки
    'limit'=>...    //количество записей
    'offset'=>...   //сммещения для limit
    'runtime'=> ... //динамически определенные поля
]);
*/

//ORM

$result = \Bitrix\Main\GroupTable::getList([
    'select'=>['NAME'],
    'filter'=>['ID'=>1]
]);
echo 'ORM Группа пользователей по фильтру' . "<br/>";
while( $row = $result->fetch() ){
    dump($row);
}




\Bitrix\Main\Loader::includeModule('iblock');
$result22 = \Bitrix\Iblock\ElementTable::getList([
    'select'=>['NAME'],
    'filter'=>['ID'=>1]
]);
echo 'ORM Элемент ИБ по фильтру' . "<br/>";
while( $row = $result22->fetch()  ){
    dump($row);
}






?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>