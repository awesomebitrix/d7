<?php 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('Приложения и контекст');

//получили обьект приложения
$application = \Bitrix\Main\Application::getInstance();


        //dd('testttttttttttt2222222222 - 11111');


//Получили обьект контекста
$context = $application->getContext();

//сокращенный вариант вызова
$context = \Bitrix\Main\Application::getInstance()->getContext();

//получаем обьект. содержащий серверные данные
$server = $context->getServer();

echo '<strong>$context->getServer()';

echo '<br><br>Путь до корня сайта: ' . $server->getDocumentRoot();

//Server Name
echo '<br><br>SERVER_NAME: ' . $server->getServerName();

//$_SERVER[HTTP_X_REAL_IP]
echo '<br><br> $_SERVER[HTTP_X_REAL_IP]: ' . $server->get('HTTP_X_REAL_IP'); 




//Получаем обьект завпроса,  содержащий данные запроса
$request = $context->getRequest();

echo '<br><br><strong> $context->getRequest() </strong>';

//$_REQUEST['some_name'] - вариант 1
echo '<br><br><strong> $_REQUEST["some_name"] вариант 1: ' . $request['some_name'] . '</strong>'; 

//$_REQUEST['some_name'] - вариант 2
echo '<br><br><strong> $_REQUEST["some_name"] вариант 2: ' . $request->get('some_name') . '</strong>'; 



//echo "test";
    
	
	
	
        //dd($server  );












?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>