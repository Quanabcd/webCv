
<?php
$taxonomy = get_queried_object();
?>

<?php
	// Create IDS
$ids = array();
while ( have_posts() ) : the_post();
	array_push($ids, get_the_ID());
	endwhile; // end of the loop.
	$ids = implode(',', $ids);
	?>
	<div class="category-bg">
		<div class=" container margin-top-20">
			<div class="row">
				<section class="main_container collection col-md-12">
					<div class="col-md-12 col-xs-12 clearfix ">
						<div class="section-heading scrollpoint sp-effect3 active animated fadeInDown">
							<h1 class="heading-name-catesgory hidden">
							<?php

									echo $taxonomy->name;

								?>
							</h1>
							<span class="divider"></span>
						</div>
					</div>
					<div class="category-products products">
						<section class="products-view products-view-grid">	
							<?php
							$ids = array();
							while ( have_posts() ) : the_post();
								{
									?>

									<div class="col-md-3 col-xs-12">
										<div class="design-1 ">
											<a class="design-1-images" href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
												<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>" width="320" height="180" class="img-responsive" alt="<?php echo get_the_title(); ?>">

											</a>
											<div class="design-1-box">
												<div class="item-name" <?php $id = get_queried_object()->term_id;echo $color=GetColorPrd($id); ?> >
											<a href="<?php echo get_term_link($taxonomy->slug, 'product_cat'); ?>"
														title="<?php echo $taxonomy->name; ?>" >
															<?php echo $taxonomy->name; ?>
													</a>
												</div>
												<div class="item-time">
													<?php echo get_the_modified_date("d/m/yy"); ?>
												</div>
												<div class="item-title">
													<?php echo excerpt(15,get_the_title()); ?>								
												</div>
												<div class="item-description"> 
													<?php echo excerpt(15,get_the_excerpt()) ?>
												</div>

											</div>
										</div>
									</div>

									<?php
								}
							endwhile;
							?>
							<div class="text-xs-right">
								<div class="d_page">
									<?php flatsome_posts_pagination(); ?>
								</div>
							</div>
						</section>
					</div>
				</section>
			</div>
		</div>
	</div>