<?php

/**
 * @file
 * #ddev-generated: Automatically generated Drupal settings file.
 * ddev manages this file and may delete or overwrite the file unless this
 * comment is removed.  It is recommended that you leave this file alone.
 */

$host = "db";
$port = 3306;
$driver = "mysql";

$databases['default']['default']['database'] = "db";
$databases['default']['default']['username'] = "db";
$databases['default']['default']['password'] = "db";
$databases['default']['default']['host'] = $host;
$databases['default']['default']['driver'] = $driver;
$databases['default']['default']['port'] = $port;

$settings['hash_salt'] = 'e06b192ea7ddb7bff977e49d9eb221b6e2b29f6e8da91a88175803080b1b95c3';

// This will prevent Drupal from setting read-only permissions on sites/default.
$settings['skip_permissions_hardening'] = TRUE;

// This will ensure the site can only be accessed through the intended host
// names. Additional host patterns can be added for custom configurations.
$settings['trusted_host_patterns'] = ['.*'];

// Don't use Symfony's APCLoader. ddev includes APCu; Composer's APCu loader has
// better performance.
$settings['class_loader_auto_detect'] = FALSE;

// Set $settings['config_sync_directory'] if not set in settings.php.
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
if (empty($settings['config_sync_directory'])) {
  $dir = dirname(DRUPAL_ROOT);
  $settings['config_sync_directory'] = "{$dir}/config/default";
}

// Override drupal/symfony_mailer default config to use Mailpit
$config['symfony_mailer.mailer_transport.sendmail']['plugin'] = 'smtp';
$config['symfony_mailer.mailer_transport.sendmail']['configuration']['user']='';
$config['symfony_mailer.mailer_transport.sendmail']['configuration']['pass']='';
$config['symfony_mailer.mailer_transport.sendmail']['configuration']['host']='localhost';
$config['symfony_mailer.mailer_transport.sendmail']['configuration']['port']='1025';

// Override drupal/swiftmailer default config to use Mailpit
$config['swiftmailer.transport']['transport'] = 'smtp';
$config['swiftmailer.transport']['smtp_host'] = '127.0.0.1';
$config['swiftmailer.transport']['smtp_port'] = '1025';
$config['swiftmailer.transport']['smtp_encryption'] = '0';

// Enable verbose logging for errors.
// https://www.drupal.org/forum/support/post-installation/2018-07-18/enable-drupal-8-backend-errorlogdebugging-mode
$config['system.logging']['error_level'] = 'verbose';
