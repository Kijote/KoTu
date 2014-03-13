<?php defined('SYSPATH') or die('No direct script access.');

class Asset_JS extends Asset_Maker{
	protected $template = '<script type="text/javascript" src="[asset]" [config]></script>';
	protected $template_config ='[key]="[value]" ';
	
	function make($name = ''){
		$this->base_url = $this->config->base_url['js'];
		// Generate the asset and its dependencies from template structure
		// Clear the last space in the template
		return str_replace( ' >', '>', implode("\n", parent::make($name)) . "\n");
	}
}