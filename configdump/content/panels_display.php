<?php
function configdump_table_panels_display() {
  return array(
    'data' => array(
      0 => (object) array(
        'did' => '1',
        'layout' => 'ns_core_column_two',
        'layout_settings' => array(),
        'panel_settings' => array(
          'style_settings' => array(
            'center' => NULL,
            'header_alpha' => array(),
            'main' => array(),
            'aside_beta' => array(),
            'footer_alpha' => array(),
            'default' => NULL,
          ),
          'style' => 'naked',
          'header_alpha' => array(
            'style' => 'semantic_panels',
          ),
          'main' => array(
            'style' => 'semantic_panels',
          ),
          'aside_beta' => array(
            'style' => 'semantic_panels',
          ),
          'footer_alpha' => array(
            'style' => 'semantic_panels',
          ),
        ),
        'cache' => array(),
        'title' => '',
        'hide_title' => '0',
        'title_pane' => '0',
      ),
    ),
    'serialized_cols' => array(
      'layout_settings' => 'layout_settings',
      'panel_settings' => 'panel_settings',
      'cache' => 'cache',
    ),
  );
}
