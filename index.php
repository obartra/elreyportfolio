<?
	define('PUBLIC_PATH', dirname(__FILE__) . '/');
	require_once 'model/parsed.php';
?>
<!DOCTYPE html>
<!--[if lte IE 8]>
	<meta http-equiv="refresh" content="0;URL=/old" />
<![endif]-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Elrey Belmonti</title>
		<meta name="description" content="Elrey Belmonti Dance Portfolio">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,100' rel='stylesheet' type='text/css'>
		<style>
			<? include 'css/main.css';?>
		</style>
	</head>
	<body>
		<top>
			<header>
				<?php include (PUBLIC_PATH . 'templates/header.php'); ?>
			</header>
			<section>
				<?php include (PUBLIC_PATH . 'templates/photolist.php'); ?>
			</section>
		</top>
		<?php include (PUBLIC_PATH . 'templates/fullpageviewer.php'); ?>
		<footer>
			<?php include (PUBLIC_PATH . 'templates/footer.php'); ?>
		</footer>
		<script>
			window.PORTFOLIO_PHOTO_DATA = <?=$photoStr;?>;
			<? include PUBLIC_PATH . 'js/vendor/requirejs/require.js';?>
			<? include PUBLIC_PATH . ($build ? 'grunt/tmp/main.js' : 'js/main.js');?>
			<? include PUBLIC_PATH . 'js/ga.js';?>
		</script>
	</body>
</html>
