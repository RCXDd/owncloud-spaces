<?php
$AUTOCONFIG = array(
  'dbtype' => 'sqlite3',
  'dbtableprefix' => 'oc_',
  'adminlogin' => getenv('NEXTCLOUD_ADMIN_USER') ?: 'admin',
  'adminpass' => getenv('NEXTCLOUD_ADMIN_PASSWORD') ?: 'AdminPass123!',
  'directory' => '/var/www/html/data',
);
?>