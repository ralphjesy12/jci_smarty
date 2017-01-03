
<!-- -->
<section>
	<div class="container">

		<div id="portfolio" class="portfolio-nogutter">
			<ul class="nav nav-pills mix-filter margin-bottom-60">
				<li data-filter="all" class="filter active"><a href="#">All</a></li>

				<?php

				$tags = get_tags([
					'taxonomy'=> 'post_tag',
					'hide_empty' => true,
				]);

				foreach ($tags as $key => $tag) {
					?>
					<li data-filter="<?=$tag->slug?>" class="filter"><a href="#"><?=$tag->name?></a></li>
					<?php
				}
				?>
			</ul>

			<div class="row mix-grid">

				<?php

				$projects = get_posts([
					'category_name' => 'projects',
					'posts_per_page' => -1
				]);

				foreach ($projects as $key => $project):
					$media = get_attached_media( 'image' ,$project->ID);
					$tags = wp_get_post_tags($project->ID,['fields'=>'slugs']);
					?>
					<div class="col-md-3 col-sm-3 mix <?=implode(' ',$tags)?>">
						<div class="item-box">
							<figure>
								<span class="item-hover">
									<span class="overlay dark-5"></span>
									<span class="inner">
										<!-- details -->
										<a class="ico-rounded" href="<?=get_the_permalink($project->ID)?>">
											<span class="glyphicon glyphicon-option-horizontal size-20"></span>
										</a>
									</span>
								</span>
								<?php if(count($media)>1): ?>
									<div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"goDown"}'>
										<?php
										foreach ($media as $key => $m) {
											$image = wp_get_attachment_image_src($m->ID,'thumb-1by1');
											?>
											<div>
												<img class="img-responsive" src="<?=$image[0]?>" alt="">
											</div>
											<?php
										}
										?>
									</div>
								<?php else: ?>
									<?php if(has_post_thumbnail($project->ID)): ?>
										<img class="img-responsive" src="<?=get_the_post_thumbnail_url($project->ID,'thumb-1by1')?>" alt="">
									<?php endif; ?>
								<?php endif; ?>
							</figure>
							<div class="item-box-desc">
								<h3  style=" min-height: 36px;"><?=get_the_title($project->ID)?></h3>
								<ul class="list-inline categories nomargin">
									<?php
									$tags = wp_get_post_tags($project->ID);
									foreach($tags as $tag):
										?>
										<li><a href="#"><?=$tag->name?></a></li>
										<?php
									endforeach;
									?>
								</ul>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<!-- / -->
