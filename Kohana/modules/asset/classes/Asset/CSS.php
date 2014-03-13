<?php defined('SYSPATH') or die('No direct script access.');

class Asset_CSS extends Asset_Maker{
	protected $template = '<link rel="stylesheet" type="text/css" href="[asset]" [config]/>';
	protected $template_config ='[key]="[value]" ';
	
	function make($name = ''){
		$this->base_url = $this->config->base_url['css'];
				
		// Generate the asset and its dependencies from template structure
		return implode("\n", parent::make($name)) . "\n";
	}
}