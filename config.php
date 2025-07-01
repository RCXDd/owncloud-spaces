<?php
$CONFIG = array (
  'instanceid' => 'nc' . bin2hex(random_bytes(5)),
  'passwordsalt' => bin2hex(random_bytes(30)),
  'secret' => bin2hex(random_bytes(48)),
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => 'nextcloud-app-prnvv.ondigitalocean.app',
    2 => getenv('APP_DOMAIN') ?: 'nextcloud-app-prnvv.ondigitalocean.app',
  ),
  'datadirectory' => '/var/www/html/data',
  'overwrite.cli.url' => 'https://' . (getenv('APP_DOMAIN') ?: 'nextcloud-app-prnvv.ondigitalocean.app'),
  'dbtype' => 'sqlite3',
  'version' => '29.0.8.1',
  'installed' => true,
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
  'maintenance' => false,
  'theme' => '',
  'loglevel' => 2,
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'default_phone_region' => 'DE',
  'mail_smtpmode' => 'smtp',
);
?>