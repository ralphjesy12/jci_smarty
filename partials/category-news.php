
<section class="page-header dark page-header-xs">
    <div class="container">

        <h1>News and Events</h1>

    </div>
</section>

<section>
    <div class="container">
        <div class="row">

            <!-- LEFT -->
            <div class="col-md-9 col-sm-9">

                <!-- TIMELINE -->
                <div class="timeline timeline-inverse"><!-- .timeline-inverse = right position [left on RTL] -->
                    <div class="timeline-hline"><!-- horizontal line --></div>

                    <?php while ( have_posts() ) : the_post(); ?>
                        <!-- POST ITEM -->
                        <div class="blog-post-item">

                            <!-- timeline entry -->
                            <div class="timeline-entry"><!-- .rounded = entry -->
                                <?=get_the_date('j')?><span><?=get_the_date('M')?></span>
                                <div class="timeline-vline"><!-- vertical line --></div>
                            </div>
                            <!-- /timeline entry -->

                            <!-- IMAGE -->
                            <figure class="margin-bottom-20">
                                <?php the_post_thumbnail('thumb-post-single',[
                                    'class' => 'img-responsive'
                                ]); ?>
                            </figure>

                            <h2><a href="<?=get_the_permalink()?>"><?=get_the_title()?></a></h2>

                            <ul class="blog-post-info list-inline">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-clock-o"></i>
                                        <span class="font-lato"><?=get_the_date()?></span>
                                    </a>
                                </li>
                            </ul>

                            <p><?=get_the_excerpt()?></p>

                            <a href="<?=get_the_permalink()?>" class="btn btn-reveal btn-default">
                                <i class="fa fa-plus"></i>
                                <span>Read More</span>
                            </a>

                        </div>
                        <!-- /POST ITEM -->
                    <?php endwhile;?>

                </div>
                <!-- /TIMELINE -->


                <!-- PAGINATION -->
                <div class="text-left">
                    <?php posts_pagination() ?>
                </div>
                <!-- /PAGINATION -->

            </div>

            <div class="col-md-3 col-sm-3">
                <?php include get_stylesheet_directory().'/partials/content-sidebar.php';?>
                <!-- /CATEGORIES -->
            </div>

        </div>
    </div>
</section>
