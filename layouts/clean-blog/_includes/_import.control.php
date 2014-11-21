<?php
include $g['dir_layout'].'/_var/_var.php';

	// meta image 처리 ,add by taiji88
	$Topimg_Flag = false;

	if($_SEO['image_src'])
	{
		$ufilesArray = getArrayString($_SEO['image_src']);
		$_TIMG_D = getDbData($table['s_upload'], 'uid='.$ufilesArray['data'][0], '*');

		if(is_file($g['path_file'].$_TIMG_D['folder'].'/'.$_TIMG_D['tmpname']))
		{
			$Topimg_Flag = true;
			$Topimg_URL = $_TIMG_D['url'].$_TIMG_D['folder'].'/'.$_TIMG_D['tmpname'];
		}
	}

?>