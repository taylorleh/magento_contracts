<?php 

/**
* @category Lehman
* @package Contracts
*/
class Lehman_Contracts_Model_Contract extends Mage_Core_Model_Abstract
{
	
	public function _construct()
	{
		parent::_construct();
		$this->init('lehman/contract');
	}
}

