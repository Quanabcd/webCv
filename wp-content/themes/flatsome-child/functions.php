<?php
// Add custom Theme Functions here
//slidebar dich vu

//add css,js
function tn_css_js() {
    //add css
  wp_register_style( 'bootstrap-custom', get_stylesheet_directory_uri() . '/css/bootstrap-custom.css', 'all' );
  wp_enqueue_style( 'bootstrap-custom' );

    wp_register_style( 'custom', get_stylesheet_directory_uri() . '/css/custom.css', 'all' );
  wp_enqueue_style( 'custom' );

    wp_register_style( 'ionicons.min', get_stylesheet_directory_uri() . '/css/ionicons.min.css', 'all' );
  wp_enqueue_style( 'ionicons.min' );

    wp_register_style( 'jquery.mb.YTPlayer.min', get_stylesheet_directory_uri() . '/css/jquery.mb.YTPlayer.min.css', 'all' );
  wp_enqueue_style( 'jquery.mb.YTPlayer.min' );

    wp_register_style( 'lity.min', get_stylesheet_directory_uri() . '/css/lity.min.css', 'all' );
  wp_enqueue_style( 'lity.min' );

   

      wp_register_style( 'main', get_stylesheet_directory_uri() . '/css/main.css', 'all' );
  wp_enqueue_style( 'main' );


    wp_register_style( 'simplebar.min', get_stylesheet_directory_uri() . '/css/simplebar.min.css', 'all' );
  wp_enqueue_style( 'simplebar.min' );


    wp_register_style( 'tiny-slider', get_stylesheet_directory_uri() . '/css/tiny-slider.css', 'all' );
  wp_enqueue_style( 'tiny-slider' );

   wp_register_style( 'main', get_stylesheet_directory_uri() . '/css/customizer/tiny-slider.css', 'all' );
  wp_enqueue_style( 'main' );

   wp_register_style( 'main-darkgreen', get_stylesheet_directory_uri() . '/css/main-darkgreen.css', 'all' );
  wp_enqueue_style( 'main-darkgreen' );

   //add js
    wp_register_script('bootstrap.bundle.min', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js','','1.1', true);
  wp_enqueue_script('bootstrap.bundle.min');

    wp_register_script('imagesloaded.pkgd.min', get_stylesheet_directory_uri() . '/js/imagesloaded.pkgd.min','','1.1', true);
  wp_enqueue_script('imagesloaded.pkgd.min');

    wp_register_script('animatedModal', get_stylesheet_directory_uri() . '/js/animatedModal.js','','1.1', true);
  wp_enqueue_script('animatedModal');


    wp_register_script('lity.min', get_stylesheet_directory_uri() . '/js/lity.min.js','','1.1', true);
  wp_enqueue_script('lity.min');

   wp_register_script('main', get_stylesheet_directory_uri() . '/js/main.js','','1.1', true);
  wp_enqueue_script('main');

   wp_register_script('simplebar.min', get_stylesheet_directory_uri() . '/js/simplebar.min.js','','1.1', true);
  wp_enqueue_script('simplebar.min');

   wp_register_script('tiny-slider', get_stylesheet_directory_uri() . '/js/tiny-slider.js','','1.1', true);
  wp_enqueue_script('tiny-slider');


wp_register_script('isotope.pkgd.min', get_stylesheet_directory_uri() . '/js/isotope.pkgd.min.js','','1.1', true);
  wp_enqueue_script('isotope.pkgd.min');

  wp_register_script('jquery.mb.YTPlayer.min', get_stylesheet_directory_uri() . '/js/jquery.mb.YTPlayer.min.js','','1.1', true);
  wp_enqueue_script('jquery.mb.YTPlayer.min');

}
add_action( 'wp_enqueue_scripts', 'tn_css_js' );
//Function Module

if ( ! function_exists('services') ) {

  function services() {

    $labels = array(
      'name'                  => __('Trang ảnh', 'Post Type General Name', 'tnthemes' ),
      'singular_name'         => __('Trang ảnh', 'Post Type Singular Name', 'tnthemes' ),
      'menu_name'             => __( 'Trang ảnh', 'tnthemes' ),
      'name_admin_bar'        => __( 'Trang ảnh', 'tnthemes' ),
      'archives'              => __( 'Danh mục', 'tnthemes' ),
      'attributes'            => __( 'Danh mục', 'tnthemes' ),
      'parent_item_colon'     => __( 'Bài viết cha', 'tnthemes' ),
      'all_items'             => __( 'Tất cả bài viết', 'tnthemes' ),
      'add_new_item'          => __( 'Thêm bài viết mới', 'tnthemes' ),
      'add_new'               => __( 'Thêm mới', 'tnthemes' ),
      'new_item'              => __( 'Bài mới', 'tnthemes' ),
      'edit_item'             => __( 'Chỉnh sửa bài viết', 'tnthemes' ),
      'update_item'           => __( 'Cập nhật bài viết', 'tnthemes' ),
      'view_item'             => __( 'Xem bài viết', 'tnthemes' ),
      'view_items'            => __( 'Xem bài viết', 'tnthemes' ),
      'search_items'          => __( 'Tìm kiếm bài viết', 'tnthemes' ),
      'not_found'             => __( 'Not found', 'tnthemes' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'tnthemes' ),
      'featured_image'        => __( 'Ảnh đại diện', 'tnthemes' ),
      'set_featured_image'    => __( 'Chọn ảnh đại diện', 'tnthemes' ),
      'remove_featured_image' => __( 'Xóa ảnh đại diện', 'tnthemes' ),
      'use_featured_image'    => __( 'Sử dụng ảnh đại diện', 'tnthemes' ),
      'insert_into_item'      => __( 'Insert into item', 'tnthemes' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'tnthemes' ),
      'items_list'            => __( 'Danh sách', 'tnthemes' ),
      'items_list_navigation' => __( 'Danh sách', 'tnthemes' ),
      'filter_items_list'     => __( 'Lọc', 'tnthemes' ),
    );
    $rewrite = array(
      'slug'                  => 'muc-dich-vu',
      'with_front'            => true,
      'pages'                 => true,
      'feeds'                 => true,
    );
    $args = array(
      'label'                 => __( 'Trang ảnh', 'tnthemes' ),
      'description'           => __( 'Bài viết trong trang về trang ảnh', 'tnthemes' ),
      'labels'                => $labels,
      'supports'              => array( 'title','archives', 'thumbnail', 'custom-fields'),
      'taxonomies'            => array( ''),
      'hierarchical'          => true,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 10,
      'menu_icon'             => 'dashicons-admin-tools',
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => 'services-cate',
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'rewrite'               => $rewrite,
      'capability_type'       => 'page'

    );
    register_post_type( 'services', $args );

  }
  add_action( 'init', 'services', 0 );
  add_action( 'init', function () {
    add_ux_builder_post_type( 'services' );
  } );
}

if ( ! function_exists( 'services_taxonomy' ) ) {
  function services_taxonomy() {
    $labels = array(
      'name'                       => __('Danh mục', 'Taxonomy General Name', 'tnthemes' ),
      'singular_name'              => __('Danh mục', 'Taxonomy Singular Name', 'tnthemes' ),
      'menu_name'                  => __( 'Danh mục', 'tnthemes' ),
      'all_items'                  => __( 'Tất cả', 'tnthemes' ),
      'parent_item'                => __( 'Mục cha', 'tnthemes' ),
      'parent_item_colon'          => __( 'Danh mục:', 'tnthemes' ),
      'new_item_name'              => __( 'Tên danh mục mới', 'tnthemes' ),
      'add_new_item'               => __( 'Thêm danh mục mới', 'tnthemes' ),
      'edit_item'                  => __( 'Sửa danh mục', 'tnthemes' ),
      'update_item'                => __( 'Cập nhật danh mục', 'tnthemes' ),
      'view_item'                  => __( 'Xem', 'tnthemes' ),
      'separate_items_with_commas' => __( 'Separate items with commas', 'tnthemes' ),
      'add_or_remove_items'        => __( 'Thêm hoặc xóa danh mục', 'tnthemes' ),
      'choose_from_most_used'      => __( 'Chọn danh mục hay sử dụng', 'tnthemes' ),
      'popular_items'              => __( 'Danh mục phổ biến', 'tnthemes' ),
      'search_items'               => __( 'Tìm danh mục', 'tnthemes' ),
      'not_found'                  => __( 'Không tìm thấy', 'tnthemes' ),
      'no_terms'                   => __( 'Không có danh mục', 'tnthemes' ),
      'items_list'                 => __( 'Danh sách danh mục', 'tnthemes' ),
      'items_list_navigation'      => __( 'Items list navigation', 'tnthemes' ),
    );
    $rewrite = array(
      'slug'                       => 'danh-sach-dich-vu',
      'with_front'                 => true,
      'hierarchical'               => true,
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      'rewrite'                    => $rewrite,
    );
    register_taxonomy( 'services-cate', array( 'services' ), $args );
  }
  add_action( 'init', 'services_taxonomy', 0 );
}

//Function Get Item

function GetNewsHot($code,$arg)
{

  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'cat'=>'',
    'posts_per_page' => 8,
    'orderby' => 'post_date',
    'order' => 'desc',
    'meta_query' => array(

      array(
                'key' => 'newshot', //newshot là mã custom field tin tức
                'value' => '1'
              )
    )
  );
  $loop = new WP_Query($args);
  $total = $loop->found_posts;
  $iteration = 0;
  $i=0;

  $str .="<div class='custom-users'>";
  while ($loop->have_posts()) : $loop->the_post();$iteration++;
    {

      
   }
 endwhile;
 $str .= "</div>";


 wp_reset_query();
 return $str;

}
add_shortcode('GetHotNews_Fn', 'GetNewsHot');

