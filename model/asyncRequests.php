<?php
if (!$build){
	define('PUBLIC_PATH', dirname(__FILE__) . '/../');
}

$json='
{
	"css": [' . json_encode(file_get_contents(PUBLIC_PATH . 'css/main.css')) . '],
	"js" : [' . json_encode(file_get_contents(PUBLIC_PATH . ($build ? "js/main.min.js" : "js/main.js"))) . ', ' .
				json_encode(file_get_contents(PUBLIC_PATH . 'js/lib/ga.js')) . '],
	"html" : [' . json_encode(file_get_contents(PUBLIC_PATH . 'templates/fullpageviewer.php')) . '],
	"photos" : [' . json_encode(file_get_contents(PUBLIC_PATH . 'model/photos.json')) . ']
}
';

echo $json;
