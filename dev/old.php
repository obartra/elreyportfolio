<?
	define('PUBLIC_PATH', dirname(__FILE__) . '/../');
?>

<!DOCTYPE html>
<html class="old">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Elrey Belmonti</title>
		<meta name="description" content="Elrey Belmonti Dance Portfolio">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/css/old.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,100' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="header">
			<img id="elrey" src="/img/elrey.jpg"/>
		</div>
		<div class="inner">
			<h3>Elrey Belmonti</h3>
			<h4>DANCER/CHOREOGRAPHER</h4>
			<ul>
				<li><label id="resume">Resume: <a href="/resume">//elrey.dance/resume</a></label></li>
				<li><label id="phone">Phone: <a href="tel:+1 2673252985">(267) 325 - 2985</a></label></li>
				<li><label id="email">Email: <a href="mailto:me@elrey.dance">me@elrey.dance</a></label></li>
			</ul>
			<p>Your browser is <strong>old</strong> and not supported.</p>
			<p>This is a simpler version of the site. To access the full site <a href="//browsehappy.com/">update your browser</a></p>
			<h3>Biography</h3>
			<? include (PUBLIC_PATH . 'templates/bio.php'); ?>
		</div>
		<div class="inner">
			<h3>Performances</h3>
			<?include (PUBLIC_PATH . 'templates/oldphotolist.php');?>
		</div>
	</body>
</html>
