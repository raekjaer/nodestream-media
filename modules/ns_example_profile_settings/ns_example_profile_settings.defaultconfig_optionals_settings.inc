<?php
/**
 * @file
 * ns_example_profile_settings.defaultconfig_optionals_settings.inc
 */

/**
 * Implements hook_defaultconfig_optionals_settings().
 */
function ns_example_profile_settings_defaultconfig_optionals_settings() {
  $export = array();

  $preset = new stdClass();
  $preset->disabled = FALSE; /* Edit this to true to make a default preset disabled initially */
  $preset->api_version = 1;
  $preset->name = 'field_default_fields:node-ns_page-field_ns_page_attach_files';
  $preset->status = 1;
  $export['field_default_fields:node-ns_page-field_ns_page_attach_files'] = $preset;

  $preset = new stdClass();
  $preset->disabled = FALSE; /* Edit this to true to make a default preset disabled initially */
  $preset->api_version = 1;
  $preset->name = 'field_default_fields:node-ns_page-field_ns_page_lead';
  $preset->status = 1;
  $export['field_default_fields:node-ns_page-field_ns_page_lead'] = $preset;

  $preset = new stdClass();
  $preset->disabled = FALSE; /* Edit this to true to make a default preset disabled initially */
  $preset->api_version = 1;
  $preset->name = 'field_default_fields:node-ns_page-field_ns_page_link_list';
  $preset->status = 0;
  $export['field_default_fields:node-ns_page-field_ns_page_link_list'] = $preset;

  $preset = new stdClass();
  $preset->disabled = FALSE; /* Edit this to true to make a default preset disabled initially */
  $preset->api_version = 1;
  $preset->name = 'field_default_fields:node-ns_prod_enterprise_section-field_ns_prod_entrpr_body';
  $preset->status = 1;
  $export['field_default_fields:node-ns_prod_enterprise_section-field_ns_prod_entrpr_body'] = $preset;

  return $export;
}
