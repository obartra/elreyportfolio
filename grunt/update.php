<?
$build = true;
define('PUBLIC_PATH', dirname(__FILE__) . '/../');

ob_start();
	include(PUBLIC_PATH . 'index.php');
	$content = ob_get_contents();
ob_end_clean();
$html = file_put_contents(PUBLIC_PATH . 'grunt/tmp/index.html', $content);
