




    

    



    <h2><?php print $title; ?></h2>
        
        <div id="tabs">
  
      <ul class="tabs">  
        <?php foreach ($nodes as $node): ?>
        <li><a href="#<?php print $node->title; ?>"><?php print $node->title; ?></a></li>

        <?php endforeach; ?> 
      </ul><!-- /# end tab links -->   
 
    <div class="tab-container">
      <?php foreach ($nodes as $node): ?>      
      <div id="<?php print $node->title; ?>" class="tab-content"> 
                <?php $field_image = field_get_items('node', $node, 'field_image'); ?>
                
                    <?php 
                      print theme('image_style', array(
                        'style_name' => 'views_style', 
                        'path' => $field_image[0]['uri'])); 

                    ?>
                    
                

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
                        print render(field_view_field('node', $node, 'body', array(
                          'label'=>'hidden', 
                          'type' => 'text_summary_or_trimmed', 
                          'settings'=>array('trim_length' => 250),
                        ))); 
                      }
                    ?></a>

                    <a href="<?php print url('node/' . $node->nid); ?>" class="slider_button2"><i class="fa fa-arrow-right fa-lg"></i> 查看详情&nbsp;&nbsp;&nbsp;&nbsp;</a>

        
        
      </div><!-- end tab single section --> 
      <?php endforeach; ?> 
      
    </div>
    
    </div><!-- end tab -->





 
         
        
    

    

        

        




