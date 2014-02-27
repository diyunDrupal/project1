<?php

/**
 * @file
 * template.php
 */

function my_theme_title($title) {
  return theme('html_tag', array(
    'element' => array(
      '#tag' => 'h2',
      '#attributes' => array(
        'class' => 'home-block-title',
      ),
      '#value' => $title,
    ),
  ));
}

function my_show_view($view_name, $display_id="default") {
          $view = views_get_view($view_name);
          $view->set_display($display_id);
          print my_theme_title($view->get_title());
          print $view->preview($display_id);
}

function my_show_full_block($module, $delta) {
  $block = block_load($module, $delta);
  $block_content = _block_render_blocks(array($block));
  $build = _block_get_renderable_array($block_content);
  $block_rendered = drupal_render($build);
  print $block_rendered;
}

function my_show_block($module, $delta, $title=NULL) {
  $block = module_invoke($module, 'block_view', $delta);

  if (empty($title)) {
    print my_theme_title(render($block['subject']));
  } else {
    print my_theme_title($title);
  }
  print render($block['content']);
}
