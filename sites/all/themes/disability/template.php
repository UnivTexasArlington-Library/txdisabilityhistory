<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

/**
* hook_form_FORM_ID_alter
*/
function disability_form_search_block_form_alter(&$form, &$form_state, $form_id) {
    // Add ARIA role 'search' to the form
	$form['search_block_form']['#attributes']['role'] = 'search';
	// Alternative (HTML5) placeholder attribute instead of using the javascript
    $form['edit_search_api_multi_fulltext']['#attributes']['placeholder'] = t('Search');   
} 