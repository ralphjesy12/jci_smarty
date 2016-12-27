<section>
	<div class="container cont-<?=basename(get_permalink())?>">
		<div class="col-md-12">
			<div class="heading-title heading-border heading-color">
				<h1><?=the_title()?></h1>
			</div>
			<?php
			while ( have_posts() ) : the_post();
			?>
			<article id="post-<?=$post->ID?>">
				<div class="text-black size-14 entry-content post-<?=get_post_format($post->ID);?>">
					<?=wpautop(get_the_content($post->ID));?>
				</div>
			</article>
		<?php endwhile;?>
	</div>
</div>
</section>
