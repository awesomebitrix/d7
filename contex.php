<?php
/*
всего есть 9 событий унифицированых
1. onBefore<Action>
2. on<Action>
3. onAfter<Action>


события при добавлении
1. onBeforeAdd($fields)
2. onAdd($fields) - выполнения SQL запроса
3. onAfterAdd($fields)

события для обновлнения
1. onBeforeUpdate(primary, fields) - можно изменить данные,  сгенерировать ошибку
2. onUpdate(primary, fields) - можно сгенерировать ошибку, выполнения SQL запроса
3. onAfterUpdate(primary, fields) -

события удаления
1. onBeforeDelete(primary)
2. onDelete(primary)
3. onAfterDelete(primary)


////------- 12.4 Отношения к ошибкам програмирования -------



////------- 12.5 Создание своих сущностей -------
Все методы,  события .... создаються во время описания сущности
Если мы начали описовать сущность,  тогда название файла и названия класса доджны быть сообветствующими, к примеру:
файл  - orm.php
класс - OrmTable   ------> класс пишем с приставкой Table







































*/
?>