<!-- ELASTIC SLIDER -->
<div id="ei-slider" class="ei-slider" data-tumbwidth="100">

    <ul class="ei-slider-large nomargin">

        <!-- Slide 1 -->
        <li>
            <img src="<?=site_url('/wp-content/uploads/sites/2/2016/10/banner.jpg')?>" alt="image01" />
            <div class="ei-title">
                <div class="container">
                        <h2>My World Caravan</h2>
                        <h3>Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.</h3>
                </div>
            </div>
        </li>

    </ul>

    <!-- Thumbnails -->
    <ul class="ei-slider-thumbs">
        <li class="ei-slider-element">Current</li>
        <li><a href="#">Slide 1</a><img src="<?=site_url('/wp-content/uploads/sites/2/2016/10/banner.jpg')?>" alt="thumb01" /></li>
    </ul>
    <!-- /Thumbnails -->

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
