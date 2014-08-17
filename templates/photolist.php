<div class="inner" ng-controller="photoListCtrl">
	<? foreach($parsed as $year=>$photos){ ?>
	<div class="subsection">
		<h1><?= $year; ?></h1>
		<div class="photos">
			<? foreach($photos as $photo){ ?>
			<photo
				class="photo <?php echo ($photo->type);?>"
				ng-click="show(<?=intval($photo->index)?>)"
			>
				<div class="background small-<?=$photo->name;?>"></div>
				<? if (isset($photo->company) && strlen($photo->company)){ ?>
					<span><?=$photo->company;?></span>
				<? }
					if ($photo->type === 'video'){ ?>
					<div class="videoicon"><div class="arrow"></div></div>
				<? } ?>
					<div class="img small-<?=$photo->name?>"></div>
			</photo>
			<? } ?>
		</div>
	</div>
	<? } ?>
</div>
