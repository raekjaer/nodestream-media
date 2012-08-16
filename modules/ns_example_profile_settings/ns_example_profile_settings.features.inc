<?php
/**
 * @file
 * ns_example_profile_settings.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function ns_example_profile_settings_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "defaultconfig" && $api == "defaultconfig_optionals_settings") {
    return array("version" => "1");
  }
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
