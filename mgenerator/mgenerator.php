<?php

if (!defined('_PS_VERSION_'))
	exit;

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



	public function uninstall()
	{



	}


	public function getModuleInfo($new_info = array())
	{
		$default_info = array(
			'author'=>'Dan',
			'email'=>'dan@magebin.com',
			'copyright' => 'powered by magebin.co 1980-2014',
			'version'=>'1.0',
			'compatibility'=>array('min'=>'1.4','max'=>'1.6'),
			//'translations'=>array('en','cn'),
			'name'=>'module',
			'display'=>'Magebin.com Auto Generated Module',
			'description'=>'Magebin.com Auto Generated Module',
			'tab'=>array('administration','advertising_marketing','analytics_stats','billing_invoicing','checkout',
				'content_management','emailing','export','front_office_features','i18n_localization',
				'market_place','merchandizing','migration_tools','mobile','others','payments_gateways','payment_security','pricing_promotion','quick_bulk_update','search_filter','seo',
				'shipping_logistics','slideshows','smart_shopping','social_networks'),
			'is_configurable'=>true,
			'need_instance'=>false,
		);

		foreach ($default_info as $key => $value)
		{
			if (array_key_exists($key, $new_info))
			{
				if (gettype($new_info[$key]) == gettype($value))
					$default_info[$key] = $new_info[$key];
			}
		}
		return $default_info;
	}

	public function generate($info)
	{
		$source = '';

		return $source;


	}



}
