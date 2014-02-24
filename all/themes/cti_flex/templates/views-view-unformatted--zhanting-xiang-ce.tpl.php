<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>

<?php 
drupal_add_css(path_to_theme() . '/css/jquery.jcarousel.css', array('group' => CSS_THEME));
drupal_add_js(path_to_theme() . '/js/jquery.jcarousel.pack.js');
drupal_add_js('jQuery(document).ready(function () { jQuery(".view-zhanting-xiang-ce .item-list ul").jcarousel({scroll:5}); });',
    array('type' => 'inline', 'scope' => 'footer', 'weight' => 5));
?>
