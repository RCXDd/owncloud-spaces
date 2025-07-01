<?php
// ownCloud S3 Configuration for DigitalOcean Spaces
$CONFIG = array(
  'objectstore' => array(
    'class' => 'OC\\Files\\ObjectStore\\S3',
    'arguments' => array(
      'bucket' => 'owncloud-storage', // Your Spaces bucket name
      'autocreate' => true,
      'key' => getenv('SPACES_ACCESS_KEY'),
      'secret' => getenv('SPACES_SECRET_KEY'),
      'hostname' => 'fra1.digitaloceanspaces.com', // Frankfurt endpoint
      'port' => 443,
      'use_ssl' => true,
      'region' => 'fra1',
      'use_path_style' => false
    ),
  ),
  'log_type' => 'file',
  'logfile' => '/var/www/html/data/owncloud.log',
  'loglevel' => 2,
);
?>