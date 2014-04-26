<?php

/**
 * @file
 * template.php
 */

function my_theme_title($title) {
  return theme('html_tag', array(
    'element' => array(
      '#tag' => 'h3',
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

function goranz_menu_tree__menu_block__3(array $variables) {
  return '<ul class="list">' . $variables['tree'] . '</ul>';
}

function goranz_menu_link__menu_block__3(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li><i class="fa fa-angle-right"></i>' . $output . $sub_menu . "</li>\n";
}



function goranz_breadcrumb($variables) {
	 $breadcrumb = $variables['breadcrumb'];
  $breadcrumb = array_unique($breadcrumb);
    
  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $crumbs = '<div class="breadcrumb">';
    

$array_size = count($breadcrumb);
    $i = 0;
    while ( $i < $array_size) {
    
      $pos = strpos($breadcrumb[$i], drupal_get_title());
      //we stop duplicates entering where there is a sub nav based on page jumps
      if ($pos === false){
        $crumbs .= '<span class="breadcrumb-' . $i;
        $crumbs .=  '">' . $breadcrumb[$i] . '</span> &gt; ';
      }
      $i++;
    }
    $crumbs .= '<span class="active">'. drupal_get_title() .'</span></div>';
    return $crumbs;
  }
}



/*function goranz_menu_tree__menu_block__2($variables) {
  return '<span class="acc-trigger>' . $variables['tree'] . '</span>';
}

function goranz_menu_link__menu_block__2(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<a' . drupal_attributes($element['#attributes']) . '><i class="fa fa-angle-right"></i>' . $output . $sub_menu . "</a>\n";
}*/


