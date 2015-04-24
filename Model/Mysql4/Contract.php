<?php 

class Lehman_Contracts_Model_Mysql4_Contract extends Mage_Core_Model_Mysql4_Abstract {

	protected function _construct()
	{
		$this->_init('lehman/contract', 'id');
	}

}