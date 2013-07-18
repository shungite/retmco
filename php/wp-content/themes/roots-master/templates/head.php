<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <!-- Following line originally: <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title> -->

  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="616Yt9o3ZBd2QoqnxJCAhwwru60mMyBrLPFW9LrsefU" />
  <meta name="google-site-verification" content="2Q1bfvvvNyvfgFoFaNdYPSZ_ApWLBIuUV9LuaKS_idg" />
  <meta name="google-site-verification" content="iJa18mLj8o_E6yssqJvuul3fxlTYffSHFkQO6LFEgbM" />

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-1.8.2.min.js"><\/script>')</script>

  <?php wp_head(); ?>

  <div class="container">
    <div class="row-fluid">
      <div class="span12">
        <a href="http://www.themco.ca"><img class="alignnone size-full wp-image-9" title="logosm" src="http://www.themco.ca/wp-content/uploads/2013/01/logosm.png" alt="" width="150" height="78" /></a>
        <!-- <p class="muted">CELEBRATING FORTY YEARS</p> -->
      </div>
    </div><!-- /row -->
  </div>

  <?php if (wp_count_posts()->publish > 0) : ?>
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  <?php endif; ?>
</head>
