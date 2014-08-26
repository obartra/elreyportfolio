<?
	define('PUBLIC_PATH', dirname(__FILE__) . '/../');
?>

<!DOCTYPE html>
<!--[if lte IE 8]>
	<meta http-equiv="refresh" content="0;URL=/old" />
<![endif]-->

<!-- We add the wf-loading class to avoid a FOUT before google web font loads -->
<html class="wf-loading">
	<head>
		<title>Elrey Belmonti - Dance Portfolio</title>
		<meta name="description" content="Hello, this is my portfolio. I am a dancer and a choreographer. I've performed for many dance companies and shown my work in Philadelphia and across the globe.">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style><? include (PUBLIC_PATH . 'css/critical.css'); ?></style>
	</head>
	<body ng-controller="pageCtrl">
		<!--to kindly ask the browser to download the sprite before the critical css is parsed -->
		<img src="/img/small.jpg" style="display:none;" alt="gallery sprite image"/>
		<!-- .top section is used to simulate 'fixed' position for <footer>, since 'fixed'
			is broken in many mobile browsers (Opera mini, iOS-4, Android 2.2 ...) -->
		<div class="top">
			<header><? include (PUBLIC_PATH . 'templates/header.php'); ?></header>
			<section ng-cloak ng-show="page === 'Biography' ">
				<? include (PUBLIC_PATH . 'templates/bio.php'); ?>
			</section>
			<section ng-show="page === 'Performances' ">
				<? include (PUBLIC_PATH . 'templates/photolist.php'); ?>
			</section>
		</div>
		<footer><? include (PUBLIC_PATH . 'templates/footer.php'); ?></footer>

		<!-- Async Roboto Font Load -->
		<script>
			<? include (PUBLIC_PATH . 'js/vendor/components-webfontloader/webfont.js');?>
			window.WebFont.load({ google: {
				families: ['Roboto:100,300:latin']
			}});
		</script>
		<!-- Non-blocking CSS, JS, HTML and JSON load, for the unbuilt version the json file is generated on the fly -->
		<script>
			window.ElreyDancePortfolio = {
				asyncLoadUrl : '<?=$build ? "/model/asyncRequests.json" : "/dev/model/asyncRequests.json"?>'
			};
			<? include (PUBLIC_PATH . 'js/vendor/requirejs/require.js'); ?>
			<? include (PUBLIC_PATH . 'js/lib/asyncLoad.js'); ?>
		</script>
		<!-- Show redirect link if JS is disabled -->
		<noscript>
			<link href='http://fonts.googleapis.com/css?family=Roboto:300,100' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" type="text/css" href="/css/noscript.css">
			<a href="/old">It seems you have JavaScript disabled. Click here to visit a simpler version of this site</a>
		</noscript>
	</body>
</html>
