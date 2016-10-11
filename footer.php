

<footer id="footer">
    <div class="container padding-top-30 margin-bottom-30">
        <?php
        $_menu = wp_nav_menu(array(
            'menu' => 'Footer',
            'walker' => new xyren_smarty_walker_nav_menu(),
            'menu_id'=>'footerMain',
            'container' =>'ul',
            'menu_class' =>'list-inline text-center pull-right uppercase',
        ));
        ?>
        <div class="row footer-branding">
            <div class="col-md-4 margin-bottom-10">
                <img src="<?=get_stylesheet_directory_uri()?>/assets/img/Logo-JCI-Imus-Wagayway-500-white.png" alt="" class="custom-logo height-100">
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container uppercase">
            <div class="pull-right clearfix">
                <a href="#" class="social-icon social-icon-round social-icon-light social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>

                <a href="#" class="social-icon social-icon-round social-icon-light social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>

                <a href="#" class="social-icon social-icon-round social-icon-light social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google plus">
                    <i class="icon-gplus"></i>
                    <i class="icon-gplus"></i>
                </a>

                <a href="#" class="social-icon social-icon-round social-icon-light social-instagram pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                    <i class="icon-instagram"></i>
                    <i class="icon-instagram"></i>
                </a>

                <a href="#" class="social-icon social-icon-round social-icon-light social-youtube pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Youtube">
                    <i class="icon-youtube"></i>
                    <i class="icon-youtube"></i>
                </a>

                <a href="#" class="social-icon social-icon-round social-icon-light social-rss pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rss">
                    <i class="icon-rss"></i>
                    <i class="icon-rss"></i>
                </a>
            </div>
            <p style=" font-weight: bold; color: #fff; padding: 10px 0; margin: 0; ">
            &copy; 2016, JCI Imus Wagayway . All Rights Reserved.
        </p>
    </div>
</div>

</footer>
</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- PRELOADER -->
<div id="preloaderx">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div><!-- /PRELOADER -->
</body>
<?php
wp_footer();
global $_footers;
echo $_footers;
?>
</html>
