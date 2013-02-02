<!doctype html PUBLIC>  
 <!--you enjoying does not mean you are not productive. It means you found the right thing to do-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	
<head> 

<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name');?></title> <!--Live Social Enterprise!-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/master.css" type="text/css" media="screen" />	
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/nivo-slider.css" type="text/css" media="screen" />	
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/font-awesome.min.css"/>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/nivo-slider/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/animate.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>

<?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>

<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/saanmaysale.ico">

<!--WP generated header-->
<?php wp_head(); ?>
<!--End WP generated header-->

</head>
	
<body class="body-style">

<div id="header">
  <div id="logo">Welcome!</div>
	<div id="search"><input class="text_chat" type="text" name="search" value="SEARCH"/></div>
  <div id="social-icons">
    <a href="http://twitter.com/BCYfoundation"><i class="icon-twitter-sign icon-2x icon-green"></i></a>
    <a href="http://facebook.com/bcyfoundation"><i class="icon-facebook-sign icon-2x icon-green"></i></a>
    <a href="#"><i class="icon-google-plus-sign icon-2x icon-green"></i></a>
    <a href="#"><i class="icon-pinterest-sign icon-2x icon-green"></i></a>
  </div>
</div>

<?php if ($_SERVER['PHP_SELF'] != $_SERVER['REQUEST_URI']."index.php") : ?>
  <?php include('navigation.php'); ?>
<?php endif; ?>
