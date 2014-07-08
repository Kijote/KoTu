<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-13 12:01:54 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Controller/Home.php [ 26 ] in file:line
2014-03-13 12:01:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 12:02:19 --- EMERGENCY: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/Controller/Home.php [ 26 ] in file:line
2014-03-13 12:02:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 12:02:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/kohana-email/classes/Email.php [ 34 ] in file:line
2014-03-13 12:02:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 12:06:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH/classes/Controller/Home.php [ 29 ] in file:line
2014-03-13 12:06:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-13 12:07:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  email_address ~ APPPATH/classes/Controller/Home.php [ 29 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/application/classes/Controller/Home.php:29
2014-03-13 12:07:01 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/application/classes/Controller/Home.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 29, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/application/classes/Controller/Home.php(17): Controller_Home->send_a_mail('yo@kijote.com.a...', 'Prueba', 'Esta es una pru...')
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/application/classes/Controller/Home.php:29
2014-03-13 12:07:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index:  username ~ APPPATH/classes/Controller/Home.php [ 29 ] in /home/andres/Proyectos/Personales/KoTu/Kohana/application/classes/Controller/Home.php:29
2014-03-13 12:07:32 --- DEBUG: #0 /home/andres/Proyectos/Personales/KoTu/Kohana/application/classes/Controller/Home.php(29): Kohana_Core::error_handler(8, 'Undefined index...', '/home/andres/Pr...', 29, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/application/classes/Controller/Home.php(17): Controller_Home->send_a_mail('yo@kijote.com.a...', 'Prueba', 'Esta es una pru...')
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /home/andres/Proyectos/Personales/KoTu/Kohana/application/classes/Controller/Home.php:29
2014-03-13 13:06:15 --- EMERGENCY: ErrorException [ 2 ]: fsockopen(): unable to connect to ssl://smtp.gmail.com:465 (Expiró el tiempo de conexión) ~ MODPATH/kohana-email/vendor/swift/classes/Swift/Transport/StreamBuffer.php [ 243 ] in file:line
2014-03-13 13:06:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): un...', '/home/andres/Pr...', 243, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-email/vendor/swift/classes/Swift/Transport/StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 110, 'Expir?? el tiem...', 5)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-email/vendor/swift/classes/Swift/Transport/StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-email/vendor/swift/classes/Swift/Transport/AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-email/vendor/swift/classes/Swift/Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-email/classes/Email.php(161): Swift_Mailer->send(Object(Swift_Message))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/application/classes/Controller/Home.php(17): Email::easy_send('yo@kijote.com.a...', 'Prueba', 'Esta es una pru...')
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#13 {main} in file:line