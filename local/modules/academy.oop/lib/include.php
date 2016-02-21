<?php

//автозагрузка класов.  что не следуют правилам
\Bitrix\Main\Loader::registerAutoLoadClasses('academy.oop', array(
	'Academy\Oop\globalMenu' => '/lib/old.php',	
) );
    
    
    
    
    
?>