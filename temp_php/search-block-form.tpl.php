<?php

/**
 * @file
 * Displays the search form block.
 *
 * Available variables:
 * - $search_form: The complete search form ready for print.
 * - $search: Associative array of search elements. Can be used to print each
 *   form element separately.
 *
 * Default elements within $search:
 * - $search['search_block_form']: Text input area wrapped in a div.
 * - $search['actions']: Rendered form buttons.
 * - $search['hidden']: Hidden form elements. Used to validate forms when
 *   submitted.
 *
 * Modules can add to the search form, so it is recommended to check for their
 * existence before printing. The default keys will always exist. To check for
 * a module-provided field, use code like this:
 * @code
 *   <?php if (isset($search['extra_field'])): ?>
 *     <div class="extra-field">
 *       <?php print $search['extra_field']; ?>
 *     </div>
 *   <?php endif; ?>
 * @endcode
 *
 * @see template_preprocess_search_block_form()
 */
?>
<div class="container-inline" id="muti_search">
	<div style="float:left;/*background:white;*/">
		<select id="sengines" style="height: 26px;border: 1px solid #ccc;">
		<option value="drupal">本站</option>
		<option value="http://app.lib.stu.edu.cn/qiaopi/search.aspx?q=">侨批</option>
		<option value="http://app.lib.stu.edu.cn/ljs/search.aspx?q=">老街市</option>
		</select>
	</div>

	<?php if (empty($variables['form']['#block']->subject)): ?>
	<h2 class="element-invisible"><?php print t('Search form'); ?></h2>
	<?php endif; ?>

	<?php print $search_form; ?>
	<?php 
	drupal_add_js('jQuery(document).ready(function () { jQuery("#muti_search").delegate("input:submit","click",function(){
	if(jQuery("#sengines").get(0).selectedIndex==0){return;}
	var submitto = jQuery("#sengines").val() + escape(jQuery("#muti_search input:text").val());
	window.open(submitto);
	return false;
	})})',
	array('type' => 'inline', 'scope' => 'footer', 'weight' => 5));
	?>
</div>

