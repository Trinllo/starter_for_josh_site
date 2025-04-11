<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>
  <?php
    if (function_exists('is_tag') && is_tag()) {
      single_tag_title("Tag Archive for &quot;"); echo '&quot; - ';
    } elseif (is_archive()) {
      wp_title(''); echo ' Archive - ';
    } elseif (is_search()) {
      echo 'Search for &quot;' . wp_specialchars($s) . '&quot; - ';
    } elseif (!(is_404()) && (is_single() || is_page())) {
      wp_title(''); echo ' - ';
    } elseif (is_404()) {
      echo 'Not Found - ';
    }

    if (is_home()) {
      bloginfo('name'); echo ' - '; bloginfo('description');
    } else {
      bloginfo('name');
    }

    global $paged;
    if ($paged > 1) {
      echo ' - page ' . $paged;
    }
  ?>
  </title>

  <meta name="description" content="<?php
    if (is_single() || is_page()) {
        $excerpt = get_the_excerpt();
        if (empty($excerpt)) {
            $excerpt = wp_trim_words(get_the_content(), 25);
        }
        if (empty($excerpt)) {
            $excerpt = get_bloginfo('description');
        }
        $meta_description = mb_substr(wp_strip_all_tags($excerpt), 0, 160);
        echo esc_attr($meta_description);
    } else {
        echo esc_attr(get_bloginfo('description'));
    }
  ?>">

  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/responsive.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100..900&family=Roboto:wght@100..900&family=Yeseva+One&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body>

<header class="container-fluid smallpage-bg">
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark">
      <a class="navbar-brand" href="#"><span class="josh">JOSH</span> <span class="orange">WITKIN</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
          <li class="nav-item"><a class="nav-link" href="#">PROJECTS</a></li>
          <li class="nav-item"><a class="nav-link" href="#">CV</a></li>
          <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
        </ul>
      </div>
    </nav>
    <div class="smallpage-tag">
      <h1 class="smallpage-title">Projects</h1>
    </div>
  </div>
</header>