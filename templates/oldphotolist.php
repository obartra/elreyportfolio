<?
	include (PUBLIC_PATH . 'model/parsePhotos.php');
?>

<ol class="inner" ng-controller="photoListCtrl">
	<? foreach($parsed as $year=>$photos){
		$atLeastOneToShow = false;

		foreach($photos as $photo){
			if ($photo->type === 'photo'){
				$atLeastOneToShow = true;
			}
		}
	if ($atLeastOneToShow){?>
		<li>
			<h4><?= $year; ?></h4>
			<ul class="photos">
				<? foreach($photos as $photo){ ?>
				<li>
					<? if ($photo->type === 'photo') { ?>
						<img src="<?=$photo->fullsrc;?>" alt="<?=$photo->description;?>"/>
						<? if (isset($photo->company) && $photo->company != '') { ?>
							<div>
								<span class="label">Company:</span>
								<span class="data"><?=$photo->company?></span>
							</div>
						<? } ?>
						<? if (isset($photo->description) && $photo->description != '') { ?>
							<div>
								<span class="label">Description:</span>
								<span class="data"><?=$photo->description?></span>
							</div>
						<? } ?>
						<? if (isset($photo->choreographer) && $photo->choreographer != '') { ?>
							<div>
								<span class="label">Choreographer:</span>
								<span class="data"><?=$photo->choreographer?></span>
							</div>
						<? } ?>
						<? if (isset($photo->photographer) && $photo->photographer != '') { ?>
							<div>
								<span class="label">Photographer:</span>
								<span class="data"><?=$photo->photographer?></span>
							</div>
						<? }
					} ?>
				</li>
				<? } ?>
			</ul>
		</li>
		<? }
	} ?>
</ol>
