<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-28 07:17:45 --- EMERGENCY: ErrorException [ 2 ]: fsockopen(): unable to connect to ssl://smtp.gmail.com:465 (Expiró el tiempo de conexión) ~ MODPATH/kohana-email/vendor/swift/classes/Swift/Transport/StreamBuffer.php [ 243 ] in file:line
2014-03-28 07:17:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen(): un...', '/home/andres/Pr...', 243, Array)
#1 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-email/vendor/swift/classes/Swift/Transport/StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 110, 'Expir?? el tiem...', 5)
#2 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-email/vendor/swift/classes/Swift/Transport/StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-email/vendor/swift/classes/Swift/Transport/AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-email/vendor/swift/classes/Swift/Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-email/classes/Email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 /home/andres/Proyectos/Personales/KoTu/Kohana/modules/kohana-email/classes/Email.php(152): Email::send(Array, Array, 'Email Test', 'KoTu (Kohana Tu...', false)
#7 /home/andres/Proyectos/Personales/KoTu/Kohana/application/classes/Controller/Home.php(25): Email::application_send(Array, 'Email Test', ':application (:...', Array)
#8 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#11 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/andres/Proyectos/Personales/KoTu/Kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/andres/Proyectos/Personales/KoTu/Kohana/index.php(118): Kohana_Request->execute()
#14 {main} in file:line