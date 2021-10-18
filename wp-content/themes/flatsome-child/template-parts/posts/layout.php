<?php
get_header();
$taxonomy = get_queried_object();
?>

<?php if(!is_single() && get_theme_mod('blog_featured', '') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>

<?php if(!is_single() && get_theme_mod('blog_featured', '') == 'content'){
	get_template_part('template-parts/posts/featured-posts');
} ?>

<?php


if(is_single()){
	get_template_part( 'template-parts/posts/single');
}


?>


