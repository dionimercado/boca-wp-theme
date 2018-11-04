<?php
/* Template Name: Contact */
get_header()
?>
  <iframe class="mb-5" style="border: 0; margin-top: 86px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12070.176161973017!2d-73.8929148!3d40.8599335!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4fe1361fd9100833!2sBoca+Restaurant+and+Lounge!5e0!3m2!1sen!2sus!4v1541313109755" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
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
