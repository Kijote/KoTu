<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-14 10:31:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH/classes/Controller/Home.php [ 23 ] in file:line
2014-07-14 10:31:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 10:33:18 --- EMERGENCY: ErrorException [ 1 ]: Class 'Formo' not found ~ APPPATH/classes/Controller/Home.php [ 20 ] in file:line
2014-07-14 10:33:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 10:41:33 --- EMERGENCY: ErrorException [ 1 ]: Class 'Formo' not found ~ APPPATH/bootstrap.php [ 145 ] in file:line
2014-07-14 10:41:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 10:42:01 --- EMERGENCY: ErrorException [ 2 ]: array_key_exists() expects parameter 2 to be array, null given ~ MODPATH/kohana-formo/classes/Formo/Core/Innards.php [ 1092 ] in file:line
2014-07-14 10:42:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/home/andres/Pr...', 1092, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Innards.php(1092): array_key_exists(0, NULL)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(62): Formo_Core_Innards->_resolve_construct_aliases(NULL)
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/application/bootstrap.php(145): Formo_Core_Formo->__construct()
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(102): require('/home/andres/Pr...')
#5 {main} in file:line
2014-07-14 10:43:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '[' ~ MODPATH/kohana-formo/config/formo.php [ 50 ] in file:line
2014-07-14 10:43:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 10:52:19 --- EMERGENCY: ErrorException [ 2 ]: key_exists() expects parameter 2 to be array, null given ~ MODPATH/kohana-formo/classes/Formo/Core/Innards.php [ 1092 ] in file:line
2014-07-14 10:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'key_exists() ex...', '/home/andres/Pr...', 1092, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Innards.php(1092): key_exists(0, NULL)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(62): Formo_Core_Innards->_resolve_construct_aliases(NULL)
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/application/bootstrap.php(145): Formo_Core_Formo->__construct()
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(102): require('/home/andres/Pr...')
#5 {main} in file:line
2014-07-14 10:53:47 --- EMERGENCY: Kohana_Exception [ 0 ]: Every formo field must have an alias ~ MODPATH/kohana-formo/classes/Formo/Core/Innards.php [ 1124 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php:62
2014-07-14 10:53:47 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(62): Formo_Core_Innards->_resolve_construct_aliases(NULL)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/application/bootstrap.php(145): Formo_Core_Formo->__construct()
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(102): require('/home/andres/Pr...')
#3 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php:62
2014-07-14 10:54:26 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/bootstrap.php [ 160 ] in file:line
2014-07-14 10:54:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 10:54:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ APPPATH/bootstrap.php [ 160 ] in file:line
2014-07-14 10:54:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 10:56:16 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Formo_Core_Formo::load() must be an array, string given, called in /home/andres/Proyectos/Personales/KoTu/Kohana/application/bootstrap.php on line 160 and defined ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 931 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php:931
2014-07-14 10:56:16 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(931): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/andres/Pr...', 931, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/application/bootstrap.php(160): Formo_Core_Formo->load('//')
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(102): require('/home/andres/Pr...')
#3 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php:931
2014-07-14 10:56:18 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Formo_Core_Formo::load() must be an array, string given, called in /home/andres/Proyectos/Personales/KoTu/Kohana/application/bootstrap.php on line 160 and defined ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 931 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php:931
2014-07-14 10:56:18 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(931): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/andres/Pr...', 931, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/application/bootstrap.php(160): Formo_Core_Formo->load('//')
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(102): require('/home/andres/Pr...')
#3 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php:931
2014-07-14 10:56:37 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 10:56:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 10:59:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 10:59:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 10:59:10 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 10:59:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 10:59:12 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 10:59:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 10:59:13 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 10:59:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 10:59:15 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 10:59:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 10:59:15 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 10:59:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 10:59:15 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 10:59:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 10:59:42 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Arr::get(), called in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php on line 1593 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 280 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Arr.php:280
2014-07-14 10:59:42 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Arr.php(280): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/andres/Pr...', 280, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(1593): Kohana_Arr::get(Array)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(1739): Formo_Core_Formo->sent()
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/application/bootstrap.php(162): Formo_Core_Formo->validate()
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(102): require('/home/andres/Pr...')
#5 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Arr.php:280
2014-07-14 10:59:43 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Arr::get(), called in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php on line 1593 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 280 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Arr.php:280
2014-07-14 10:59:43 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Arr.php(280): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/andres/Pr...', 280, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(1593): Kohana_Arr::get(Array)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(1739): Formo_Core_Formo->sent()
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/application/bootstrap.php(162): Formo_Core_Formo->validate()
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(102): require('/home/andres/Pr...')
#5 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Arr.php:280
2014-07-14 11:08:14 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 11:08:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:08:14 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 11:08:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:10:02 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 11:10:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:10:03 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 11:10:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:11:08 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Request - assumed 'Request' ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php:1593
2014-07-14 11:11:08 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(1593): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/andres/Pr...', 1593, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(1740): Formo_Core_Formo->sent()
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/application/bootstrap.php(162): Formo_Core_Formo->validate()
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(102): require('/home/andres/Pr...')
#4 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php:1593
2014-07-14 11:11:09 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Request - assumed 'Request' ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php:1593
2014-07-14 11:11:09 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(1593): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/andres/Pr...', 1593, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(1740): Formo_Core_Formo->sent()
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/application/bootstrap.php(162): Formo_Core_Formo->validate()
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(102): require('/home/andres/Pr...')
#4 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php:1593
2014-07-14 11:12:10 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'Request' ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 11:12:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:12:11 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'Request' ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 11:12:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:12:13 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'Request' ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 11:12:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:12:13 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'Request' ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 11:12:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:19:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 11:19:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:19:48 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 11:19:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:21:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 11:21:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:21:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 11:21:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:24:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 11:24:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:24:58 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function post() on a non-object ~ MODPATH/kohana-formo/classes/Formo/Core/Formo.php [ 1593 ] in file:line
2014-07-14 11:24:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:27:14 --- EMERGENCY: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Validation.php on line 242 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 211 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Validation.php:211
2014-07-14 11:27:14 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/home/andres/Pr...', 211, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Validation.php(242): Kohana_Validation->rule('city', 'n', 'o')
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Innards.php(320): Kohana_Validation->rules('city', Array)
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(1828): Formo_Core_Innards->_add_rules_to_validation(Object(Validation))
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(1779): Formo_Core_Formo->validation()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-formo/classes/Formo/Core/Formo.php(1765): Formo_Core_Formo->validate()
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/application/classes/Controller/Home.php(37): Formo_Core_Formo->validate()
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Validation.php:211
2014-07-14 11:28:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function validate() on a non-object ~ APPPATH/classes/Controller/Home.php [ 42 ] in file:line
2014-07-14 11:28:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:35:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ MODPATH/kohana-formo/classes/Formo/ORM.php [ 7 ] in file:line
2014-07-14 11:35:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:43:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ARRAY ~ MODPATH/kohana-formo/classes/Formo/ORM.php [ 283 ] in file:line
2014-07-14 11:43:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:43:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ARRAY ~ MODPATH/kohana-formo/classes/Formo/ORM.php [ 283 ] in file:line
2014-07-14 11:43:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:45:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '[' ~ MODPATH/kohana-formo/classes/Formo/ORM.php [ 289 ] in file:line
2014-07-14 11:45:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 11:49:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::get_form() ~ APPPATH/classes/Controller/Home.php [ 22 ] in file:line
2014-07-14 11:49:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-14 12:32:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Useradmin_User' not found ~ APPPATH/classes/Model/User.php [ 3 ] in file:line
2014-07-14 12:32:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line