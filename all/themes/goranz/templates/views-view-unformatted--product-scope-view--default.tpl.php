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
  <div class="one_half <?php global $node_count; print ($node_count++ % 2) ? 'last' : ''; ?>">

					<div class="fresh_projects_list">
                        <section class="cheapest">
                            <div class="display">                  
                                <div class="small-group">        
                                    <div class="small money">
                                            <?php print $row; ?>
                                            <div class="hover"></div> 
                                    </div>        
                                </div>     
                            </div>
                        </section>
                    </div>
  	
    
  </div>
<?php endforeach; ?>




