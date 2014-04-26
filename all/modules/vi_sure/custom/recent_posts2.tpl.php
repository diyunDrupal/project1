            <div class="sidebar_title">
                <h3><?php print $title; ?></h3>
            </div>
            <div class="portfolio_sidebar_widget">

                <ul id="mycarouseltwo" class="jcarousel-skin-tango2">
                    <?php foreach ($nodes as $node): ?>
                    <li>

                    <a href="<?php print url('node/' . $node->nid); ?>">
                      <?php $field_image = field_get_items('node', $node, 'field_image'); ?>
                        <?php 
                          print theme('image_style', array(
                            'style_name' => 'slide_image', 
                            'path' => $field_image[0]['uri'])); 

                        ?>
                                        
                            
                            
                    </a>  

                    <a href="<?php print url('node/' . $node->nid); ?>">
                        <h1><?php print $node->title; ?></h1>
                    </a>  
                    <a href="<?php print url('node/' . $node->nid); ?>"  >
                      
                        <?php
                          $body = field_get_items('node', $node, 'body');
                          /*
                           * Example 3)
                           * more control over the output, include
                           * 1. display 'text summary or trimmed' of the body
                           * 2. hide the label 'Body' from output
                           * 3. if there is no summary, trim the text to 150 characters
                           *     (instead of 600 by default)
                           */
                          if (!empty($body)) {
                            $output = field_view_field('node', $node, 'body', array(
                              'label'=>'hidden', 
                              'type' => 'text_summary_or_trimmed', 
                              'settings'=>array('trim_length' => 250),
                            ));
                            print render($output); 
                          }
                        ?>
                      
                    </a>        
                    <a href="<?php print url('node/' . $node->nid); ?>" class="but2"> 查看详情</a>

                    
                    </li>
                    <?php endforeach; ?> 


                </ul>
            </div>

        




