<?php defined('SYSPATH') OR die('No direct access allowed.');
$email_info = Kohana::$config->load('email')->get('options');

return array(
			 'name' => 'KoTu',
			 'description' => 'Kohana Tuning',
			 // version format #major, #minor[, #build[, #revision]] 1.8.5r14 => 1,8,5,14
			 'version' => array(0, 0, 1),
			 'email' => $email_info['username'],
			);