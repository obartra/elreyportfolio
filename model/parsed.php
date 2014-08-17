<?
	$photoStr = file_get_contents(PUBLIC_PATH . 'model/photos.json');
	$photos = json_decode($photoStr);
	$parsed = array();

	foreach($photos as $index=>$photo)
	{
		$photo->index = $index;
		$parsed[$photo->year][] = $photo;
	}
