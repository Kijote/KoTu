<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-08 11:52:57 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Useradmin_App' not found ~ APPPATH/bootstrap.php [ 139 ] in file:line
2014-07-08 11:52:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 11:53:40 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Useradmin_App' not found ~ APPPATH/bootstrap.php [ 139 ] in file:line
2014-07-08 11:53:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 11:54:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Useradmin_App' not found ~ APPPATH/bootstrap.php [ 139 ] in file:line
2014-07-08 11:54:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 11:54:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Useradmin_App' not found ~ APPPATH/bootstrap.php [ 139 ] in file:line
2014-07-08 11:54:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 11:55:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Useradmin_Auth' not found ~ APPPATH/bootstrap.php [ 139 ] in file:line
2014-07-08 11:55:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:03:04 --- EMERGENCY: ErrorException [ 1 ]: Cannot instantiate abstract class Useradmin_Auth ~ APPPATH/bootstrap.php [ 139 ] in file:line
2014-07-08 12:03:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:03:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/user/classes/Controller/Useradmin/User.php [ 297 ] in file:line
2014-07-08 12:03:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:06:53 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Cookie.php:67
2014-07-08 12:06:53 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('session')
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Cookie.php:67
2014-07-08 12:10:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/user/views/user/login.php [ 34 ] in file:line
2014-07-08 12:10:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:14:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Config::get() ~ MODPATH/user/views/user/login.php [ 34 ] in file:line
2014-07-08 12:14:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:16:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-07-08 12:16:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:19:44 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'www-data'@'localhost' (using password: NO) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-07-08 12:19:44 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(21): Kohana_ORM::factory('user')
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('asdasd', 'asdasdasd', false)
#9 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('asdasd', 'asdasdasd')
#10 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#16 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-07-08 12:21:51 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'www-data'@'localhost' (using password: NO) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-07-08 12:21:51 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(21): Kohana_ORM::factory('user')
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '123123', false)
#9 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '123123')
#10 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#16 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2014-07-08 12:26:53 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 235 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php:1668
2014-07-08 12:26:53 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(21): Kohana_ORM::factory('user')
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '123123', false)
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '123123')
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php:1668
2014-07-08 12:27:43 --- EMERGENCY: Database_Exception [ 1049 ]: Unknown database 'kohana' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php:75
2014-07-08 12:27:43 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(21): Kohana_ORM::factory('user')
#9 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '123123', false)
#10 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '123123')
#11 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#17 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php:75
2014-07-08 12:29:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The disabled property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php:603
2014-07-08 12:29:05 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('disabled')
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(26): Kohana_ORM->__get('disabled')
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '123123', false)
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '123123')
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php:603
2014-07-08 12:31:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  useradmin ~ MODPATH/user/classes/Useradmin/Auth/ORM.php [ 32 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:31:50 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 32, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '123123', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '123123')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:33:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  useradmin ~ MODPATH/user/classes/Useradmin/Auth/ORM.php [ 32 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:33:42 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 32, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '123123', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '123123')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:34:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  useradmin ~ MODPATH/user/classes/Useradmin/Auth/ORM.php [ 32 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:34:47 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 32, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '123123', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '123123')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:35:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  useradmin ~ MODPATH/user/classes/Useradmin/Auth/ORM.php [ 32 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:35:13 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 32, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '123123', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '123123')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:35:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  useradmin ~ MODPATH/user/classes/Useradmin/Auth/ORM.php [ 32 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:35:16 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 32, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '123123', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '123123')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:35:20 --- EMERGENCY: ErrorException [ 2 ]: array_filter() expects parameter 1 to be array, null given ~ MODPATH/user/views/user/login.php [ 34 ] in file:line
2014-07-08 12:35:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_filter() ...', '/home/andres/Pr...', 34, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/views/user/login.php(34): array_filter(NULL)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/View.php(61): include('/home/andres/Pr...')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/andres/Pr...', Array)
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/views/template/useradmin.php(39): Kohana_View->__toString()
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/View.php(61): include('/home/andres/Pr...')
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/andres/Pr...', Array)
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#10 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/App.php(153): Kohana_Response->body(Object(View))
#11 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(87): Controller_Useradmin_App->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-07-08 12:36:00 --- EMERGENCY: ErrorException [ 2 ]: array_filter() expects parameter 1 to be array, null given ~ MODPATH/user/views/user/login.php [ 34 ] in file:line
2014-07-08 12:36:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_filter() ...', '/home/andres/Pr...', 34, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/views/user/login.php(34): array_filter(NULL)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/View.php(61): include('/home/andres/Pr...')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/andres/Pr...', Array)
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/views/template/useradmin.php(39): Kohana_View->__toString()
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/View.php(61): include('/home/andres/Pr...')
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/andres/Pr...', Array)
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#10 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/App.php(153): Kohana_Response->body(Object(View))
#11 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(87): Controller_Useradmin_App->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#17 {main} in file:line
2014-07-08 12:36:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  useradmin ~ MODPATH/user/classes/Useradmin/Auth/ORM.php [ 32 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:36:49 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 32, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '120931023', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '120931023')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:37:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  useradmin ~ MODPATH/user/classes/Useradmin/Auth/ORM.php [ 32 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:37:32 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 32, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '120931023', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '120931023')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:37:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  useradmin ~ MODPATH/user/classes/Useradmin/Auth/ORM.php [ 32 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:37:49 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 32, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '120931023', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '120931023')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:39:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  useradmin ~ MODPATH/user/classes/Useradmin/Auth/ORM.php [ 32 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:39:19 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(32): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 32, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '120931023', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '120931023')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:32
2014-07-08 12:40:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  useradmin ~ MODPATH/user/classes/Useradmin/Auth/ORM.php [ 33 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:33
2014-07-08 12:40:04 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 33, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '120931023', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '120931023')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:33
2014-07-08 12:40:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  useradmin ~ MODPATH/user/classes/Useradmin/Auth/ORM.php [ 33 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:33
2014-07-08 12:40:44 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(33): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 33, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '120931023', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '120931023')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:33
2014-07-08 12:42:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  useradmin ~ MODPATH/user/classes/Useradmin/Auth/ORM.php [ 37 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:37
2014-07-08 12:42:05 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(37): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 37, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '120931023', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '120931023')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:37
2014-07-08 12:42:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  useradmin ~ MODPATH/user/classes/Useradmin/Auth/ORM.php [ 37 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:37
2014-07-08 12:42:11 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(37): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 37, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '120931023', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '120931023')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:37
2014-07-08 12:42:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  useradmin ~ MODPATH/user/classes/Useradmin/Auth/ORM.php [ 40 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:40
2014-07-08 12:42:58 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php(40): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 40, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/auth/classes/Kohana/Auth.php(92): Useradmin_Auth_ORM->_login('andres', '120931023', false)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Controller/Useradmin/User.php(275): Kohana_Auth->login('andres', '120931023')
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Useradmin_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/user/classes/Useradmin/Auth/ORM.php:40
2014-07-08 12:45:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-07-08 12:45:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:49:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Role' not found ~ APPPATH/bootstrap.php [ 144 ] in file:line
2014-07-08 12:49:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:50:54 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kotu.s' doesn't exist [ SHOW FULL COLUMNS FROM `s` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2014-07-08 12:50:54 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('s')
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/application/bootstrap.php(144): Kohana_ORM->__construct()
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(102): require('/home/andres/Pr...')
#7 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/modules/database/classes/Kohana/Database/MySQL.php:359
2014-07-08 12:51:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-07-08 12:51:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:53:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ MODPATH/user/classes/Controller/Useradmin/User.php [ 277 ] in file:line
2014-07-08 12:53:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:55:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ MODPATH/user/classes/Controller/Useradmin/User.php [ 268 ] in file:line
2014-07-08 12:55:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:57:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Pagination' not found ~ MODPATH/user/classes/Controller/Useradmin/Admin/User.php [ 51 ] in file:line
2014-07-08 12:57:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 12:58:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Pagination' not found ~ MODPATH/pagination/classes/Pagination.php [ 3 ] in file:line
2014-07-08 12:58:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 13:00:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ MODPATH/user/classes/Controller/Useradmin/App.php [ 62 ] in file:line
2014-07-08 13:00:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line