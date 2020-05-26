<?php
/**
 * @file
 * A file loaded for all pages on the site.
 */
require __DIR__ . "/../vendor/autoload.php";

// Create the site object for MixYours and set up the connection for the database.
$site = new \MixYours\Site();
$localize = require 'localize.inc.php';
if(is_callable($localize)) {
    $localize($site);
}

// Start the PHP session chain
session_start();
$user = null;
if(isset($_SESSION[MixYours\User::SESSION_NAME])) {
    $user = $_SESSION[MixYours\User::SESSION_NAME];
}