<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>Text here....<?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.list", 
	".default", 
	array(
		"ALLOW_DELETE" => "N",
		"ALLOW_EDIT" => "N",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_URL" => "",
		"ELEMENT_ASSOC" => "CREATED_BY",
		"GROUPS" => array(
			0 => "7",
		),
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "Catalogs_exchange",
		"MAX_USER_ENTRIES" => "100000",
		"NAV_ON_PAGE" => "10",
		"SEF_MODE" => "N",
		"STATUS" => "ANY"
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>