<section id="about" class="padding-xxs">
    <div class="container">
        <div class="heading-title heading-dotted text-center">
            <h3>ABOUT JCI <span>IMUS WAGAYWAY</span></h3>
        </div>
        <div class="row">

            <!-- tabs -->
            <div class="col-md-3 col-sm-3 nopadding">
                <ul class="nav nav-tabs nav-stacked">
                    <li class="active">
                        <a href="#tab_a" data-toggle="tab" class="text-right uppercase">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="#tab_b" data-toggle="tab" class="text-right uppercase">
                            Our History
                        </a>
                    </li>
                    <li>
                        <a href="#tab_c" data-toggle="tab" class="text-right uppercase">
                            Mission and Vision
                        </a>
                    </li>
                </ul>
            </div>

            <!-- tabs content -->
            <div class="col-md-9 col-sm-9 nopadding">
                <div class="tab-content tab-stacked padding-top-0">
                    <div id="tab_a" class="tab-pane active">
                        <?=wpautop(get_the_excerpt(21));?>
                        <p class="text-center">
                            <a href="<?=site_url('about-us')?>" class="btn btn-default btn-readmore uppercase size-12">Read more <i class="fa fa-fw fa-angle-double-right size-16 nopadding"></i></a>
                        </p>
                    </div>

                    <div id="tab_b" class="tab-pane">
                        <?=wpautop(get_the_excerpt(33));?>
                        <p class="text-center">
                            <a href="<?=site_url('our-history')?>" class="btn btn-default btn-readmore uppercase size-12">Read more <i class="fa fa-fw fa-angle-double-right size-16 nopadding"></i></a>
                        </p>
                    </div>

                    <div id="tab_c" class="tab-pane">
                        <?=wpautop(get_the_excerpt(38));?>
                        <p class="text-center">
                            <a href="<?=site_url('mission-and-vision')?>" class="btn btn-default btn-readmore uppercase size-12">Read more <i class="fa fa-fw fa-angle-double-right size-16 nopadding"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">

            </div>
        </div>
    </div>
