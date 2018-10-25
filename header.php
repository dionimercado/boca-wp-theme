<!doctype html>
<html <?php language_attributes() ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php wp_head() ?>
  </head>
  <body <?php body_class() ?>>
    <nav class="headerNav navbar navbar-expand-lg navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
        <ul class="navbar-nav">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="#">Centered nav only <span class="sr-only">(current)</span></a>
          </li> -->
          <li class="nav-logo">
            <a href="<?php echo home_url() ?>"><img src="//bocarestaurantlounge.com/wp-content/uploads/2018/10/logo-1.png" alt=""> </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li> -->
        </ul>
      </div>
    </nav>
