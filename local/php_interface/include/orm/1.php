<?php
/**
 * Created by PhpStorm.
 * User: Sestrenskyi-VO
 * Date: 2016-02-23
 * Time: 03:23
 */
AddEventHandler('main', 'OnBeforeGroupAdd', 'MyOnBeforeGroupAdd');

function MyOnBeforeGroupAdd( $arFields ){
    dump($arFields);
}