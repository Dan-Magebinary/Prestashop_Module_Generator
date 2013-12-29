<?php

if (!defined('_PS_VERSION_'))exit;

class BlockCart extends Module
{
	public function __construct()
	{
		$this->name = 'mgenerator';
		$this->tab = 'front_office_features';
		$this->version = '1.0';
		$this->author = 'Magebin';
		$this->need_instance = 0;

		$this->bootstrap = true;
		parent::__construct();

		$this->displayName = $this->l('Magebin Module Generator');
		$this->description = $this->l('Automatically Generate Modules');
	}


	public function getContent()
	{
		$output = '';
		return $output;
	}

	public function install()
	{
		if (parent::install() == false)
			return false;
		return true;
	}

}
