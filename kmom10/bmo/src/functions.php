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

function getPublishedPosts($db) {

  // Prepare and execute the SQL statement
  $stmt = $db->prepare("SELECT * FROM Article WHERE category = 'article'");
  $stmt->execute();

  // Get the results as an array with column names as array keys
  $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

	return $articles;
}

function getPost($id, $db){
	// Get single post slug
	$post_slug = $_GET['id'];
  $stmt = $db->prepare("SELECT * FROM Article WHERE id = '$post_slug'");
  $stmt->execute();

	// fetch query results as associative array.
	$post = $stmt->fetchAll(PDO::FETCH_ASSOC);
	// if ($post) {
	// 	// get the topic to which this post belongs
	// 	$post['topic'] = getPostTopic($post['id']);
	// }
	return $post;
}
