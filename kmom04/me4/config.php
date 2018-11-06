<?php
// Start the named session,
// the name is based on the path to this file.
$name = preg_replace("/[^a-z\d]/i", "", __DIR__);
session_name($name);
session_start();

/**
 * Configuration file with common settings.
 */
error_reporting(-1);              // Report all type of errors
ini_set("display_errors", 1);     // Display all errors

$baseTitle = " | Simon Solberg";
