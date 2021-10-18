


<?php if(!is_single() && get_theme_mod('blog_featured', '') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>
<div class="row  <?php if(get_theme_mod('blog_layout_divider', 1)) echo 'row-divided ';?>">

	<div class="post-sidebar large-3 col">

        <?php get_sidebar(); ?>

        <aside id="flatsome_recent_posts-20" class="hide_on_mobile extendedwopts-hide extendedwopts-mobile widget flatsome_recent_posts">
            <h3 class="widget-title "><span>Bài viết nổi bật</span></h3><div class="is-divider small"></div>
            <ul>
                <?php
                $args = array(
                    'post_type'     => 'post',
                    'post_status'   => 'publish',
                    'posts_per_page'=> 7,
                    'orderby'       => 'post_modified ',
                    'order'         => 'desc',
                    'meta_query' => array(
                        array(
                            'key'     => 'newshot',
                            'value'   => '1'
                        ),
                    )

                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                    ?>

                    <li class="recent-blog-posts-li">
                        <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                            <div class="flex-col mr-half">
                                <div class="badge post-date  badge-outline">
                                    <div class="badge-inner bg-fill" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2) ), url(); color:#fff; text-shadow:1px 1px 0px rgba(0,0,0,.5); border:0;">

                                        <?php the_post_thumbnail('thumbnail') ?>
                                    </div>
                                </div>

                            </div><!-- .flex-col -->
                            <div class="flex-col flex-grow">
                                <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a>

                            </div>
                    </li>

                <?php

                endwhile;
                wp_reset_query();
                ?>
            </ul>
        </aside>

	</div><!-- .post-sidebar -->

	<div class="large-9 col medium-col-first">
	<?php if(!is_single() && get_theme_mod('blog_featured', '') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>
	<?php
		if(is_single()){
			get_template_part( 'template-parts/posts/single');
			comments_template();
		} elseif(get_theme_mod('blog_style_archive', '') && (is_archive() || is_search())){
			get_template_part( 'template-parts/posts/archive', get_theme_mod('blog_style_archive', '') );
		} else{
			get_template_part( 'template-parts/posts/archive', get_theme_mod('blog_style', 'normal') );
		}	?>
	</div> <!-- .large-9 -->

</div><!-- .row -->

<?php
	do_action('flatsome_after_blog');
?>
