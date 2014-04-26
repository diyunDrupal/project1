        
            <h2><?php print $title; ?></h2>

        <div class="accrodation">
        <?php foreach ($nodes as $node): ?>

          <span class="acc-trigger"><a href="<?php print url('node/' . $node->nid); ?>" ><?php print $node->title; ?></a></span>
                <div class="acc-container">
                <div class="content">
                  <a href="<?php print url('node/' . $node->nid); ?>" style="color: #727272;" >
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
                      'settings'=>array('trim_length' => 50),
                    ))); 
                  }
                ?></a>
                </div>
                </div>
        <?php endforeach; ?> 
        </div> 