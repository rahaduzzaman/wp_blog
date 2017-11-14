<!DOCTYPE HTML>
<html>

<head>
  <title><?php bloginfo('name')?> | <?php bloginfo('description')?></title>
  <meta name="description" content="<?php bloginfo('description')?>" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head() ?>
</head>

<body>
  <div id="main">
    <div id="header" style="background-image: url('<?php header_image() ?>')">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><?php bloginfo('name')?><span class="logo_colour">style_banner</span></a></h1>
          <h2><?php bloginfo('description')?></h2>
        </div>
      </div>
      <div id="menubar">
        <?php wp_nav_menu( array(
          'theme_location' => 'mainmenu'
        ) ) ?>
      </div>
    </div>