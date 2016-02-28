<?php
/**
 * Created by PhpStorm.
 * User: Sestrenskyi-VO
 * Date: 2016-02-28
 * Time: 11:10
 */
require( $_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php' );
?>
Удаляем группу пользователей с ID <?php echo $_REQUEST['id']; ?>
<?php
$group = new CGroup;
$group->Delete($_REQUEST['id']);
?>
<?php require( $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php' );?>
