<!doctype html>
<html <?php language_attributes() ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head() ?>
  </head>
  <body <?php body_class() ?>>
    <nav class="headerNav navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand d-block d-lg-none" href="https://bocarestaurantlounge.com"><img src="//bocarestaurantlounge.com/wp-content/uploads/2018/10/logo-1.png" alt="Boca Restaurant &amp; Lounge" height="30" /></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="mainNav">
        <ul class="navbar-nav d-flex align-items-center">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">Menus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gallery</a>
          </li>
          <li class="nav-logo mx-5 d-none d-md-inline-block">
            <a href="<?php echo home_url() ?>"><img src="//bocarestaurantlounge.com/wp-content/uploads/2018/10/logo-1.png" alt=""> </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reservations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
