<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
		$a = this_is_an_undefined_function();
		
		$js_assets = new Asset_JS(array('init.js'
                                        ));
        
        $css_assets = new Asset_CSS(array(
                                        'styles.css',
                                        ));
        
        $assets = array($js_assets->make(), $css_assets->make());
		
		$app = Kohana::$config->load('application');
		
		Email::application_send(array('to' => 'yo@kijote.com.ar', 'cc' => 'yo+kapito@kijote.com.ar'),
						 'Email Test',
						 ":application (:description) v:version has sent this mail from :account. It's only a test.\n\nBye!",
						 array(':application' => $app->get('name'),
							   ':version' => implode('.', $app->get('version')),
							   ':description' => $app->get('description'),
							   ':account' => $app->get('email'))
						);
		
		$this->response->body(__('Hello, world!') . print_r($assets, true));
	}

} // End Welcome
