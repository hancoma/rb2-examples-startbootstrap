<!DOCTYPE html>
<html lang="en">
<head>
<?php include $g['dir_layout'].'/_includes/_import.head.php' ?>
</head>
<body>

    <div class="brand">Business Casual</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="<?php echo RW(0)?>">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo RW(0)?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;layoutPage=about">about</a>
                    </li>
                    <li>
                        <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;layoutPage=blog">blog</a>
                    </li>
                    <li>
                        <a href="<?php echo $g['s']?>/?r=<?php echo $r?>&amp;layoutPage=contact">contact</a>
                    </li>
                    <?php getWidget('default/mk-menu-default',array('smenu'=>'0','limit'=>'2','link'=>'link',))?> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <?php include __KIMS_CONTENT__ ?>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

	<?php include $g['dir_layout'].'/_includes/_import.foot.php' ?>
	
</body>
</html>
