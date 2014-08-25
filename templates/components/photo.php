<li class="photo"
	ng-click="show(<?=intval($photo->index)?>)"
	itemprop="workPerformed" itemscope="" itemtype="http://schema.org/CreativeWork"
>
	<meta itemprop="genre" content="dance"></meta>
	<meta itemprop="dateCreated" content="<?=$photo->year;?>"></meta>
	<?	if (isset($photo->choreographer) && strlen($photo->choreographer)){ ?>
			<meta itemprop="author" content="<?=$photo->choreographer; ?>"></meta>
	<? }
		if (isset($photo->company) && strlen($photo->company)){ ?>
			<meta itemprop="sourceOrganization" content="<?=$photo->company; ?>"></meta>
	<? }
		if (isset($photo->description) && strlen($photo->description)){ ?>
			<meta itemprop="about" content="<?=$photo->description; ?>"></meta>
	<? }
		if ($photo->type === 'photo'){ ?>
			<meta itemprop="image" content="<?=$photo->fullsrc;?>"></meta>
	<? } ?>

	<div class="background small-<?=$photo->name;?>"></div>

	<? if (isset($photo->company) && strlen($photo->company)){ ?>
		<span><?=$photo->company;?></span>
	<? }else if (isset($photo->description) && strlen($photo->description)){ ?>
		<span><?=$photo->description;?></span>
	<? }
		if ($photo->type === 'video'){ ?>
		<div class="videoicon"><div class="arrow"></div></div>
	<? } ?>
		<div class="img small-<?=$photo->name?>"></div>
</li>
