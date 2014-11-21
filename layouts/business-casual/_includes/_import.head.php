<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Seo -->
<meta name="robots" content="<?php echo strip_tags($g['meta_bot'])?>">
<meta name="title" content="<?php echo strip_tags($g['meta_tit'])?>"> 
<meta name="keywords" content="<?php echo strip_tags($g['meta_key'])?>"> 
<meta name="description" content="<?php echo strip_tags($g['meta_des'])?>">
<meta name="author" content="">
<link rel="image_src" href="<?php echo strip_tags($g['meta_img'])?>"> 

<title><?php echo $g['browtitle']?></title>

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $g['s']?>/_core/images/ico/apple-touch-icon-144-precomposed.png">
<link rel="shortcut icon" href="<?php echo $g['s']?>/_core/images/ico/favicon.ico">

<!-- bootstrap css -->
<?php getImport('bootstrap','css/bootstrap.min',false,'css')?>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- jQuery -->
<?php getImport('jquery','jquery-'.$d['ov']['jquery'].'.min',false,'js')?>

<!-- bootstrap js -->
<?php getImport('bootstrap','js/bootstrap.min',false,'js')?>

<!-- Fonts -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

<!-- global css -->
<link href="<?php echo $g['url_layout']?>/_css/style.css" rel="stylesheet">

<!-- custom css -->
<link href="<?php echo $g['url_layout']?>/_css/custom.css" rel="stylesheet">


<!-- 사이트 헤드 코드 -->
<?php echo $_HS['headercode']?>

<!-- 엔진코드:삭제하지마세요 -->
<?php include $g['path_core'].'engine/cssjs.engine.php' ?>

<!-- global js -->
<script src="<?php echo $g['url_layout']?>/_js/script.js"></script>
