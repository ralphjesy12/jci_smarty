
<!-- INLINE SEARCH -->
<div class="inline-search clearfix margin-bottom-30">
    <form action="#" method="get" class="widget_search">
        <input type="search" placeholder="Start Searching..." id="s" name="s" class="serch-input">
        <button type="submit">
            <i class="fa fa-search"></i>
        </button>
    </form>
</div>
<!-- /INLINE SEARCH -->

<hr>


<!-- FACEBOOK -->
<iframe class="hidden-xs" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fjciimuswagayway&amp;width=263&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:263px; height:258px;"></iframe>


<!-- side navigation -->
<div class="side-nav margin-bottom-60 margin-top-30 hidden">

    <div class="side-nav-head">
        <button class="fa fa-bars"></button>
        <h4>CATEGORIES</h4>
    </div>
    <ul class="list-group list-group-bordered list-group-noicon uppercase">
        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(12)</span> MEDIA</a></li>
        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(8)</span> MOVIES</a></li>
        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(32)</span> NEW</a></li>
        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(16)</span> TUTORIALS</a></li>
        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(2)</span> DEVELOPMENT</a></li>
        <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(1)</span> UNCATEGORIZED</a></li>

    </ul>
    <!-- /side navigation -->


</div>


<!-- JUSTIFIED TAB -->
<div class="tabs nomargin-top hidden-xs margin-bottom-60">

    <!-- tabs -->
    <ul class="nav nav-tabs nav-bottom-border nav-justified">
        <li>
            <a href="#latest-news" data-toggle="tab">
                Latest News
            </a>
        </li>
        <li class="active">
            <a href="#latest-projects" data-toggle="tab">
                Latest Projects
            </a>
        </li>
    </ul>

    <!-- tabs content -->
    <div class="tab-content margin-bottom-60 margin-top-30">

        <!-- POPULAR -->
        <div id="latest-news" class="tab-pane">
            <?php

            $newspack = get_posts([
                'category_name' => 'news',
                'posts_per_page' => 3
            ]);

            foreach ($newspack as $key => $news) {
                ?>
                <div class="row tab-post"><!-- post -->

                    <?php if(has_post_thumbnail($news->ID)): ?>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <a href="<?=get_the_permalink($news->ID)?>">
                                <img src="<?=get_the_post_thumbnail_url($news->ID,'thumb-1by1')?>" width="50" alt="">
                            </a>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <?php else: ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php endif;?>
                            <a href="<?=get_the_permalink($news->ID)?>" class="tab-post-link"><?=get_the_title($news->ID)?></a>
                            <small><?=get_the_date('',$news->ID)?></small>
                        </div>
                    </div><!-- /post -->
                    <?php
                }
                ?>

            </div>
            <!-- /POPULAR -->


            <!-- RECENT -->
            <div id="latest-projects" class="tab-pane active">

                <?php
                $newspack = get_posts([
                    'category_name' => 'projects',
                    'posts_per_page' => 3
                ]);

                foreach ($newspack as $key => $news) {
                    ?>
                    <div class="row tab-post"><!-- post -->
                        <?php if(has_post_thumbnail($news->ID)): ?>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <a href="<?=get_the_permalink($news->ID)?>">
                                <img src="<?=get_the_post_thumbnail_url($news->ID,'thumb-1by1')?>" width="50" alt="">
                            </a>
                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                        <?php else: ?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php endif;?>
                            <a href="<?=get_the_permalink($news->ID)?>" class="tab-post-link"><?=get_the_title($news->ID)?></a>
                            <small><?=get_the_date('',$news->ID)?></small>
                        </div>
                    </div><!-- /post -->
                    <?php
                }
                ?>


            </div>
            <!-- /RECENT -->

        </div>

    </div>
    <!-- JUSTIFIED TAB -->



    <!-- TAGS -->
    <h3 class="hidden-xs size-16 margin-bottom-20">TAGS</h3>
    <div class="hidden-xs margin-bottom-60">

        <?php

        // Get the tags
        $posttags = get_tags();
        if ($posttags) {
            foreach($posttags as $tag) {
                ?>
                <a class="tag" href="#">
                    <span class="txt"><?=$tag->name?></span>
                    <span class="num"><?=$tag->count?></span>
                </a>
                <?php
            }
        }
        ?>

    </div>

    <!-- FEATURED VIDEO -->
    <h3 class="hidden-xs size-16 margin-bottom-10 hidden">FEATURED VIDEO</h3>
    <div class="hidden-xs embed-responsive embed-responsive-16by9 margin-bottom-60 hidden">
        <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/8408210" width="800" height="450"></iframe>
    </div>


    <hr>


    <!-- SOCIAL ICONS -->
    <div class="hidden-xs margin-top-30 margin-bottom-60">
        <a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
        </a>

        <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
            <i class="icon-twitter"></i>
            <i class="icon-twitter"></i>
        </a>

        <a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google plus">
            <i class="icon-gplus"></i>
            <i class="icon-gplus"></i>
        </a>

        <a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
            <i class="icon-linkedin"></i>
            <i class="icon-linkedin"></i>
        </a>

        <a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rss">
            <i class="icon-rss"></i>
            <i class="icon-rss"></i>
        </a>
    </div>

</div>
