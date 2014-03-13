<?php defined('SYSPATH') or die('No direct script access.');

class Helper_URL{
	static function absolutize($relative_url){
		$url = $relative_url;
		$preg = "[^\/\.]+\/+\.\.\/";
		// Solves double-dot relative URLs
		while(preg_match('#' . $preg . '#',$url) !== 0)
			$url = preg_replace('#' . $preg . '#', '', $url);
		
		// Returns with base URL
		return trim(URL::base(), '/') . $url;
	}
	
	static function solve($relative_url){
		return Helper_URL::absolutize($_SERVER['PATH_INFO'] . '/' . $relative_url);
	}
}