<?php
$CONFIG = array (
  'instanceid' => 'oc' . bin2hex(random_bytes(5)),
  'passwordsalt' => bin2hex(random_bytes(30)),
  'secret' => bin2hex(random_bytes(48)),
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => 'owncloud-app-prnvv.ondigitalocean.app',
  ),
  'datadirectory' => '/var/www/owncloud/data',
  'overwrite.cli.url' => 'https://owncloud-app-prnvv.ondigitalocean.app',
  'dbtype' => 'sqlite3',
  'version' => '10.14.0.1',
  'dbname' => 'owncloud',
  'dbtableprefix' => 'oc_',
  'dbhost' => '',
  'dbport' => '',
  'dbuser' => '',
  'dbpassword' => '',
  'installed' => true,
  'objectstore' => array(
    'class' => 'OC\\Files\\ObjectStore\\S3',
    'arguments' => array(
      'bucket' => 'owncloud-storage',
      'autocreate' => true,
      'key' => getenv('SPACES_ACCESS_KEY') ?: 'DO00L8TYXMPJ2BE37L8X',
      'secret' => getenv('SPACES_SECRET_KEY') ?: 'M1LCGGp7wKzfM3C2ERiAylzRvWx9FrzFhmy2tVBq97I',
      'hostname' => 'fra1.digitaloceanspaces.com',
      'port' => 443,
      'use_ssl' => true,
      'region' => 'fra1',
      'use_path_style' => false
    ),
  ),
  'maintenance' => false,
  'theme' => '',
  'loglevel' => 2,
  'mysql.utf8mb4' => true,
);
?>