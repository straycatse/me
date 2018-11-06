<?php
/**
 * Definitions of commonly used functions.
 */

/**
 * Connect to database.
 */
function connectToDatabase($dsn)
{
     // Enable verbose output of error (or include from config.php)
     error_reporting(-1);              // Report all type of errors
     ini_set("display_errors", 1);     // Display all errors

     // Open the database file and catch the exception if it fails.
    try {
         $db = new PDO($dsn);
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
         echo "Failed to connect to the database using DSN:<br>$dsn<br>";
         throw $e;
    }

     return $db;
}
