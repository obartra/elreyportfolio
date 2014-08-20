<?
	define('PUBLIC_PATH', dirname(__FILE__) . '/');
	require_once 'model/parsed.php';

	header("Content-language: en");
	header("Content-type: text/html; charset=utf-8");
	header("X-UA-Compatible: IE=edge,chrome=1");
?>
<!DOCTYPE html>
<!--[if lte IE 8]>
	<meta http-equiv="refresh" content="0;URL=/old" />
<![endif]-->
<html class="wf-loading">
	<head>
		<title>Elrey Belmonti Dance Portfolio</title>
		<meta name="description" content="Showcase of some of my recent performances and choreographies. This is my dance portfolio.">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			<? include 'css/main.css';?>
		</style>
	</head>
	<body>
		<!-- to kindly ask the browser to download the sprite before the css is parsed -->
		<img src="/img/small.jpg" style="display:none;" alt="gallery sprite image"/>
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
