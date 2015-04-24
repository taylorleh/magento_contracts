
<?php 

class Lehman_Contracts_Block_Adminhtml_Contract extends Mage_Adminhtml_Block_Widget_Grid_Container {

	public function __construct()
	{
		echo 'loaded';
		$this->_controller = 'adminhtml_contract';
		$this->_blockGroup = 'contract';
		$this->_headerText = Mage::helper('lehman')->__('Contracts');
		parent::__construct();

	}


	protected function _prepareLayout()
	{
		echo phpinfo();
		return parent::_prepareLayout();
	}

}



