<?php defined('SYSPATH') or die('No direct script access.');

class Asset_Maker{
	protected $config = '';
	protected $name = '';
	protected $template = '<!-- NO DEFINED TEMPLATE FOR ASSET:[asset] -->';
	protected $template_config = '';
	protected $base_url = '/';
	
	function __construct($name = ''){
		// Populating variables...
		$this->config = Kohana::$config->load('asset');
		
		if(!empty($name)){
			$this->name = $name;
		}
	}
	
	protected function make($name = ''){
		if (!empty($name) && empty($this->name))
			$this->name = $name;
			
		if(!is_array($this->name))
			$this->name = array($this->name);
		
		$assets = $this->solve_dependencies($this->name);
		
		/*
		if(!is_array($assets))
			$assets = array();
		else
			krsort($assets);
		*/
		

		
		foreach($this->name as $asset){
			if(!in_array($asset, $assets))
				$assets[] = $asset;
		}
		
		$maked_assets = array();
		$config = '';
		foreach($assets as $asset){
			if(in_array($asset, array_keys($this->config->custom_dirs)))
				$asset = $this->config->custom_dirs[$asset] . $asset;
			
			if(in_array($asset, array_keys($this->config->custom_config))){
				foreach ($this->config->custom_config[$asset] as $key => $value){
					$config .= str_replace(array('[key]', '[value]'), array($key, $value), $this->template_config);
				}
			}
			
			$asset = Helper_URL::absolutize($this->base_url . $asset);
			
			$template_array = array(
									'[asset]' => $asset,
									'[config]' => $config,
									);
			
			$maked_assets[] = str_replace(array_keys($template_array), array_values($template_array), $this->template);
		}		
		return($maked_assets);	
	}
	
	private function solve_dependencies($name_all){

		if(!is_array($name_all)){
			$name_all = array($name_all);
		}
		
		$ret = array();
		
		foreach($name_all as $name){
			if(isset($this->config->dependencies[$name])){
				foreach($this->config->dependencies[$name] as $depend){
					$dat = $this->solve_dependencies($depend);

					if(!empty($dat) && is_array($dat)){

						foreach($dat as $dep1)
							if(!empty($dep1) && !in_array($dep1,$ret))
								$ret[] = $dep1;
					}
					if(!in_array($depend,$ret))
						$ret[] = $depend;
				}
			}
		}
		
		

		return $ret;
	}
}
