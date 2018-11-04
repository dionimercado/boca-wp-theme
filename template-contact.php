<?php
/* Template Name: Contact */
get_header()
?>
  <iframe class="mb-5" style="border: 0; margin-top: 86px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1921.0972599132542!2d-149.899895!3d61.216589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x56c8bd81211e14b9%3A0x79ddea9c4d5efc1f!2s901+W+6th+Ave%2C+Anchorage%2C+AK+99501%2C+EE.+UU.!5e0!3m2!1ses!2sdo!4v1422583210298" width="100%" height="400" frameborder="0"></iframe>
  <div class="container mb-5">
    <div class="row">
      <div class="col-md-4">
        <div class="contact-info">
          <h1>Contact Info</h1>
          <ul class="mb-4">
            <li>
              <p>
                <strong>Address: </strong>
                2458 Webster Ave<br>
                Bronx, NY 10458
              </p>
              <p><strong>Phone: </strong>+1(917) 688-1031</p>
              <p><strong>Office: </strong>+1(917) 688-1032</p>
              <p><strong>Email: </strong>bocasteakhouse@gmail.com</p>
            </li>
          </ul>
          <h1>Follow us</h1>
          <div class="social-icons">
            <a href="https://www.facebook.com/ledultraloungeak" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/ledultraloungeak/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="mailto:+19076778797" target="_blank"><i class="fa fa-envelope"></i></a>
            <a href="tel:bocasteakhouse@gmail.com" target="_blank"><i class="fa fa-phone"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="p-4" style="background-color: #f6f6f6; box-shadow: 4px 4px 0 rgba(0,0,0,0)">
          <?php while( have_posts() ) : the_post(); the_content(); endwhile; ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer() ?>
