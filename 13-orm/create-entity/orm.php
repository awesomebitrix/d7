<?php
/**
 * Created by PhpStorm.
 * User: Sestrenskyi-VO
 * Date: 2016-02-28
 * Time: 12:05
 */
namespace Academy\Orm13;

use Bitrix\Main\Entity;
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

class OrmTable extends Entity\DataManager {

    /**
     * @return string имя таблицы.  которую мы описуем
     */
    public static function getTableName(){
        return 'academy_orm';
    }

    /**
     * @return array описание полей таблицы
     */
    public static function getMap(){
        return array(
            new Entity\IntegerField('ID', array(
                'primary' => true,     // поле обезательное для заполенения
                'autocomplete' => true // автозаполения
            )),
            new Entity\StringField('ISBN', array(
                'required' => true,
            )),
            new Entity\StringField('TITLE'),
            new Entity\DataField('PUBLISH_DATE')
        );
    }
}



