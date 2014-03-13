<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
		$js_assets = new Asset_JS(array('init.js'
                                        ));
        
        $css_assets = new Asset_CSS(array(
                                        'styles.css',
                                        ));
        
        
        $assets = array($js_assets->make(), $css_assets->make());
		
		$this->response->body(__('Hello, world!') . print_r($assets, true));
	}

} // End Welcome
