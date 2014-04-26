    <div id="testimonials">

      <?php foreach ($nodes as $node): ?>
        <?php $field_image = field_get_items('node', $node, 'field_image'); ?>
        <div class="testimonial-item ">
          
            <a href="<?php print url('node/' . $node->nid); ?>" title="<?php print $node->title; ?>">
              <span class="pic">
                <?php 
                  print theme('image_style', array(
                    'style_name' => 'portfolio_item', 
                    'path' => $field_image[0]['uri'])); 

                ?>
                <div class="item-on-hover"></div></span>
              <h5><?php print $node->title; ?></h5>
            </a>
          
        </div>
      <?php endforeach; ?>

    </div>
