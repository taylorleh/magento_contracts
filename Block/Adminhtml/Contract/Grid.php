<?php 



class Lehman_Contracts_Block_Adminhtml_Contract_Grid extends Mage_Adminhtml_Block_Widget_Grid {


	public function __construct() {

		parent::__construct();
		$this->setId('lehman_contracts_grid');
		$this->setUseAjax(true);
	}

	protected function _prepareCollection()
	{
		
		$collection = Mage::getModel('lehman/contract');
		if(empty($collection)) {
			echo 'COLLECTION IS EMPTY';
		}

		$this->setCollection($collection);

		return parent::_prepareCollection();

	}



	public function _prepareColumns()
	{
		return parent::_prepareColumns();
	}





}