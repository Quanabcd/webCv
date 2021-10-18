<?php

$taxonomy = get_queried_object();
?>
<?php global $product; ?>

<div id="content" class="blog-wrapper blog-archive page-wrapper">

<section id="blog">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="article">
                    <h1 class="hidden" style="display: none!important;">
                       	<?php the_title(); ?></h1>
                    <h2 itemprop="name" class="asset-name entry-title">
                      	  <?php the_title(); ?>
                    </h2>
                    <div class="news-details-ex">
                      	<?php echo $product->get_description(); ?>
                    </div>

                </div>
            </div>

        </div>
    </div>

</section>
	</div>
<?php echo do_shortcode('[block id="chan-trang"]'); ?>