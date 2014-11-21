<?php
$limit_post = 20;			// 한 페이지의 content 갯수
$cnt = 0;

$_LP_ARR = getDbArray($table['s_page'], 'site='.$_HS['uid'], '*', 'uid', 'desc', 0, $limit_post);
$_LP_NUM = getDbRows($table['s_page'], 'site='.$_HS['uid']);

if($_LP_NUM):
while($_LP_D = db_fetch_array($_LP_ARR)):
$cnt++;

if ($_LP_D['uid']):
	$R = getUidData($table['s_page'],$_LP_D['uid']);
	$_SEO_D = getDbData($table['s_seo'],'rel=2 and parent='.$R['uid'],'*');
?>

<div class="post-preview">
<a href="<?php echo RW('mod='.$_LP_D['id'].'')?>">
	<h2 class="post-title">
		<?php echo $_SEO_D['title']?>
	</h2>
	<h3 class="post-subtitle">
		 <?php echo $_SEO_D['description']?>
	</h3>
</a>
<p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>
</div>

<?php endif?>
<?php if($_LP_NUM > $cnt):?><hr><?php endif?>
<?php endwhile?>


<hr>
<!-- Pager -->
<ul class="pager">
<li class="next">
    <a href="#">Older Posts &rarr;</a>
</li>
</ul>

<?php else:?>

<div class="well text-center text-muted">
	<h1><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></h1>
	No Post !!
</div>

<?php endif?>

