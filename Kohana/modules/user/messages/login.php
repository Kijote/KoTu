<?php defined('SYSPATH') or die('No direct script access.');

// see /system/mesages/validation.php for the defaults for each rule. These can be overridden on a per-field basis.
return array(
      'username' => array(
         'not_empty' => __('Username must not be empty.'),
         'invalid' => __('Password or username is incorrect.'),
       ),
      'password' => array(
         'not_empty'      => __('Password must not be empty.'),
         'invalid' => __('Password or username is incorrect.'),
      ),
);

