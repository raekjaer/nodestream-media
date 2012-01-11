<?php
/**
 * @file
 * Example profile file.
 */

// There is no way of having sub-profiles in Drupal currently,
// so if we want to use something from the NodeStream profile,
// we have to do so by including it. This is not at all required,
// and you can remove this if you don't want to use anything in the profile.
require_once(DRUPAL_ROOT . '/profiles/nodestream/nodestream.profile');

/**
 * Implements hook_install_tasks().
 */
function ns_example_profile_install_tasks() {
  // NodeStream uses the Default config module for a lot of it's configuration.
  // In order to get that configuration in place, we add an install task.
  // This gives us complete control over when the configuration is added.
  // NodeStream already defines this task, so we can just use the function from
  // that profile.
  return array(
    'nodestream_finish' => array(
      'display_name' => st('Apply configuration'),
      'display' => TRUE,
      'type' => 'batch',
    ),
  );
}