</section>
<section id="projects" class="padding-xxs alternate">
    <div class="container">
        <div class="row">
            <div class="heading-title heading-dotted text-center">
                <h3>OUR <span>PROJECTS</span></h3>
            </div>
        </div>
        <div class="row">
            <?php

            // Get Latest 2 Projects

            $latestProjects = get_posts([
                'category_name' => 'projects',
                'posts_per_page' => 2
            ]);

            if(isset($latestProjects[0])):
                ?>
                <div class="col-sm-4">
                    <div class="mason-item mason-item-left embed-responsive embed-responsive-5by6" style="background-image: url('<?=(get_the_post_thumbnail_url($latestProjects[0]->ID,'thumb-5by6'))?>')">
                        <div class="gradient-overlay-faded-black"> </div>
                        <div class="mason-item-details">
                            <label><a href="<?=get_the_permalink($latestProjects[0]->ID)?>"><?=get_the_title($latestProjects[0]->ID)?></a></label>
                            <p><?=get_the_excerpt($latestProjects[0]->ID)?></p>
                        </div>
                    </div>
                </div>
                <?php
            endif;
            ?>

            <?php
            if(isset($latestProjects[0])):
                ?>
                <div class="col-sm-8">
                    <div class="mason-item mason-item-right embed-responsive embed-responsive-5by2" style="background-image: url('<?=(get_the_post_thumbnail_url($latestProjects[1]->ID,'thumb-5by2'))?>')">
                        <div class="gradient-overlay-faded-black"> </div>
                        <div class="mason-item-details">
                            <label><a href="<?=get_the_permalink($latestProjects[1]->ID)?>"><?=get_the_title($latestProjects[1]->ID)?></a></label>
                            <p><?=get_the_excerpt($latestProjects[1]->ID)?></p>
                        </div>
                    </div>
                </div>
                <?php
            endif;
            ?>
            <div class="col-sm-8">
                <div class="mason-item callout alert alert-warning margin-top-20 margin-bottom-0">
                    <div class="row">
                        <div class="col-md-8 col-sm-8"><!-- left text -->
                            <h4 class="uppercase"><strong>100+ Projects</strong> and counting</h4>
                            <p>Working together to protect our shared home</p>
                        </div><!-- /left text -->
                        <div class="col-md-4 col-sm-4 text-right"><!-- right btn -->
                            <a href="<?=site_url('our-projects')?>" rel="nofollow" target="_blank" class="btn btn-black btn-lg">VIEW ALL PROJECTS</a>
                        </div><!-- /right btn -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="opportunities" class="padding-xxs" style="background-image:url(<?=get_stylesheet_directory_uri()?>/assets/img/waves.png)">
    <div class="container">
        <div class="row">
            <div class="heading-title heading-dotted text-center">
                <h3>AREAS OF <span>OPPORTUNITIES</span></h3>
            </div>
            <p class="text-center">
                Our mission is to conserve nature and reduce the most pressing threats to the diversity of life on Earth.
            </p>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-2 col-md-1-5 text-center">
                <img class="img-responsive img-circle" src="<?=get_stylesheet_directory_uri()?>/assets/img/invest.png" alt="img" style="height:150px;width:150px;">
                <h3 class="margin-top-10 uppercase">Invest</h3>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot</p>
                <a href="#" class="btn btn-link btn-sm">READ MORE</a>
            </div>
            <div class="col-sm-4 col-xs-2 col-md-1-5 text-center">
                <img class="img-responsive img-circle" src="<?=get_stylesheet_directory_uri()?>/assets/img/connect.png" alt="img" style="height:150px;width:150px;">
                <h3 class="margin-top-10 uppercase">Connect</h3>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot</p>
                <a href="#" class="btn btn-link btn-sm">READ MORE</a>
            </div>
            <div class="col-sm-4 col-xs-2 col-md-1-5 text-center">
                <img class="img-responsive img-circle" src="<?=get_stylesheet_directory_uri()?>/assets/img/collaborate.png" alt="img" style="height:150px;width:150px;">
                <h3 class="margin-top-10 uppercase">Collaborate</h3>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot</p>
                <a href="#" class="btn btn-link btn-sm">READ MORE</a>
            </div>
            <div class="col-sm-4 col-xs-2 col-md-1-5 text-center">
                <img class="img-responsive img-circle" src="<?=get_stylesheet_directory_uri()?>/assets/img/motivate.png" alt="img" style="height:150px;width:150px;">
                <h3 class="margin-top-10 uppercase">Motivate</h3>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot</p>
                <a href="#" class="btn btn-link btn-sm">READ MORE</a>
            </div>
            <div class="col-sm-4 col-xs-2 col-md-1-5 text-center">
                <img class="img-responsive img-circle" src="<?=get_stylesheet_directory_uri()?>/assets/img/impact.png" alt="img" style="height:150px;width:150px;">
                <h3 class="margin-top-10 uppercase">Impact</h3>
                <p>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot</p>
                <a href="#" class="btn btn-link btn-sm">READ MORE</a>
            </div>
        </div>
        <div class="row">
            <a href="<?=site_url('register')?>" class="btn btn-warning btn-lg btn-yellow margin-top-50 btn-joinnow uppercase width-150">Join Us Now</a>
        </div>
    </div>
