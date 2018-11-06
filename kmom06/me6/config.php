<?php
// Start the named session,
// the name is based on the path to this file.
$name = preg_replace("/[^a-z\d]/i", "", __DIR__);
session_name($name);
session_start();

// Create a DSN for the database using its filename
$fileName = __DIR__ . "/db/boatclub.sqlite";
$dsn = "sqlite:$fileName";

// Create a DSN for the database using its filename
$fileName2 = __DIR__ . "/db/me.sqlite";
$dsn2 = "sqlite:$fileName2";

/**
 * Configuration file with common settings.
 */
error_reporting(-1);              // Report all type of errors
ini_set("display_errors", 1);     // Display all errors

$baseTitle = " | Simon Solberg";
