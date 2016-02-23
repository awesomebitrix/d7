<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

function dd( $data ){
	global $APPLICATION;
	$APPLICATION->RestartBuffer();
	dump($data);
	exit;	
}

// старое ядро
AddEventHandler('main', 'OnBeforeGroupAdd', 'MyOnBeforeGroupAdd');
function MyOnBeforeGroupAdd( $arFields ){
    dump($arFields);
}


//новое ядро.  добавления обработчика события
$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler(
    'main',                             //ID модуля
    '\Bitrix\Main\Group::OnBeforeAdd',  //указываем namespace сущи. и названия метода,  любой из 9,  которые мы можем использовать
    'onBeforeAdd'                       //имя метода обработчика события
);
function onBeforeAdd( \Bitrix\Main\Entity\Event $event ){
    //$event - это обьект ВАЖНО ПОМНИТЬ
    $fields = $event->getParameter('fields');
    dump($fields);
}



//события после удаления группы пользователя
$eventManager->addEventHandler(
    'main',
    '\Bitrix\Main\Group::OnAfterDelete',
    'onAfterDelete'
);
function onAfterDelete( \Bitrix\Main\Entity\Event $event ){
    $primary = $event->getParameter('primary'); //ключ удаленного обьекта.  он передаеться во всех методах удаления D7
    dump($primary['ID']);
}











?>