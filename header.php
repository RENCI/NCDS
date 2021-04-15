<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="<?php bloginfo('charset'); ?>"/>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <title>
    <?php if(is_front_page()): ?>
      <?php bloginfo('name'); ?>
    <?php else: ?>
      <?php echo wp_title(''); ?> 
    <?php endif; ?>   
  </title>

  <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" >
  <![endif]-->

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <?php wp_head(); ?>

  <?php // Google Analytics ?>
  
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122839224-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-122839224-1');
  </script>

</head>

<body <?php body_class(); ?>>

  <?php 

    /*  All the header variables goes here */
  
    $home_id        = 'option';
    $home_url       = get_option('home');   
    $custom_logo_id = get_theme_mod( 'custom_logo' );

    if($custom_logo_id){
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      $logo = $logo[0];
    }else{
      $logo = get_template_directory_uri() . '/images/logo.svg';
    } 

    $headerMemberLabel = get_field('headerMemberLabel',$home_id);
    $headerMemberUrl   = get_field('headerMemberUrl',$home_id);
    $my_profile = get_field('my_profile',$home_id);
    $my_profile_url   = get_field('my_profile_url',$home_id);

  ?>

<header class="header"> 
<section class="search-section">
  <div class="container-fluid">
    <div class="search">
       <form method="get" id="searchform" class="searchform" action="\">
          <div>
           <label class="screen-reader-text" for="s">Search for:</label>
           <input type="text" value="" name="s" id="s" placeholder="Search here...">
           <input type="submit" id="searchsubmit" value="Search">
          </div>
       </form>    
    </div>
  </div>
</section>
<section class="content-header">
  <div class="container-fluid">
    <div class="header-content-wrap">
      <div class="logo content-side-left">
       <a href="<?php echo $home_url; ?>" style="background-image:url('<?php echo $logo; ?>');"></a>
      </div>
      <div class="content-side-right box-1">
        <div class="header-top">
          <div class="top-container">
            <div class="extra-link box">
              <?php if (is_user_logged_in()): ?>
                <?php if($my_profile): ?>
                  <a href="<?php echo $my_profile_url; ?>"><?php echo $my_profile; ?></a>
                  <a href="<?php echo site_url().'/logout'; ?>">Logout</a>
                <?php endif; ?>
              <?php else: ?>
                <?php if($headerMemberLabel): ?>
                  <a href="<?php echo $headerMemberUrl; ?>"><?php echo $headerMemberLabel; ?></a>
                <?php endif; ?>
              <?php endif ?>
            </div>
            <div class="search-wrap box">
              <button class="open-search"><i class="fa fa-search"></i></button>
            </div>
            <div class="button-menu">
              <button class="hamburger hamburger--emphatic" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="header-menu">            
      <!-- <input type="checkbox" id="btn-menu">  -->
    <nav>
      <div id="navigation">
              <?php
                wp_nav_menu( array(
                    'menu' => 'main-menu',
                    'depth' => 4,
                    'container' => false,
                    'menu_class' => 'nav navbar-nav',
                    //'walker' => new wp_bootstrap_navwalker()
                  )
                );
              ?>
      </div>
    </nav>
  </div>
</section>
 
</header>


  

