<?php
global $post;
$_parentcat = get_the_category()[0]->category_parent;
?>
<section>
    <div class="container">
        <a href="#" class="text-gray bold size-10 uppercase letter-spacing-10"><?=!empty(get_the_category($post->ID)[0]->name)?get_the_category($post->ID)[0]->name:''?></a>
        <header class="text-left margin-bottom-50 tiny-line">
            <h2 class="font-proxima"><a href="<?=get_the_permalink()?>"><?=the_title()?></a></h2>
            <!-- <a href="#" class="size-12 text-black uppercase bold">BY: John Doe</a>  &nbsp; -->
            <a href="#" class="size-12 text-gray"><?=get_the_date()?></a>
            <br/>
        </header>

        <div class="row">
            <div class="col-md-8 col-sm-12 text-justify ">
                <figure class="margin-bottom-30">
                    <a class="image-hover lightbox block" href="<?=the_post_thumbnail_url('full')?>" data-plugin-options='{"type":"image"}'>
                        <span class="image-hover-icon image-hover-dark">
                            <i class="fa fa-search-plus"></i>
                        </span>
                        <?php the_post_thumbnail('thumb-post-single',[
                            'class' => 'img-responsive'
                            ])?>
                        </a>
                    </figure>
                    <div class="post-content">
                        <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
                </div>
                <?php
                if(in_category(['news'])):?>
                <div class="row">
                    <div class="col-md-12">
                        <?php if(in_category(['news'])):?>
                            <a class="btn btn-3d btn-reveal btn-black pull-right" href="<?=site_url('category/news')?>">
                                <i class="fa fa-newspaper-o"></i>
                                <span>Go Back to All News</span>
                            </a>
                        <?php endif;?>
                    </div>
                </div>
            <?php endif;?>

            <?php if(in_category(['news'])):?>
                <div class="clearfix margin-top-30">

                    <span class="pull-left margin-top-6 bold hidden-xs">
                        Share Post:
                    </span>
                    <?php
                    $img = esc_attr(get_the_post_thumbnail_url($post->ID,'mid-image'));
                    $url = esc_sql(get_permalink());
                    $twittertext = $text = esc_attr(get_the_title());
                    ?>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?=$url?>&p[title]=<?=$text?>" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="http://twitter.com/share?text=<?=$twittertext?>&url=<?=$url?>" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google plus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>

                    <a href="http://pinterest.com/pin/create/button/?url=<?=$url?>&description=<?=$text?>&media=<?=$img?>" class="social-icon social-icon-sm social-icon-transparent social-pinterest pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                        <i class="icon-pinterest"></i>
                        <i class="icon-pinterest"></i>
                    </a>

                    <a href="#" class="social-icon social-icon-sm social-icon-transparent social-call pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="Email">
                        <i class="icon-email3"></i>
                        <i class="icon-email3"></i>
                    </a>

                </div>

                <?php comments_template(); ?>
            <?php endif;?>
        </div>
        <!-- <div class="col-sm-4 text-left hidden-xs hidden-sm">

        <div class="side-nav margin-bottom-10 ">

        <div class="side-nav-head">
        <button class="fa fa-bars"></button>
        <h4>CATEGORIES</h4>
    </div>
    <?php
    $_category = get_categories( array( 'child_of' => $_parentcat ));
    if(in_category(['news'])):?>
    <ul class="list-group list-group-bordered list-group-noicon uppercase">
    <?php
    $category_tags = get_category_tags(get_category_by_slug('news')->term_id);
    ?>
    <?php foreach ($category_tags as $key => $tag):?>
    <li class="list-group-item">
    <a href="<?=($tag->link)?>" class="tag-<?=($tag->ID)?>" data-id="<?=($tag->ID)?>">
    <span class="size-11 text-muted pull-right">(<?=(int)($tag->count)?>)</span>
    <?=strtoupper($tag->name)?>
</a>
</li>
<?php endforeach; ?>
</ul>
<?php endif; ?>
</div> -->

<div class="col-md-3 col-sm-3">
    <?php include get_stylesheet_directory().'/partials/content-sidebar.php';?>
    <!-- /CATEGORIES -->
</div>
<div class="col-sm-6 col-md-3 hidden-xs hidden-sm">
    <?php
    if(is_active_sidebar('sidebar-ads')){
        dynamic_sidebar('sidebar-ads');
    }
    ?>
</div>
</div>
</div>
</section>
