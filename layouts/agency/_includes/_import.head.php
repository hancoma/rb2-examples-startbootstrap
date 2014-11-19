<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo strip_tags($g['meta_des'])?>">
<meta name="author" content="">

<title><?php echo $g['browtitle']?></title>

<!-- Bootstrap core CSS -->
<?php getImport('bootstrap','css/bootstrap.min',false,'css')?>


<!-- Custom styles for this template -->
<link href="<?php echo $g['url_layout']?>/_css/style.css" rel="stylesheet">
<link href="<?php echo $g['url_layout']?>/_css/custom.css" rel="stylesheet">

<!-- Custom Fonts -->
<?php getImport('font-awesome','css/font-awesome',false,'css')?> 
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- site head code -->
<?php echo $_HS['headercode']?>

<!-- Bootstrap core JavaScript -->
<?php getImport('jquery','jquery-'.$d['ov']['jquery'].'.min',false,'js')?>
<?php getImport('bootstrap','js/bootstrap.min',false,'js')?>

<!-- NOTICE!! Do not delete , 삭제하지마세요 -->
<?php include $g['path_core'].'engine/cssjs.engine.php'?>
