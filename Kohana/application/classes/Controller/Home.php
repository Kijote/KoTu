<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
		//$a = this_is_an_undefined_function();
		
		$js_assets = new Asset_JS(array('init.js'
                                        ));
        
        $css_assets = new Asset_CSS(array(
                                        'styles.css',
                                        ));
        
        $assets = array($js_assets->make(), $css_assets->make());
		
		$app = Kohana::$config->load('application');
		
		$user = ORM::factory('user', 1);
		
		$frm = $user->get_form(array('email', 'username'));
		
		//print_r($frm); die;
		
		print_r($frm->render()); die;
		
		$form = Formo::form();

		$form->mailing_address = Formo::form()
			->add('city', 'input', null, array('rules' => array(array('not_empty'))))
			->add('state', 'input', null, array('rules' => array(array('not_empty'))))
			->add('zip', 'input', null, array('rules' => array(array('not_empty'))));
		
		$form->add('different_shipping_address', 'checkbox');
		
		$form->shipping_address = Formo::form()
			->add('city', 'input', null, array('rules' => array(array('not_empty'))))
			->add('state', 'input', null, array('rules' => array(array('not_empty'))))
			->add('zip', 'input', null, array('rules' => array(array('not_empty'))));
		
		$form->add('submit', 'input|submit', 'save')
			->load($this->request->post());

		if ($form->mailing_address->validate())
		{
		
		}
		
		if ($form->different_shipping_address->val() AND $form->shipping_address->validate())
		{
		
		}
		
		print_r($form->render()); die;
		
		/*
		Email::application_send(array('to' => 'yo@kijote.com.ar', 'cc' => 'yo+kapito@kijote.com.ar'),
						 'Email Test',
						 ":application (:description) v:version has sent this mail from :account. It's only a test.\n\nBye!",
						 array(':application' => $app->get('name'),
							   ':version' => implode('.', $app->get('version')),
							   ':description' => $app->get('description'),
							   ':account' => $app->get('email'))
						);
		
		$this->response->body(__('Hello, world!') . print_r($assets, true));
		*/
	}

} // End Welcome
