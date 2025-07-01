<?php
$AUTOCONFIG = array(
  'dbtype' => 'sqlite3',
  'dbtableprefix' => 'oc_',
  'adminlogin' => getenv('NEXTCLOUD_ADMIN_USER') ?: 'admin',
  'adminpass' => getenv('NEXTCLOUD_ADMIN_PASSWORD') ?: 'AdminPass123!',
  'directory' => '/var/www/html/data',
  'objectstore' => array(
    'class' => 'OC\\Files\\ObjectStore\\S3',
    'arguments' => array(
      'bucket' => getenv('SPACES_BUCKET') ?: 'owncloud-storage',
      'autocreate' => true,
      'key' => getenv('SPACES_ACCESS_KEY'),
      'secret' => getenv('SPACES_SECRET_KEY'),
      'hostname' => getenv('SPACES_ENDPOINT') ?: 'fra1.digitaloceanspaces.com',
      'port' => 443,
      'use_ssl' => true,
      'region' => 'fra1',
      'use_path_style' => false,
    ),
  ),
);
?>