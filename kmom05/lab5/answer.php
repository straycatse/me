<?php

/**
 * @preserve 650853257f9bb2c027392a74db357011
 *
 * 650853257f9bb2c027392a74db357011
 * htmlphp
 * lab5
 * v2
 * siso18
 * 2018-10-11 17:39:03
 * v3.1.3 (2018-09-13)
 *
 * Generated 2018-10-11 19:39:03 by dbwebb lab-utility v3.1.3 (2018-09-13).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 5 - Htmlphp
 *
 * This lab pretty much deals with getting youreself acquainted with the PHP
 * Manual. Search, find and read. It will be fun.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Date and time
 *
 * In this section you will be working with the DateTime-object. If you
 * manipulate the object, such as add or subtract, the original object will be
 * changed, hence you will create new objects from the same date in these
 * exercises.
 *
 * Read more on [datetime in the
 * manual](http://php.net/manual/en/class.datetime.php).
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Use `new DateTime()` to create a new DateTime-object from the date:
 * `1999-01-05 09:10:32`. Format the object to present the year-month-day,
 * `Y-m-d` and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$dateTime = new DateTime('1999-01-05, 09:10:32');



$ANSWER = $dateTime->format('Y-m-d');

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a new DateTime-object with the same parameters and add 3 months to
 * it. Answer with the result, presented in the format: `Y-m-d`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$dateTime2 = new DateTime('1999-01-05, 09:10:32');

date_add($dateTime2, date_interval_create_from_date_string('3 months'));

$ANSWER = $dateTime2->format('Y-m-d');

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Use one of your DateTime-objects and answer with the time, presented in the
 * format: `hours:minutes:seconds`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$ANSWER = $dateTime->format('H:i:s');

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Working with files
 *
 * In this section, you will be working with the file: `SherlockHolmes.txt`.
 * It contains a paragraph from a book and can be found in the lab folder.
 *
 */



/**
 * Exercise 2.1 (1 points)
 *
 * Use `file_get_contents()` to get the file as a string. Save it to a
 * variable called `fileAsString`. Answer with the variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$fileAsString = file_get_contents('SherlockHolmes.txt');



$ANSWER = $fileAsString;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (1 points)
 *
 * Use `file_get_contents()` to get 25 characters, starting on the 17th
 * character.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$fileAsString2 = file_get_contents("SherlockHolmes.txt", true, null, 16, 25);


$ANSWER = $fileAsString2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 3 . Serialize
 *
 *
 *
 */



/**
 * Exercise 3.1 (1 points)
 *
 * Use the file `serialized.txt` in your lab folder and read it, unserialize
 * it and put the result in your answer.
 *
 * (Tips: Take a peek into your 'serialized.txt' to see how a serialized array
 * looks)
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$serialized = file_get_contents("serialized.txt");

$ANSWER = unserialize($serialized);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.1", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 4 . Cryptography
 *
 * Reference to
 * [password_hash](http://php.net/manual/en/function.password-hash.php) and
 * [rot13](http://php.net/manual/en/function.str-rot13.php).
 *
 */



/**
 * Exercise 4.1 (1 points)
 *
 * Use `password_hash()` with the DEFAULT algorithm to create a hash of the
 * password: `"myPassword"`. Test `password_verify()` with different passwords
 * to see what it returns. Answer with the result, using `"myPassword"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$hashedPass = password_hash("myPassword", PASSWORD_DEFAULT);

$ANSWER = password_verify("myPassword", $hashedPass);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.1", $ANSWER, false);

/**
 * Exercise 4.2 (1 points)
 *
 * Use `ROT13` encoding on your password: `"myPassword"`. Answer with the
 * result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$ANSWER = str_rot13("myPassword");

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.2", $ANSWER, false);

/**
 * Exercise 4.3 (1 points)
 *
 * Use `ROT13` decoding to find which movies hides in the string:
 *
 * > "Pvaqreryyn, Ynql naq gur Genzc, Byq Lryyre, Gernfher Vfynaq, Gur Whatyr
 * Obbx"
 *
 * Each movie is comma-separated in the string above.
 *
 * Answer with an array containing all answers.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$movies = str_rot13("Pvaqreryyn, Ynql naq gur Genzc, Byq Lryyre, Gernfher Vfynaq, Gur Whatyr Obbx");

$arrayMovies = explode(', ', $movies);

$ANSWER = $arrayMovies;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.3", $ANSWER, false);

/**
 * Exercise 4.4 (1 points)
 *
 * Calculate the hash of the password `"myPassword"` with `md5`. Answer with
 * the hash.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$ANSWER = md5("myPassword");

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.4", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 5 . Multibyte strings
 *
 *
 *
 */



/**
 * Exercise 5.1 (1 points)
 *
 * Set the internal encoding to `ISO-8859-1`. Answer with the result of
 * `mb_internal_encoding()`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

mb_internal_encoding("ISO-8859-1");

$ANSWER = mb_internal_encoding();

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("5.1", $ANSWER, false);

/**
 * Exercise 5.2 (1 points)
 *
 * Check the `strlen()` and `mb_strlen()` of the word `"övergångsställe"`.
 * Answer with the two results as a comma and space-separated string.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$word = "övergångsställe";

$wordLength = strlen($word);
$wordLength2 = mb_strlen($word);

$wordsTogether = $wordLength . ', ' . $wordLength2;

$ANSWER = $wordsTogether;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("5.2", $ANSWER, false);

/**
 * Exercise 5.3 (1 points)
 *
 * Set the internal encoding to `UTF-8` and check the `strlen()` and
 * `mb_strlen()` of the word `"övergångsställe"`. Answer with the two
 * results as a comma-separated string.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

mb_internal_encoding("UTF-8");

$word = "övergångsställe";

$wordLength = strlen($word);
$wordLength2 = mb_strlen($word);

$wordsTogether = $wordLength . ', ' . $wordLength2;

$ANSWER = $wordsTogether;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("5.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 6 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 6.1 (3 points)
 *
 * Create a new DateTime-object based on the same date and time and subtract 5
 * days and 3 hours from it. Answer with the whole date, presented in the
 * format: `Y-m-d hours:minutes:seconds`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = "Replace this text with the variable holding the answer.";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.1", $ANSWER, false);

/**
 * Exercise 6.2 (3 points)
 *
 * Use a combination of `implode()` with a space as a delimiter and
 * `explode()` to format the content of the file `SherlockHolmes.txt` and
 * remove newline characters. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = "Replace this text with the variable holding the answer.";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.2", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
