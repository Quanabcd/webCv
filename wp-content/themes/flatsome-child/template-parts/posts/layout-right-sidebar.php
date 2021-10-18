        <div class="page-title-inner breadcumb flex-row  medium-flex-wrap flex-has-center">
            <div class="flex-col">
                &nbsp;
            </div>
            <div class="flex-col flex-center text-center">
                <?php
                do_action('flatsome_before_blog');
                ?>
              <div class="is-small">
                  <?php

                  if (function_exists('yoast_breadcrumb')) {
                      yoast_breadcrumb('<p id="breadcrumbs-ct">', '</p>');
                  }
                  ?>
                   </div>
            </div><!-- .flex-center -->
            <div class="flex-col flex-right nav-right text-right medium-text-center">
            </div>
        </div><!-- flex-row -->

<?php if(!is_single() && flatsome_option('blog_featured') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>

<div class="row row-large <?php if(flatsome_option('blog_layout_divider')) echo 'row-divided ';?>">
	
	<div class="large-9 col">
	<?php if(!is_single() && flatsome_option('blog_featured') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>
	<?php
		if(is_single()){
			get_template_part( 'template-parts/posts/single');
			//comments_template();
		} elseif(flatsome_option('blog_style_archive') && (is_archive() || is_search())){
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style_archive') );
		} else {
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style') );
		}
	?>
	</div> <!-- .large-9 -->

	<div class="post-sidebar large-3 col">
		<?php get_sidebar(); ?>
	</div><!-- .post-sidebar -->

</div><!-- .row -->

<?php 
	do_action('flatsome_after_blog');
?>