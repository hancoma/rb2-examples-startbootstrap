<!DOCTYPE html>
<html lang="en">
<head>
<?php include $g['dir_layout'].'/_includes/_import.head.php' ?>
</head>
<body id="rb-body">

	<?php include $g['dir_layout'].'/_includes/header.php' ?>

    <!-- Page Header -->
    <header class="intro-header"<?php if($Topimg_Flag):?> style="background-image: url('<?php echo $Topimg_URL?>')"<?php endif?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                    <?php if($mod):?>

                    <div class="post-heading">
                        <h1><?php echo $_SEO['title']?></h1>
                        <h2 class="subheading"><?php echo $_SEO['description']?></h2>
                        <span class="meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</span>
                    </div>

                    <?php else:?>

                    <div class="site-heading">
                        <h1><?php if($_SEO['title']):?><?php echo $_SEO['title']?><?php else:?><?php echo $d['layout']['intro_heading']?><?php endif?></h1>
                        <hr class="small">
                        <span class="subheading"><?php if($_SEO['description']):?><?php echo $_SEO['description']?><?php else:?><?php echo $d['layout']['intro_subheading']?><?php endif?></span>
                    </div>

                    <?php endif?>

                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

				<?php include __KIMS_CONTENT__ ?>

                <?php if ($d['layout']['comment_disqus'] == "Y") :?>
                <?php if($mod):?>    
                <?php include $g['dir_layout'].'/_includes/disqus.php' ?>
                <?php endif?>
                <?php endif?>

            </div>
        </div>
    </div>
	<?php include $g['dir_layout'].'/_includes/footer.php' ?>
	<?php include $g['dir_layout'].'/_includes/_import.foot.php' ?>
	
</body>
</html>
