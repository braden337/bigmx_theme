<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php bloginfo( 'name' ); ?></title>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

  <link rel="stylesheet" href="style.css">
  <script src="//code.jquery.com/jquery.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <?php wp_head(); ?>

</head>
<body>
  <!--[if lt IE 7]>
  <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <div id="wrapper">

  <header>
    <div id="tagline">Stories that move you</div>
    <div id="topLogo">
      <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/smalllogo.png" alt="big mx logo"></a>
    </div>
    <?php wp_nav_menu( 'Header Menu' ); ?>
  </header>






























