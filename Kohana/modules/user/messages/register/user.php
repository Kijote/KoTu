<?php defined('SYSPATH') or die('No direct script access.');

// see /system/messages/validation.php for the defaults for each rule. These can be overridden on a per-field basis.
return array(
      'username' => array(
         'username_available' => __('This username is already registered, please choose another one.'),
         'username_not_unique' => __('This username is already in use.'),
       ),
      'email' => array(
         'email' => __('This is not a valid email.'), // Workaround for Bug Report #3750
         'email_available' => __('This email address is already in use.'),
         'email_not_unique' => __('This email address is already in use.'),
       ),
      'email_confirm' => array(
         'email' => __('This is not a valid email.'), // Workaround for Bug Report #3750
         'email_available' => __('This email address is already in use.'),
         'email_not_unique' => __('This email address is already in use.'),
       ),
      'password' => array(
         'matches'      => __('The password and password confirmation are different.'),
      ),
      'password_confirm' => array(
         'matches'      => __('The password and password confirmation are different.'),
      ),
);

