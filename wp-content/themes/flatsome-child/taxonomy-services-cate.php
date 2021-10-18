<?php
get_header();
$taxonomy = get_queried_object();
?>

<div id="services" class="blog-wrapper blog-archive page-wrapper">
	<header class="archive-page-header">
		<div class="row">
			<div class="large-12 text-center col">
				<h1 class="page-title is-large uppercase">
					Danh mục: <span>	<?php echo $taxonomy->name; ?></span>	</h1>
				</div>
			</div>
		</header>
		<div class="row align-center">
			<div class="large-10 col">
				<div class="row large-columns-3 medium-columns- small-columns-1">
					<?php

					$ids = array();
					while ( have_posts() ) : the_post();
						array_push($ids, get_the_ID());
					endwhile; 
					$ids = implode(',', $ids);
					?>


					<?php
					$ids = array();
					while ( have_posts() ) : the_post();
						{
							?>
							<div class="col post-item">
								<div class="col-inner">
									<a href="<?php echo get_the_permalink(); ?>"  title="<?php echo get_the_title(); ?>" class="plain">
										<div class="box box-text-bottom box-blog-post has-hover">
											<div class="box-image">
												<div class="image-cover" style="padding-top:75%;">
													<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>" width="866" height="600" class="img-responsive" alt="<?php echo get_the_title(); ?>">			</div>
												</div>
												<div class="box-text text-left">
													<div class="box-text-inner blog-post-inner">
														<h5 class="post-title is-large"><?php echo excerpt(15,get_the_title()); ?></h5>
														<div class="is-divider"></div>
														<p class="from_the_blog_excerpt"><?php echo excerpt(15,get_post_meta(get_the_ID(),'services_desc',true)) ?>	</p>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>



								<?php
							}
						endwhile;
						?>
					</div>

				</div>

			</div>

			<div class="text-xs-right">
				<div class="d_page">
					<?php flatsome_posts_pagination(); ?>
				</div>
			</div>

		</div>
			<?php

get_footer();

?>