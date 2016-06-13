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
function <strong>disability</strong>_preprocess_page(&$variables) {
  if (isset($variables['node']->type)) {
    // If the content type's machine name is "my_machine_name" the file
    // name will be "page--my-machine-name.tpl.php".
    $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->documents;
  }
}