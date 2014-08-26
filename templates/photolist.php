<?
	include (PUBLIC_PATH . 'model/parsePhotos.php');
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