function GetHotPrd()
{

  $args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 6,
    'orderby' => 'post_date',
    'order' => 'desc',
  );
  $loop = new WP_Query($args);
  $total = $loop->found_posts;
  $i=0;
  $str .="<div class='custom-users'>";

  while ($loop->have_posts()) : $loop->the_post();
    {

      ?>

        <div class="col-12 col-sm-8 col-lg-4">
          <div class="card single-post">
              <a class="post-img" href="#0">
                <?php the_post_thumbnail('large'); ?>
                <span class="content-date"><?php echo get_the_date();?></span>
              </a>
              <div class="card-body post-content">
                  <a href="#0">
                      <h5 class="card-title content-title"><?php echo get_the_title();?></h5>
                  </a>
                  <p class="card-text content-description"><?php echo get_the_excerpt();?></p>
              </div>
          </div>
      </div>

      <?php
     
   }
 endwhile;

 $str .= "</div>";
 wp_reset_query();
 return $str;

}
add_shortcode('GetHotPrd_Fn', 'GetHotPrd');





function CounterItems($id){
	$category = get_category($id);
	$count = $category->category_count;
	return  $count;
}

function GetColor($id){
  $design = get_term_meta($id,'colors_blog',true);
  if (strlen($design)>1) {
   $str ="style='background:".$design."'";
 }
 else {
   $str ="";
 }
 return $str;
}




