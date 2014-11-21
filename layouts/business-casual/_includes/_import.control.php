<?php
include $g['dir_layout'].'/_var/_var.php';

// layout page ,레이아웃 페이지 처리
if (isset($layoutPage))
{
	$g['main'] = $g['dir_layout'].'_pages/'.$layoutPage.'.php';
	if (strpos($layoutPage,'jax/'))
	{
		include $g['main'];
		exit;
	}
	else {
		$g['dir_module_mode'] = $g['dir_layout'].'_pages/'.$layoutPage;
		$g['url_module_mode'] = $g['url_layout'].'/_pages/'.$layoutPage;
	}
}
?>