</section>
<section id="news" class="padding-xxs">
    <div class="container">
        <div class="row">
            <div class="heading-title heading-dotted text-center">
                <h3>LATEST NEWS <span>&amp; EVENTS</span></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="row"><!-- item -->
                    <div class="col-md-3">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/img/news-1.png" class="img-responsive">
                    </div>
                    <div class="col-md-9">
                        <h4 class="margin-bottom-0"><a href="#">Sed ut perspiciatis unde omnis</a></h4>
                        <ul class="list-inline nomargin">
                            <li><i class="fa fa-fw fa-calendar"></i> Mon, January 31</li>
                            <li class="pull-right"><i class="fa fa-fw fa-clock-o"></i>3min ago</li>
                        </ul>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and</p>
                    </div>
                </div>
                <div class="row"><!-- item -->
                    <div class="col-md-3">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/img/news-2.png" class="img-responsive">
                    </div>
                    <div class="col-md-9">
                        <h4 class="margin-bottom-0"><a href="#">Sed ut perspiciatis unde omnis</a></h4>
                        <ul class="list-inline nomargin">
                            <li><i class="fa fa-fw fa-calendar"></i> Mon, January 31</li>
                            <li class="pull-right"><i class="fa fa-fw fa-clock-o"></i>3min ago</li>
                        </ul>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and</p>
                    </div>
                </div>
                <div class="row"><!-- item -->
                    <div class="col-md-3">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/img/news-3.png" class="img-responsive">
                    </div>
                    <div class="col-md-9">
                        <h4 class="margin-bottom-0"><a href="#">Sed ut perspiciatis unde omnis</a></h4>
                        <ul class="list-inline nomargin">
                            <li><i class="fa fa-fw fa-calendar"></i> Mon, January 31</li>
                            <li class="pull-right"><i class="fa fa-fw fa-clock-o"></i>3min ago</li>
                        </ul>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and</p>
                    </div>
                </div>
                <div class="row"><!-- item -->
                    <div class="col-md-3">
                        <img src="<?=get_stylesheet_directory_uri()?>/assets/img/news-4.png" class="img-responsive">
                    </div>
                    <div class="col-md-9">
                        <h4 class="margin-bottom-0"><a href="#">Sed ut perspiciatis unde omnis</a></h4>
                        <ul class="list-inline nomargin">
                            <li><i class="fa fa-fw fa-calendar"></i> Mon, January 31</li>
                            <li class="pull-right"><i class="fa fa-fw fa-clock-o"></i>3min ago</li>
                        </ul>
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-4">
                    <img src="<?=get_stylesheet_directory_uri()?>/assets/img/news-5.png" class="img-responsive">
                    <h4 class="size-16 margin-top-20 margin-bottom-0"><a href="#">Sed ut perspiciatis unde omnis</a></h4>
                    <p>But I must explain to you how all this mistaken idea of </p>
                </div>
                <div class="col-sm-4">
                    <img src="<?=get_stylesheet_directory_uri()?>/assets/img/news-6.png" class="img-responsive">
                    <h4 class="size-16 margin-top-20 margin-bottom-0"><a href="#">Sed ut perspiciatis unde omnis</a></h4>
                    <p>But I must explain to you how all this mistaken idea of </p>
                </div>
                <div class="col-sm-4">
                    <img src="<?=get_stylesheet_directory_uri()?>/assets/img/news-7.png" class="img-responsive">
                    <h4 class="size-16 margin-top-20 margin-bottom-0"><a href="#">Sed ut perspiciatis unde omnis</a></h4>
                    <p>But I must explain to you how all this mistaken idea of </p>
                </div>
                <div class="col-xs-12">
                    <div class="mason-item callout alert alert-warning margin-top-20 margin-bottom-0">
                        <div class="row">
                            <div class="col-md-8 col-sm-8"><!-- left text -->
                                <h4 class="uppercase"><strong>100+ NEWS</strong> and counting</h4>
                                <p>Working together to protect our shared home</p>
                            </div><!-- /left text -->
                            <div class="col-md-4 col-sm-4 text-right"><!-- right btn -->
                                <a href="<?=site_url('category/news')?>" rel="nofollow" target="_blank" class="btn btn-black">VIEW ALL NEWS</a>
                            </div><!-- /right btn -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="dark" style="background: url('<?=get_stylesheet_directory_uri()?>/assets/img/contact-us.png')">
    <div class="container">

        <p class="text-center size-16 width-600" style="margin:0 auto;">
            We are always ready to help you with any possible question, problem or inquiry. Connect with us thru the most popular networks

        </p>
        <div class="clearfix margin-top-20" style="margin: 0 auto; display: block; width: 500px; text-align: center;">
            <a href="#" class="social-icon social-icon-sm social-icon-round social-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
            </a>

            <a href="#" class="social-icon social-icon-sm social-icon-round social-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
            </a>

            <a href="#" class="social-icon social-icon-sm social-icon-round social-gplus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google plus">
                <i class="icon-gplus"></i>
                <i class="icon-gplus"></i>
            </a>

            <a href="#" class="social-icon social-icon-sm social-icon-round social-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                <i class="icon-instagram"></i>
                <i class="icon-instagram"></i>
            </a>

            <a href="#" class="social-icon social-icon-sm social-icon-round social-youtube" data-toggle="tooltip" data-placement="top" title="" data-original-title="Youtube">
                <i class="icon-youtube"></i>
                <i class="icon-youtube"></i>
            </a>

            <a href="#" class="social-icon social-icon-sm social-icon-round social-rss" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rss">
                <i class="icon-rss"></i>
                <i class="icon-rss"></i>
            </a>
        </div>
        <p class="text-center">OR</p>
        <button class="btn btn-warning btn-orange noradius block" style="margin: auto; background: #f47423; border: 0;"><i class="fa fa-plane"></i>LEAVE US MESSAGE</button>
    </div>
</section>
