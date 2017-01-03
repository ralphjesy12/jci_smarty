<!-- ELASTIC SLIDER -->
<div id="ei-slider" class="ei-slider" data-tumbwidth="100">

    <ul class="ei-slider-large nomargin">
        <?php
        $_banners = json_decode(do_shortcode( '[SM_GET_BANNER]' ));
        if(!empty($_banners)){
            foreach ($_banners as $_banner) {
                $_banner_url = wp_get_attachment_url($_banner->banner_id);
                ?>
                <li>
                    <img src="<?=$_banner_url?>" alt="image01" />
                    <div class="ei-title">
                        <div class="container">
                            <h2><a href="<?=$_banner->link?>"><?=$_banner->title?></a></h2>
                            <h3><?=mb_strimwidth(strip_tags(html_entity_decode($_banner->description)), 0, 250, "&hellip;")?></h3>
                        </div>
                    </div>
                </li>
                <?php
            }
        }
        ?>
    </ul>

</div>
<!-- /ELASTIC SLIDER -->
<script type="text/javascript">
$(function() {
    $('#ei-slider').eislideshow({
        easing		: 'easeOutExpo',
        titleeasing	: 'easeOutExpo',
        titlespeed	: 1200
    });
});
</script>
