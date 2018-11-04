<?php get_header() ?>
<section class="homeSlider">
  <?php echo do_shortcode('[rev_slider alias="home-slider"]') ?>
</section>

<section class="upcoming-events text-center">
  <div class="page-header pt-5 mb-5">
    <h1>Upcoming <span>Events</span></h1>
  </div>
  <div class="container">
    <div class="boca-events owl-carousel owl-theme">
      <?php
      $query = new WP_Query( array(
        'post_type' => 'tribe_events',
        'showposts' => 9,
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

<section id="resevation" class="resevation py-5">
  <div class="container">
    <div class="row dart-no-gutter">
      <div class="col-md-4 col-sm-4 mr-md-0 pr-md-0">
        <div class="time-info time-info-outer">
          <div class="time-info-inner">
            <div class="heading">
              <span class="dart-fs-48">Time</span>
              <h1>OPEN</h1>
              <hr>
            </div>
            <div class="open-time dart-pt-20 text-center">
              <p>
                <span class="text-red text-uppercase">MONDAY - WEDNESDAY</span><br>
                4PM - 12AM<br><br>
                <span class="text-red text-uppercase">THURSDAY - SATURDAY</span><br>
                4PM - 4AM<br><br>
                <span class="text-red text-uppercase">SUNDAY</span><br>
                12PM - 4AM<br>
              </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8 ml-md-0 pl-md-0">
          <div class="resevation-block">
            <div class="heading">
              <span class="dart-fs-48">Reservation</span>
              <h1>online booking</h1>
              <hr>
            </div>
            <div class="reservation-form">
              <?php echo do_shortcode('[booking-form]') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="newsletter">
    <h3>Subscribe to our newsletter!</h3>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 ml-auto mr-auto">
          <!-- MailChimp Signup Form -->
          <div id="mc_embed_signup">
            <!-- Replace the form action in the line below with your MailChimp embed action! For more informatin on how to do this please visit the Docs! -->
            <form role="form" action="//dionimercado.us14.list-manage.com/subscribe/post?u=c84d33d7d0a554f6988195f5b&amp;id=1833d9d4d6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
              <div class="input-group input-group-lg">
                <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Email address...">
                <span class="input-group-btn">
                  <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary wow fadeInRight" data-wow-delay="0ms" data-wow-duration="800ms" style="visibility: visible; animation-duration: 800ms; animation-delay: 0ms; animation-name: fadeInRight;">Subscribe!</button>
                </span>
              </div>
              <div id="mce-responses">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>
            </form>
          </div>
          <!-- End MailChimp Signup Form -->
        </div>
      </div>
    </div>
  </section>

  <section class="ig-feed">
    <div class="page-header text-center pt-5 mb-5">
      <h1 class="text-white">Recent <span>Posts</span></h1>
    </div>
    <div class="container">
      <?php echo do_shortcode('[elfsight_instagram_feed id="1"]') ?>
    </div>
  </section>

  <?php get_footer() ?>
