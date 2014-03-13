<?php defined('SYSPATH') OR die('No direct access allowed.');
/*
	Asset Module Configuration File
	-------------------------------
	
	base_url: array of base urls of assets (keys are asset types and values are urls)
	dependencies: array of assets dependencies (keys are dependant assets and values are arrays of dependencies)
	custom_config: array of assets and its custom attributes and values (keys are attributes and values are attribute-values)
	custom_dirs: array of assets custom directories (keys are assets and values are directories)
	TODO: by_page: array of pages and its assets for autorendering (keys are pages and values are assets)

*/
return array(
	'base_url' => array(
			'js' => 'public/js/',
			'css' => 'public/css/'),
	'dependencies' => array(
			// js dependencies
                        'jquery-ui.js' => array('jquery.js'),
			'init.js' => array('jquery.js', 'bootstrap.js'),
			// css dependencies
			'styles.css' => array('bootstrap.css', 'jquery-ui.css'),
			),
	'custom_config' => array(
			'styles.css' => array('media' => 'screen'),
			),
	'custom_dirs' => array(
			'bootstrap.js' => '../bootstrap/js/',
			'bootstrap.css' => '../bootstrap/css/',
			),
	'by_page' => array('' => array()),
);
