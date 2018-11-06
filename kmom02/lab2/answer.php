<?php

/**
 * @preserve 04f1896b701afcaf4eff87791a7e126a
 *
 * 04f1896b701afcaf4eff87791a7e126a
 * htmlphp
 * lab2
 * v2
 * siso18
 * 2018-09-20 12:45:48
 * v3.1.3 (2018-09-13)
 *
 * Generated 2018-09-20 14:45:48 by dbwebb lab-utility v3.1.3 (2018-09-13).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 2 - htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP manual](http://php.net/manual/en/langref.php).
 *
 * Here you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Strings and basic string operations
 *
 * The foundation for strings.
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create a variable called `wordOne` and assign the word `"earth"` to it.
 *
 * Create another variable called `wordTwo` and assign the word `"puppy"` to
 * it.
 *
 * Concatenate the two strings, and separate them by a hyphen `-`, into a new
 * variable called `result`.
 *
 * Answer with the result-variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$wordOne = "earth";
$wordTwo = "puppy";

$result =  $wordOne . "-" . $wordTwo;

$ANSWER = $result;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a variable, `floatNumber`, and assign the value 95.65. Concatenate
 * your variable `wordOne` with your variable `floatNumber`, separate the
 * words with a `=`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$floatNumber = '95.65';

$result2 = $wordOne . "=" . $floatNumber;

$ANSWER = $result2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create a variable, `intNumber`, and assign the value 295. Concatenate your
 * variable `intNumber` with your variable `wordTwo`, separate the words with
 * a space. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$intNumber = '295';

$result3 = $intNumber . " " . $wordTwo;

$ANSWER = $result3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create the string: `"There are 295 puppy's doing some earth."` by combining
 * pure text with the values of your variables `wordOne`, `wordTwo` and
 * `intNumber`. Store the resulting text in a variable `sentence`. Answer with
 * the variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sentence = 'There are ' . $intNumber . " " . $wordTwo . "'s doing some " . $wordOne . ".";

$ANSWER = $sentence;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Use `strlen()` to find the length of the variable `sentence`. Answer with
 * the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$result5 = strlen($sentence);

$ANSWER = $result5;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Use `substr()` to find the character at index 2 in the word `"pound"`.
 * Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$result6 = substr("pound", 2, 1);

$ANSWER = $result6;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Use `substr()` to find the two characters at index 3 and 4 in the word
 * `"badger"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$result7 = substr("badger", 3, 2);

$ANSWER = $result7;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/**
 * Exercise 1.8 (1 points)
 *
 * Use `strpos()` to find the first matching index of the character `h` in the
 * word `"dolphin"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$result8 = strpos("dolphin", "h");

$ANSWER = $result8;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.8", $ANSWER, false);

/**
 * Exercise 1.9 (1 points)
 *
 * Use `strpos()` to find the first matching, (if any), index of the
 * characters `xyz` in the word `"dolphin"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$result9 = strpos("dolphin", "xyz");

$ANSWER = $result9;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.9", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Conditions, booleans, if, else and else if
 *
 *
 *
 */



/**
 * Exercise 2.1 (1 points)
 *
 * Store the boolean result of the test: `161 is less than 432` in a variable.
 * Answer with the variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

if (161 < 432) {
    $result10 = true;
} else {
    $result10 = false;
}

$ANSWER = $result10;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (1 points)
 *
 * Answer with the boolean value of: `398 is larger than 305`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
if (398 > 305) {
    $result11 = true;
} else {
    $result11 = false;
}

$ANSWER = $result11;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);

/**
 * Exercise 2.3 (1 points)
 *
 * Sum up the numbers: 9, 5, 4, 6 and 3. Save the result in a variable called
 * `totalSum`.
 *
 * Create an if/elseif-statement to see if `totalSum` is higher, lower or
 * equal to 38.
 *
 * Answer with the corresponding result as a string: `"higher"`, `"lower"`,
 * `"equal"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$totalSum = 9 + 5 + 4 + 6 + 3;
$result12 = "";

if ($totalSum > 38) {
    $result12 = "higher";
} elseif ($totalSum == 38) {
    $result12 = "equal";
} else {
    $result12 = "lower";
}

$ANSWER = $result12;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.3", $ANSWER, false);

/**
 * Exercise 2.4 (1 points)
 *
 * Create an if-statement that checks if a value is between (or equal to) 24
 * and  33. Use the variable `totalSum` from last exercise to test the
 * if-statement. Answer with a boolean `true` if the value is between the
 * values, otherwise respond with `false`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
if ($totalSum > 23 && $totalSum < 34) {
    $result13 = true;
} else {
    $result13 = false;
}

$ANSWER = $result13;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.4", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 3 . Iteration and loops
 *
 * For-loops and while-loops.
 *
 */



/**
 * Exercise 3.1 (1 points)
 *
 * Create a while-loop that adds 4 to the number 96, 69 times. Use variables
 * to store the numbers. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numberThree = 96;
$numberAdd = 4;
$timesAdded = 0;

while ($timesAdded != 69) {
    $numberThree = $numberThree + $numberAdd;
    $timesAdded++;
}

$result14 = $numberThree;

$ANSWER = $result14;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.1", $ANSWER, false);

/**
 * Exercise 3.2 (1 points)
 *
 * Create a while-loop that subtracts 5.2 from the number 667 until the number
 * is between (not equal to) 22 and 32. Answer with the final result as a
 * float, rounded to 2 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$numberFour = 667;
$numberSub = 5.2;

while ($numberFour > 32) {
    $numberFour = $numberFour - $numberSub;
}

$result15 = round($numberFour, 2);

$ANSWER = $result15;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.2", $ANSWER, false);

/**
 * Exercise 3.3 (1 points)
 *
 * Create a for-loop that iterates from 0 to (including) 11. Add the integer
 * value for each iteration to a string and separate each item with a `,`
 * (comma). Answer with the final string without an ending `,`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sentence2 = "";

for ($i = 0; $i < 12; $i++) {
    $sentence2 = $sentence2 . $i . ",";
}

$ANSWER = substr($sentence2, 0, -1);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 4 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 4.1 (3 points)
 *
 * Create a for-loop that goes through (and including) the numbers 22 to 32.
 * If the current number is even, you should multiply it with PI and add it to
 * a variable `res`. If the current number is odd, you should subtract the
 * square root of it, from the variable `res`. If the current number ends with
 * a zero, then ignore it. Answer with the final result of `res` and round it
 * to the nearest higher integer value.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = "Replace this text with the variable holding the answer.";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.1", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
