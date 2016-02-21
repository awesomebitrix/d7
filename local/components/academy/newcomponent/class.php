<?php
use Bitrix\Main;


class classComponents extends \CBitrixComponent{   //classComponents - может быть любое название
	
	function var1(){
		$arResult['var1'] = 'Отработал метод 1 компонента class';
		
		return $arResult;
	}
	
	
	public function executeComponent(){
		
		$this->arResult = array_merge( $this->arResult, $this->var1() );
		
		$this->includeComponentTemplate();		//подключили шаблон
	}
	
	
	
	
	
	
}