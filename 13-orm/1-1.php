<?php
/**
 * Created by PhpStorm.
 * User: Sestrenskyi-VO
 * Date: 2016-02-23
 * Time: 03:07
 */
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');

$group = new CGroup;
$group->Add([
    'NAME'=>'Имя группы',
    'DESCRIPTION'=>'Группа добавлена с использованием API старого ядра'
]);




require( $_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php' );