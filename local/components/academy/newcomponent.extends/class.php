<?php

CBitrixComponent::includeComponentClass('academy:newcomponent'); //инициализировали компонент и дальше можем наследовать его



class classComponentsExtends extends classComponents{
	
	function var2(){
		$arResult['var2'] = 'Отработал метод var2 компонента  newcomponent.extends';
		
		return $arResult;
	}
	
	
	public function executeComponent(){
		
		$this->arResult = array_merge( $this->arResult, $this->var2() );	
		
		parent::executeComponent(); // к нашим сформированным данным добавляем данные из newcomponent		
	}
	
	
}
