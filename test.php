<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"academy:newcomponent",
	"",
	Array(
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"NOINDEX" => "N",
		"QUANTITY" => "1",
		"TYPE" => "-"
	)
);?><br>
 <br>
 <?$APPLICATION->IncludeComponent(
	"academy:newcomponent.extends",
	"",
	Array(
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"NOINDEX" => "N",
		"QUANTITY" => "1",
		"TYPE" => "-"
	)
);?><br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>