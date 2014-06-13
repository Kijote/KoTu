<?php defined('SYSPATH') OR die('No direct access allowed.');

$app = Kohana::$config->load('application');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title><?=$app->get('name')?></title>
	</head>
	<body>
		<?= __('Something went wrong with :application. Please try again later.', array(':application' => $app->get('name'))) ?>
	</body>
</html>