<?php
class ChequePaymentModuleFrontController extends ModuleFrontController
{
	public function initContent()
	{
		$this->display_column_left = false;
		parent::initContent();

		$this->context->smarty->assign(array(
			'test' => 'test',
		));

		$this->setTemplate('default.tpl');
	}

	//generate module
	public function postProcess()
	{
		if (Tools::getValue('process') == 'generate')
			$this->generate();
		exit;
	}


	public function generate(){




	}


}
