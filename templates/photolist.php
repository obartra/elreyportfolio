<?
	$photoStr = file_get_contents(PUBLIC_PATH . 'model/photos.json');
	$photos = json_decode($photoStr);
	$parsed = array();

	foreach($photos as $index=>$photo)
	{
		$photo->index = $index;
		$parsed[$photo->year][] = $photo;
	}
?>

<ol class="inner" ng-controller="photoListCtrl">
	<? foreach($parsed as $year=>$photos){ ?>
	<li>
		<h1><?= $year; ?></h1>
		<ul class="photos">
			<? foreach($photos as $photo){
				include(PUBLIC_PATH . 'templates/components/photo.php');
			} ?>
		</ul>
	</li>
	<? } ?>
</ol>
