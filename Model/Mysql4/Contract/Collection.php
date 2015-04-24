<?php

/**
* 
*/
class Lehman_Contracts_Model_Mysql4_Contract_Collection extends Mage_Adminhtml_Model_Mysql4_Collection_Abstract
{
	
	public function _construct()
	{
		parent::_construct();
		$this->_init('lehman/contract');
	}
}


