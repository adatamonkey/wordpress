<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="WordPress theme ">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/common/ico/favicon.ico">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <h1>
      <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    </h1>
    <form class="p-search-form" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
      <input class="keyword" placeholder="キーワード" name="s" id="s">
      <input class="submit" id="searchsubmit" type="submit" value="検索">
    </form>
    <?php wp_nav_menu(); ?>
  </header>
