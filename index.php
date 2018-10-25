<?php get_header() ?>
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
              <p class="dart-fs-16"><span class="yellow text-uppercase">MONDAY - WEDNESDAY</span><br>
                4PM - 12AM<br>
                11AM - 10PM (Lunch/Dinner)<br><br>
                <span class="yellow text-uppercase">SATURDAY / SUNDAY</span><br>
                8AM - 1PM (Brunch) <br>
                1PM - 9PM (Lunch/Dinner)</p>
                <p><span class="yellow dart-fs-24">+1 (917) 688-1031</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8 ml-md-0 pl-md-0">
          <div class="resevation-block">
            <div class="heading">
              <span class="dart-fs-48">Resevation</span>
              <h1>online booking</h1>
              <hr>
            </div>
            <div class="reservation-form">
              <form class="form-inline" action="book-table.php" id="booktable" name="booktable" method="post">
                <div class="form-inline clearfix">
                  <div class="form-group col-sm-4">
                    <input type="text" class="form-control" name="userName" placeholder="Your Name *" required="">
                  </div>
                  <div class="form-group col-sm-4">
                    <input type="email" class="form-control" name="userEmail" placeholder="Your Email *" required="">
                  </div>
                  <div class="form-group col-sm-4">
                    <input type="tel" class="form-control" name="userMobileNumber" placeholder="Mobile Number *" required="">
                  </div>
                </div>
                <div class="form-inline clearfix">
                  <div class="form-group col-sm-4">
                    <div class="input-group date " id="start">
                      <input type="text" class="form-control" name="bookDate" placeholder="Date *" required="">
                      <span class="input-group-addon">
                        <i class="glyphicon glyphicon-calendar"></i>
                      </span>
                    </div>
                  </div>
                  <div class="form-group col-sm-4">
                    <div class="input-group">
                      <input id="timepicker1" type="text" class="form-control input-small" name="bookTime" placeholder="HH-MM (24hr formet) *" required="">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    </div>
                  </div>
                  <div class="form-group col-sm-4">
                    <div class="input-group">
                      <input type="number" class="form-control" name="NoofPersons" placeholder="No. of Persons *" required="">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-default">Book a Table</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer() ?>