function excerpt($limit,$s) {
  $excerpt = explode(' ', $s, $limit);

  if (count($excerpt) >= $limit) {
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt) . '...';
  } else {
    $excerpt = implode(" ", $excerpt);
  }

  $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

  return $excerpt;
}

function GetPartner($att,$arg)
 {
  ob_start();
  ?>
  <?php
  $datas = getlistdata_adv_bycode($att["code"], ' iorder desc ');
  $have = false;
  ?>
       <?php
      foreach ($datas as $data) {
        $data = (array)$data; 
      
        ?>
        <div class="slider-item">
          <!-- Single review-->
          <div class="single-review swiper-slide">
              <div class="review-header d-flex justify-content-between">
                  <div class="review-client">
                      <div class="media"><img class="img-fluid rounded-circle client-avatar" src="<?php echo get_site_url().$data["vimg"] ?>" alt="<?php echo $data["vname"] ?>">
                          <div class="client-details">
                              <h6 class="client-name"><?php echo $data["vname"] ?></h6><span class="client-role"><?php echo $data["vdescription"] ?></span>
                          </div>
                      </div>
                  </div><i class="icon ion-md-quote review-icon"></i>
              </div>
              <p class="review-content"><?php echo $data["vcontent"] ?></p>
          </div>
      </div>
          <?php
        }

  return ob_get_clean();
}
add_shortcode('GetPartner_Fn', 'GetPartner');



function get_product_by_cate1()
{
    ob_start();
    ?>
      <div class="row">
          <!-- Filter nav-->
          <div class="col-12">
              <ul class="list-inline filter-control" role="group" aria-label="Filter Control">
                  <li class="list-inline-item tab-active" data-filter="*">All</li>

                  <?php

                      $args = array(
                          'taxonomy'   => "services-cate",
                          'number'     => 10,
                          'orderby'    => 'name',
                          'order'      => 'asc',
                          'hide_empty'   => false
                      );
                      $product_categories = get_terms($args);
                      foreach ($product_categories as $category) {
                      ?>

                        <li class="list-inline-item" data-filter=".<?php echo $category->slug ?>"><?php echo $category->name ?></li>

                      <?php
                      }

                  ?>


              </ul>
          </div>
      </div>
      <div class="portfolio-grid row">
          <?php
            $args = array(
                'taxonomy'   => "services-cate",
                'number'     => 10,
                'orderby'    => 'name',
                'order'      => 'asc',
                'hide_empty'   => false
            );
            $newterms = array();
            $product_categories = get_terms($args);
            foreach ($product_categories as $category) {
              $args = array('post_type' => 'services', 'stock' => 1, 'posts_per_page' => 8, 'services-cate' => $category->slug, 'orderby' => 'date', 'order' => 'ASC');
              $loop = new WP_Query($args);
              while ($loop->have_posts()) : $loop->the_post();
              ?>

                  <div class="single-item col-6 col-lg-4 <?php echo $category->slug ?>">
                      <a class="portfolio-item" href="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>" data-lightbox>
                          <div class="portfolio-wrapper">
                              <?php the_post_thumbnail('large'); ?>
                              <div class="item-content">
                                  <h6 class="content-title"><?php echo get_the_title() ?></h6><span class="content-more">More Info</span>
                              </div>
                          </div>
                      </a>
                  </div>
              <?php
              endwhile;
              wp_reset_query();
            }
            ?>
      </div>
    <?php
    return ob_get_clean();

}
add_shortcode("productsbycate1",'get_product_by_cate1');