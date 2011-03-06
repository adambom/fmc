<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo $html->charset(); ?>
	<title>
		<?php __('FMC Technologies: Advanced Energy Solutions'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');

		echo $html->css(array('fmc.report'));

		echo $scripts_for_layout;
	?>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
</head>

<body>
	<div id="top">
    	<h1><?php echo $title_for_layout; ?></h1>
    </div>
    <div id="content">
		<?php echo $content_for_layout; ?>
    </div>
</body>
</html>
