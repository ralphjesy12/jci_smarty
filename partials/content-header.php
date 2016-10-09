
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
<div id="header" class="sticky clearfix">

    <!-- TOP NAV -->
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
                    <div class="search-box">
                        <form action="<?=site_url()?>" method="get">
                            <div class="input-group">
                                <input type="text" name="s" placeholder="Search" class="form-control" />
                                <span class="input-group-btn">
                                    <button class="btn btn-white noradius" type="submit">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- /SEARCH -->

            </ul>
            <!-- Logo -->
            <a class="logo pull-left" href="<?=site_url()?>">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/Logo-JCI-Imus-Wagayway.png" alt="" />
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
