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
   
} 

// remove placeholder text from search form because we have Google search text
function disability_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    // HTML5 placeholder attribute
    $form['search_block_form']['#attributes']['placeholder'] = t('');
  }
}