<?php
get_header();
$taxonomy = get_queried_object();
$id = get_queried_object()->term_id;
?>

<div id="project" class="blog-wrapper blog-archive page-wrapper">


  <div class='row row-large'>

    <div class="large-9 col">

      <article  class="post type-post status-publish format-standard has-post-thumbnail hentry ">
        <div class="article-inner">
          <header class="entry-header">
            <div class="entry-header-text entry-header-text-top text-left">
             <h6 class="entry-category is-xsmall">
              <?php $term_list = get_the_terms($post->ID, 'serivies-cate');
              $types ='';
              foreach($term_list as $term_single) {
                $types .= ucfirst($term_single->name).', ';
              }
              $typesz = rtrim($types, ', ');
              echo $typesz; ?>
            </h6>


            <h1 class="entry-title"> <?php the_title(); ?></h1>
            <div class="entry-divider is-divider small"></div>

            <div class="entry-meta uppercase is-xsmall">
              <span class="posted-on">Đăng lên 
                <a href="<?php echo get_the_permalink() ?>" rel="bookmark">
                  <time class="entry-date published"><?php echo get_the_time('d/m/y', get_the_ID()); ?>

                </time>

              </a>
            </span>
            <span class="byline"> by <span class="meta-author vcard">
              <a class="url fn n" href="<?php echo get_site_url();?>"><?php echo get_author_name()?></a>
            </span>
          </span>   
        </div>
      </div>
    </header>
    <div class="entry-content single-page">
      <?php the_content(); ?>


      <?php echo do_shortcode( '[block id="thong-tin-dia-chi-chi-tiet-tin-tuc"]' ); ?>

      <div id="related_posts">
        <h3><span >Dịch vụ liên quan</span></h3>
        <ul class='row'> 

         <?php  Get_Relate_Pro(); ?>
       </ul>   



     </div>
     <div class="clearfix"></div>




     <?php if ( get_theme_mod( 'blog_share', 1 ) ) {
        // SHARE ICONS
      echo '<div class="blog-share text-center">';
      echo '<div class="is-divider medium"></div>';
      echo do_shortcode( '[share]' );
      echo '</div>';
    } ?>


  </div>



</div>
</article>





</div>



<div class="post-sidebar large-3 col">
  <div id="secondary" class="widget-area" role="complementary">
    <aside id="flatsome_recent_posts-2" class="widget flatsome_recent_posts">  
      <span class="widget-title"><span>Có thể bạn quan tâm</span></span><div class="is-divider small"></div>       <ul>        
        <?php echo do_shortcode('[GetServicesType3_Fn]'); ?>
      </ul>      
    </aside>
  </div>
</div>


</div>


</div>

  <?php

get_footer();

?>

