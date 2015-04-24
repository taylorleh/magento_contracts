

<?php 


/**
* 
*/
class Lehman_Contracts_Adminhtml_ContractsController extends Mage_Adminhtml_Controller_Action
{

	public function indexAction()
	{
		// echo 'hello';
		$this->loadLayout();
		$this->renderLayout();
		// return $this;
	}

	protected function _initAction()
	{
		$this->loadLayout()->_setActiveMenu('customer/contracts');
		return $this;
	}

	public function editAction()
	{
		$this->loadLayout();
		$this->renderLayout();
	}

}

