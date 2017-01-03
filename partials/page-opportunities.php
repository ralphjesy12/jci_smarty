
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
                <?php
                $page = get_posts([
                    'name' => 'loose-coins-for-lost-hope',
                    'post_status' => 'publish',
                    'posts_per_page' => 1
                ]);
                $page = $page[0];
                ?>
                <img class="img-responsive img-circle" src="<?=(get_the_post_thumbnail_url($page->ID,'thumb-1by1'))?>" alt="img" style="height:150px;width:150px;">
                <h3 class="margin-top-10 uppercase">Invest</h3>
                <p style="min-height:170px;"><?=get_the_excerpt($page->ID)?></p>
                <a href="<?=get_the_permalink($page->ID)?>" class="btn btn-link btn-sm">READ MORE</a>
            </div>
            <div class="col-sm-4 col-xs-2 col-md-1-5 text-center">
                <?php
                $page = get_posts([
                    'name' => 'bag-to-school',
                    'post_status' => 'publish',
                    'posts_per_page' => 1
                ]);
                $page = $page[0];
                ?>
                <img class="img-responsive img-circle" src="<?=(get_the_post_thumbnail_url($page->ID,'thumb-1by1'))?>" alt="img" style="height:150px;width:150px;">
                <h3 class="margin-top-10 uppercase">Connect</h3>
                <p style="min-height:170px;"><?=get_the_excerpt($page->ID)?></p>
                <a href="<?=get_the_permalink($page->ID)?>" class="btn btn-link btn-sm">READ MORE</a>
            </div>
            <div class="col-sm-4 col-xs-2 col-md-1-5 text-center">
                <?php
                $page = get_posts([
                    'name' => 'wagayway-university',
                    'post_status' => 'publish',
                    'posts_per_page' => 1
                ]);
                $page = $page[0];
                ?>
                <img class="img-responsive img-circle" src="<?=(get_the_post_thumbnail_url($page->ID,'thumb-1by1'))?>" alt="img" style="height:150px;width:150px;">
                <h3 class="margin-top-10 uppercase">Collaborate</h3>
                <p style="min-height:170px;"><?=get_the_excerpt($page->ID)?></p>
                <a href="<?=get_the_permalink($page->ID)?>" class="btn btn-link btn-sm">READ MORE</a>
            </div>
            <div class="col-sm-4 col-xs-2 col-md-1-5 text-center">
                <?php
                $page = get_posts([
                    'name' => 'build-and-unite-as-one',
                    'post_status' => 'publish',
                    'posts_per_page' => 1
                ]);
                $page = $page[0];
                ?>
                <img class="img-responsive img-circle" src="<?=(get_the_post_thumbnail_url($page->ID,'thumb-1by1'))?>" alt="img" style="height:150px;width:150px;">
                <h3 class="margin-top-10 uppercase">Motivate</h3>
                <p style="min-height:170px;"><?=get_the_excerpt($page->ID)?></p>
                <a href="<?=get_the_permalink($page->ID)?>" class="btn btn-link btn-sm">READ MORE</a>
            </div>
            <div class="col-sm-4 col-xs-2 col-md-1-5 text-center">
                <?php
                $page = get_posts([
                    'name' => 'fill-in-the-g-a-p',
                    'post_status' => 'publish',
                    'posts_per_page' => 1
                ]);
                $page = $page[0];
                ?>
                <img class="img-responsive img-circle" src="<?=(get_the_post_thumbnail_url($page->ID,'thumb-1by1'))?>" alt="img" style="height:150px;width:150px;">
                <h3 class="margin-top-10 uppercase">Impact</h3>
                <p style="min-height:170px;"><?=get_the_excerpt($page->ID)?></p>
                <a href="<?=get_the_permalink($page->ID)?>" class="btn btn-link btn-sm">READ MORE</a>
            </div>
        </div>
        <div class="row">
            <a href="<?=site_url('register')?>" class="btn btn-warning btn-lg btn-yellow margin-top-50 btn-joinnow uppercase width-150">Join Us Now</a>
        </div>
    </div>
</section>
