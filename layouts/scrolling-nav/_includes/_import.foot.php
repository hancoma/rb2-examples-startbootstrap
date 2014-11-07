<!-- jQuery -->
<?php getImport('jquery','jquery-'.$d['ov']['jquery'].'.min',false,'js')?>

<!-- bootstrap js -->
<?php getImport('bootstrap','js/bootstrap.min',false,'js')?>

<script src="<?php echo $g['url_layout']?>/_js/jquery.easing.min.js"></script>
<script src="<?php echo $g['url_layout']?>/_js/script.js"></script>

<!-- 엔진코드:삭제하지마세요 -->
<?php include $g['path_core'].'engine/foot.engine.php' ?>