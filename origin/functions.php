<?php
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function wpbeg_title($title)
{
  if (is_front_page() && is_home()) { //トップページなら
    $title = get_bloginfo('name', 'display');
  } elseif (is_singular()) { //シングルページなら
    $title = single_post_title('', false);
  }
  return $title;
}
add_filter('pre_get_document_title', 'wpbeg_title');

function wpbeg_script()
{
  wp_enqueue_style('wpbeg', get_template_directory_uri() . '/css/wpbeg.css', array(), '1.0.0');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'wpbeg_script');

function wpbeg_widgets_init()
{
  register_sidebar(
    array(
      'name'          => 'カテゴリーウィジェット',
      'id'            => 'category_widget',
      'description'   => 'カテゴリー用ウィジェットです',
      'before_widget' => '<div class="widget widget__categories">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget__title"><a href="/category">',
      'after_title'   => "</a></h2>\n",
    )
  );
  register_sidebar(
    array(
      'name'          => 'タグウィジェット',
      'id'            => 'tag_widget',
      'description'   => 'タグ用ウィジェットです',
      'before_widget' => '<div class="widget widget__tags">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget__title"><a href="/tag">',
      'after_title'   => "</a></h2>\n",
    )
  );
  register_sidebar(
    array(
      'name'          => 'アーカイブウィジェット',
      'id'            => 'archive_widget',
      'description'   => 'アーカイブ用ウィジェットです',
      'before_widget' => '<div class="widget widget__archive">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget__title"><a href="/archive">',
      'after_title'   => "</a></h2>\n",
    )
  );
}
add_action('widgets_init', 'wpbeg_widgets_init');

//タグクラウドの出力変更
function wp_tag_cloud_custom_ex($output)
{
  //style属性を取り除く
  $output = preg_replace('/\s*?style="[^"]+?"/i', '',  $output);
  //カッコを取り除く
  // $output = str_replace(' (', '',  $output);
  // $output = str_replace(')', '',  $output);
  return $output;
}
add_filter('wp_tag_cloud', 'wp_tag_cloud_custom_ex');

function wpbeg_theme_add_editor_styles()
{
  add_editor_style(get_template_directory_uri() . "/css/editor.css");
}
add_action('admin_init', 'wpbeg_theme_add_editor_styles');
