<?php /* Template Name: Maintenance */ ?>
<!doctype html>
<html <?php language_attributes() ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head() ?>
  </head>
  <body <?php body_class() ?>>
    <nav class="headerNav navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand text-center d-block w-100" href="<?php echo home_url() ?>"><img src="//bocarestaurantlounge.com/wp-content/uploads/2018/10/logo-1.png" alt="<?php bloginfo('name') ?>" height="50" /></a>
      </div>
    </nav>
    <section class="homeSlider">
      <?php echo do_shortcode('[rev_slider alias="home-slider"]') ?>
    </section>

    <section class="my-5 text-center">
      <div class="page-header pt-5 mb-5">
        <h1>Upcoming <span>Events</span></h1>
      </div>
      <div class="container-fluid">
        <div class="boca-events owl-carousel owl-theme">
  				<?php
  				$query = new WP_Query( array(
  					'post_type' => 'tribe_events',
  					'showposts' => 6,
  					// 'meta_query' => array(
  					//   array(
  					//     'key' => 'event_end_date_time',
  					//     'value' => date( 'Y-m-d H:i', strtotime( "- 6 hours" ) ),
  					//     'compare' => '>=',
  					//     'type'  => 'DATETIME'
  					//   )
  					// ),
  					// 'meta_key'  => 'event_date_time',
  					// 'orderby' => 'meta_value',
  					'order' => 'ASC'
  				) );
  				while ( $query->have_posts() ) : $query->the_post();

  				?>
  				<div class="item">
  					<div class="boca-event wow zoomIn" data-wow-delay="0ms" data-wow-duration="1000ms">
  					<?php
  					$img_src = wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'full' );
  					$img_srcset = wp_get_attachment_image_srcset( get_post_thumbnail_id($post->ID), 'fullss' );
  					?>
  					<a data-fancybox="flyer" href="<?php echo esc_url( $img_src ); ?>">
  						<img data-date="<?php echo date( 'Y-m-d H:i', strtotime( "- 6 hours" ) ) ?>" src="<?php echo esc_url( $img_src ); ?>"
  						 srcset="<?php echo esc_attr( $img_srcset ); ?>"
  						 sizes="(max-width: 50em) 87vw, 680px" class="img-fluid" alt="<?php the_title() ?>" <?php if ($query->post_count == 1) : echo 'style="width: 100%; height: auto;"'; endif; ?>>
  					 </a>
  				 </div>
  				</div>
  				<?php endwhile; ?>
  			</div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <?php wp_footer() ?>

  </body>
</html>
