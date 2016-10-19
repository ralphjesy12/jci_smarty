
<!--
AVAILABLE HEADER CLASSES

Default nav height: 96px
.header-md 		= 70px nav height
.header-sm 		= 60px nav height

.noborder 		= remove bottom border (only with transparent use)
.transparent	= transparent header
.translucent	= translucent header
.sticky			= sticky header
.static			= static header
.dark			= dark header
.bottom			= header on bottom

shadow-before-1 = shadow 1 header top
shadow-after-1 	= shadow 1 header bottom
shadow-before-2 = shadow 2 header top
shadow-after-2 	= shadow 2 header bottom
shadow-before-3 = shadow 3 header top
shadow-after-3 	= shadow 3 header bottom

.clearfix		= required for mobile menu, do not remove!

Example Usage:  class="clearfix sticky header-sm transparent noborder"
-->
<div class="sticky-side sticky-side-left visible-md visible-lg">
    <a href="<?=site_url('mobile')?>" class="social-icon social-android" >
        <i class="icon-android"></i>
        <i class="icon-android"></i>
        <span style="width: 192px; position: absolute; top: 0; left: 22px; display: block; height: 38px; vertical-align: middle; line-height: 38px; padding: 0 13px; font-size: 16px;">Download App Now</span>
    </a>
</div>
<div id="header" class="sticky clearfix">

    <div id="topBar">
        <div class="container">

            <!-- right -->
            <ul class="top-links list-inline pull-right">
                <li class="hidden-xs"><a href="<?=site_url('register')?>" style="    background: #f58035; color: #fff; font-weight: bold;">JOIN US NOW</a></li>
                <li class="hidden-xs"><a href="<?=site_url('donate')?>"><i class="fa fa-gift"></i>DONATE</a></li>
            </ul>

            <ul class="top-links list-inline">
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                        <i class="icon-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                        <i class="icon-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google plus">
                        <i class="icon-gplus"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                        <i class="icon-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Youtube">
                        <i class="icon-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rss">
                        <i class="icon-rss"></i>
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <!-- TOP NAV -->


    <!-- SEARCH HEADER -->
    <div class="search-box over-header">
        <a id="closeSearch" href="#" class="glyphicon glyphicon-remove"></a>

        <form action="page-search-result-1.html" method="get">
            <input type="text" class="form-control" placeholder="SEARCH" />
        </form>
    </div>
    <!-- /SEARCH HEADER -->


    <header id="topNav">
        <div class="container">

            <!-- Mobile Menu Button -->
            <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>

            <!-- BUTTONS -->
            <ul class="pull-right nav nav-pills nav-second-main">

                <!-- SEARCH -->
                <li class="search">
                    <a href="javascript:;">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
                <!-- /SEARCH -->

            </ul>
            <!-- Logo -->
            <a class="logo pull-left" href="<?=site_url()?>">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/Logo-JCI-Imus-Wagayway-500.png" alt="" />
            </a>
            <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
                <nav class="nav-main">

                    <?php
                    $_menu = wp_nav_menu(array(
                        'menu' => 'Main menu',
                        'walker' => new xyren_smarty_walker_nav_menu(),
                        'menu_id'=>'topMain',
                        'container' =>'ul',
                        'menu_class' =>'nav nav-pills nav-main has-topBar',
                        'echo' => false
                    ));
                    echo $_menu;
                    ?>
                </nav>
            </div>

        </div>
    </header>
</div>
