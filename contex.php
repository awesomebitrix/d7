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








































*/
?>