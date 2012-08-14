<?php
function configdump_table_users() {
  return array(
    'data' => array(
      0 => (object) array(
        'uid' => '0',
        'name' => '',
        'pass' => '',
        'mail' => '',
        'theme' => '',
        'signature' => '',
        'signature_format' => NULL,
        'created' => '0',
        'access' => '0',
        'login' => '0',
        'status' => '0',
        'timezone' => NULL,
        'language' => '',
        'picture' => '0',
        'init' => '',
        'data' => NULL,
      ),
      1 => (object) array(
        'uid' => '1',
        'name' => 'admin',
        'pass' => '$S$D0KaGrrfAFWwMFR0CxVgB9BLOdStTEbM/fbYh7iqR8gfrPAPzYct',
        'mail' => 'admin@example.com',
        'theme' => '',
        'signature' => '',
        'signature_format' => NULL,
        'created' => '1344946283',
        'access' => '1344951209',
        'login' => '1344949451',
        'status' => '1',
        'timezone' => 'Europe/Berlin',
        'language' => '',
        'picture' => '0',
        'init' => 'admin@example.com',
        'data' => FALSE,
      ),
    ),
    'serialized_cols' => array(
      'data' => 'data',
    ),
  );
}
