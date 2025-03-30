<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="Responsive.css">
<title><?php
    if (function_exists('is_tag') && is_tag()) {
       single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
    elseif (is_archive()) {
       wp_title(''); echo ' Archive - '; }
    elseif (is_search()) {
       echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
    elseif (!(is_404()) && (is_single()) || (is_page())) {
       wp_title(''); echo ' - '; }
    elseif (is_404()) {
       echo 'Not Found - '; }
    if (is_home()) {
       bloginfo('name'); echo ' - '; bloginfo('description'); }
    else {
        bloginfo('name'); }
    if ($paged>1) {
       echo ' - page '. $paged; }
 ?>
</title>

<meta name="description" content="<?php
    if (is_single() || is_page()) {
        $excerpt = get_the_excerpt();
        
        // Fallback to content if excerpt is empty
        if (empty($excerpt)) {
            $excerpt = wp_trim_words(get_the_content(), 25);
        }
        
        // Final fallback to site description if both excerpt and content are empty
        if (empty($excerpt)) {
            $excerpt = get_bloginfo('description');
        }
        
        // Limit the description to 160 characters
        $meta_description = mb_substr(wp_strip_all_tags($excerpt), 0, 160);
        
        echo esc_attr($meta_description);
    } else {
        echo esc_attr(get_bloginfo('description'));
    }
?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Yeseva+One&display=swap" rel="stylesheet">
</head>
<body>

<header class="container-fluid bg1">
    <div class="container">

    <nav class="navbar navbar-expand-md navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#"> <span class="josh">JOSH</span> <span class="orange">WITKIN</span> </a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PROJECTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="tag">
        <h1>Games Design For The Future</h1>
    </div>
    </div> <!-- container -->
    <?php wp_head(); ?> 
</header>

<section class="container-fluid aboutbg text-center">
    <div class="container">
        <h2>GAMES &amp; LEVEL DESIGNER</h2>
        <p class="particle">... and particle wizard</p>
        <p class="about-text">My  name is josh Whitkin. I’m a professional with more than 7 years of industry experience in Games Design, Level design, Scripting and Visual Effects.  What makes me passionate about games is the combination of technology  and creativity, and how multiple disciplines come together to create an interactive experience. Whether I'm designing for puzzle games, 2D platformers or 3D environments.
            I always tell a story.</p>
        <div class="blocker"></div>

    </div> <!-- container -->

</section>

<section class="container-fluid articlesbg">
    <div class="container">
        <h3 class="text-center">LATEST ARTICLES</h3>
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="Images/Port1.jpg" alt="Woman Illustration">
                <h4 class="article-title">A PORTRAIT</h4>
                <p class="date">Friday Nov 4 2025</p>
                <p class="article-p">STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts.</p>
                <a class="readmore" href="#">CONTINUE READING</a>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="Images/Port2.jpg" alt="3D Model of man">
                <h4 class="article-title">A PORTRAIT</h4>
                <p class="date">Friday Nov 4 2025</p>
                <p class="article-p">STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts.</p>
                <a class="readmore" href="#">CONTINUE READING</a>
            </div>    
            <div class="col-md-4">
                <img class="img-fluid" src="Images/Port3.jpg" alt="Woman Illustration">
                <h4 class="article-title">A PORTRAIT</h4>
                <p class="date">Friday Nov 4 2025</p>
                <p class="article-p">STS has never been shy of seeking new terrains of  investigation. More and  more  STS s cholars are  starting to explore and intervene in the arts.  This object of study  brings  new challenges and  opportunities that we want  to explore in this session.   We would  like to gather first of all simply  new kinds of  knowledge arising from  STS study  of the arts.</p>
                <a class="readmore" href="#">CONTINUE READING</a>
            </div>
        </div> <!-- row -->
    </div> <!-- Container -->

</section>

<footer class="container-fluid text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a class="navbar-brand" href="#"> <span class="josh">JOSH</span> <span class="orange">WITKIN</span> </a>
            </div>
            <div class="col-md-6">
                <p>TERMS AND CONDITIONS</p>
            </div>

        </div> <!-- row -->
    </div> <!-- Container -->

</footer>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>