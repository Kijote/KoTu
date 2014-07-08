<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-12 06:48:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Asset_JS' not found ~ APPPATH/classes/Controller/Home.php [ 7 ] in file:line
2014-03-12 06:48:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 06:51:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Asset_JS' not found ~ APPPATH/classes/Controller/Home.php [ 7 ] in file:line
2014-03-12 06:51:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 07:51:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Asset_CSS' not found ~ APPPATH/bootstrap.php [ 135 ] in file:line
2014-03-12 07:51:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 07:51:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Asset_CSS' not found ~ APPPATH/bootstrap.php [ 135 ] in file:line
2014-03-12 07:51:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 07:51:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Asset_CSS' not found ~ APPPATH/bootstrap.php [ 135 ] in file:line
2014-03-12 07:51:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 07:51:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'Asset_CSS' not found ~ APPPATH/bootstrap.php [ 135 ] in file:line
2014-03-12 07:51:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 07:56:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Helper_URL' not found ~ MODPATH/asset/classes/Asset/Maker.php [ 54 ] in file:line
2014-03-12 07:56:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 07:59:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: config ~ MODPATH/asset/classes/Asset/Maker.php [ 58 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/asset/classes/Asset/Maker.php:58
2014-03-12 07:59:13 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/asset/classes/Asset/Maker.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/andres/Pr...', 58, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/asset/classes/Asset/JS.php(10): Asset_Maker->make('')
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/application/classes/Controller/Home.php(22): Asset_JS->make()
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/asset/classes/Asset/Maker.php:58