<?php

/**
 * @preserve 8e4199411e93a66f2e3993cf3190f805
 *
 * 8e4199411e93a66f2e3993cf3190f805
 * htmlphp
 * lab6
 * v2
 * siso18
 * 2018-10-18 18:26:30
 * v3.1.3 (2018-09-13)
 *
 * Generated 2018-10-18 20:26:30 by dbwebb lab-utility v3.1.3 (2018-09-13).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 6 - Htmlphp
 *
 * In this lab you will be working with a SQLite database file: `myDB.sqlite`
 * and PDO.
 *
 * Do not forget to check the [PHP Manual on
 * PDO](http://php.net/manual/en/book.pdo.php)
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Working with SQLite and PDO
 *
 * The database has one table called `people`.
 *
 * The table 'people' has six columns:
 *
 * > `id`, `firstName`, `lastName`, `born`, `cityOfBirth`, `countryOfBirth`.
 *
 */

$fileName = "myDB.sqlite";
$dsn = "sqlite:$fileName";

try {
     $db = new PDO($dsn);
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
     throw $e;
}

/**
 * Exercise 1.1 (1 points)
 *
 * Find the firstnames of the people born in England. Answer with an array
 * containing their names.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT firstName FROM people WHERE countryOfBirth = 'England'";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
$result = [];
foreach ($res as $row) {
    $result[] = $row["firstName"];
}

$ANSWER = $result;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Find the first name and last name of the person born 1905.
 * Answer with a string in the format: `"Firstname Lastname"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT firstName, lastName FROM people WHERE born = 1905";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($res);
$result = $res["firstName"] . " " . $res["lastName"];
$ANSWER = $result;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Sum the years the persons with the lastnames `Blanchett` and `Depp` were
 * born. Answer with an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT SUM(born) AS total FROM people WHERE lastName IN ('Blanchett', 'Depp')";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($res);
$result = intval($res["total"]);
$ANSWER = $result;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Count the number of entries in the table `people`. Answer with an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT COUNT() AS entries FROM people";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($res);
$result = intval($res["entries"]);
$ANSWER = $result;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Find which country `(countryOfBirth)` the oldest person was born in. Answer
 * with a string.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$sql = "SELECT countryOfBirth FROM people WHERE born =  ( SELECT MIN(born) FROM people )";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetch(PDO::FETCH_ASSOC);
$result = $res["countryOfBirth"];
$ANSWER = $result;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * What is the average value of the column `born`? Answer with an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT AVG(born) AS born FROM people";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetch(PDO::FETCH_ASSOC);
$result = intval($res["born"]);
$ANSWER = $result;


// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Find the youngest person born in USA. Which city is he/she born in? Answer
 * with a string.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sql = "SELECT cityOfBirth FROM people WHERE born = ( SELECT MAX(born) FROM people WHERE countryOfBirth = 'USA' )";
$stmt = $db->prepare($sql);
$stmt->execute();
$res = $stmt->fetch(PDO::FETCH_ASSOC);
print_r($res);
$result = $res["cityOfBirth"];
$ANSWER = $result;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 2.1 (3 points)
 *
 * Get the first name and lastname of all persons in the database. Order them
 * by their last name, alphabetically and ascending.
 *
 * Answer with an array of strings, like this:
 *
 * > `["lastName firstName", "lastName firstName"]`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = "Replace this text with the variable holding the answer.";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
