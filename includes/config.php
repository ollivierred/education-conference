<?php
/*
 * $loader needs to be a relative path to an autoloader script.
 * Swift Mailer's autoloader is swift_required.php in the lib directory.
 * If you used Composer to install Swift Mailer, use vendor/autoload.php.
 */
$loader = __DIR__ . '/../vendor/autoload.php';

require_once $loader;

/*
 * Login details for mail server
 */
$smtp_server = 'server135.web-hosting.com';
$username = 'contact@educonf-az.com';
$password = 'F3derer!';

/*
 * Email addresses for testing
 * The first two are associative arrays in the format
 * ['email_address' => 'name']. The rest contain just
 * an email address as a string.
 */
$from = ['contact@educonf-az.com' => 'Contact form Submission'];
$addressMain = ['siteknight.design@gmail.com' => 'Project Manager' ];
$address2 = 'olliviarts@gmail.com';
$address3 = 'ollivierre.dev@gmail.com';
$secret = '';
$private = '';
