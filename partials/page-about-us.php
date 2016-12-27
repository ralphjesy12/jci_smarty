<?php
global $post;
?>
<section>
	<div class="container">

		<div class="row">

			<div class="col-lg-5 col-md-5 col-sm-5">

				<img class="img-responsive" src="<?=get_stylesheet_directory_uri()?>/assets/img/Logo-JCI-Imus-Wagayway-500.png" alt="">

			</div>

			<div class="col-lg-7 col-md-7 col-sm-7">
				<h2 class="size-25"><?=the_title()?></h2>


				<?php
				while ( have_posts() ) : the_post();
				?>
				<article id="post-<?=$post->ID?>">
					<div class="text-black entry-content post-<?=get_post_format($post->ID);?>">
						<?=wpautop(get_the_content($post->ID));?>
					</div>
				</article>
			<?php endwhile;?>


			<div class="hidden">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam in minima iusto voluptatem aliquam odit odio. Aliquam voluptatibus beatae officiis?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique excepturi voluptates placeat ducimus delectus magnam tempore dolore dolorem quisquam porro modi voluptatum eum saepe dolorum ratione officia sint eos minus.</p>
				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.</p>
					<cite>Albert Einstein</cite>
				</blockquote>
			</div>

		</div>

	</div>

</div>
</section>
