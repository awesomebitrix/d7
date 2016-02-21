<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test2");
?><?$APPLICATION->IncludeComponent(
	"mycomponents:photo.random",
	"",
	Array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",
		"IBLOCKS_PROP" => "49",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalog",
		"IMG_HEIGHT" => "100",
		"IMG_WIDTH" => "100",
		"PARENT_SECTION" => ""
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>