<?php 

/**
* 
*/
class Lehman_Contracts_Model_Resource_Agreement extends Mage_Core_Model_Mysql4_Abstract
{
	
	public function _construct()
	{
		$this->init('contracts/agreement', 'id');
	}
}

