<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

/**
* hook_form_FORM_ID_alter
*/
function disability_form_views_exposed_form_alter(&$form, &$form_state, $form_id) {
 if (isset($form['search_api_multi_fulltext'])) {
 	// Add ARIA role 'search' to the form
	$form['search_api_multi_fulltext']['#attributes']['role'] = 'search';
	// Alternative (HTML5) placeholder attribute instead of using the javascript
    $form['search_api_multi_fulltext']['#attributes']['placeholder'] = t('search');

  }
}