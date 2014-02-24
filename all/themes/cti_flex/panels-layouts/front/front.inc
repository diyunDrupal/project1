<?php

// Plugin definition
$plugin = array(
  'title' => t('Front'),
  'category' => t('Columns: 2'),
  'icon' => 'front.png',
  'theme' => 'panels_front',
  'css' => 'front.css',
  'regions' => array(
    'top_left' => t('Top left'),
    'top_right' => t('Top right'),
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);
