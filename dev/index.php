<?

define('PUBLIC_PATH', dirname(__FILE__) . '/../');

$title_page = 'Dance Portfolio';
$title_header = 'these are my Performances';
$content_path = 'templates/photolist.php';
ob_start();
?>
	<!-- Non-blocking CSS, JS, HTML and JSON load, for the unbuilt version the json file is generated on the fly -->
	<script>
		window.ElreyDancePortfolio = {
			asyncLoadUrl : '<?=$build ? "/model/asyncRequests.json" : "/dev/model/asyncRequests.json"?>'
		};
		<? include (PUBLIC_PATH . 'js/vendor/requirejs/require.js'); ?>
		<? include (PUBLIC_PATH . 'js/lib/asyncLoad.js'); ?>
	</script>
<?
	$js = ob_get_contents();
ob_end_clean();

include (PUBLIC_PATH . 'dev/shell.php');
