<?php

/**
 * @preserve 229e33280d735ae3a1f105c6f08ef5b8
 *
 * 229e33280d735ae3a1f105c6f08ef5b8
 * htmlphp
 * lab1
 * v2
 * siso18
 * 2018-09-12 21:26:08
 * v3.1.2 (2018-09-06)
 *
 * Generated 2018-09-12 23:26:08 by dbwebb lab-utility v3.1.2 (2018-09-06).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 1 - htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP manual](http://php.net/manual/en/langref.php).
 *
 * Here you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Integers, floats and basic arithmetics
 *
 * The foundation of numbers and basic arithmetic.
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create two variables called `numOne` and `numTwo` and assign to them the
 * values 97 and 18.
 *
 * Sum up the variables and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numOne = 97;
$numTwo = 18;

$sum = $numOne + $numTwo;

$ANSWER = $sum;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Use your two variables `numOne` and `numTwo`. Subtract `numOne` from
 * `numTwo` and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$sum2 = $numTwo - $numOne;



$ANSWER = $sum2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Divide `numOne` with `numTwo` and use the function `round()` to round the
 * answer to 1 decimal.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$sum3 = round($numOne / $numTwo, 1);



$ANSWER = $sum3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create a variable called `floatOne` and give it the value 250.27. Create
 * another variable called `floatTwo` and give it the value 290.66. Sum up the
 * variables and answer with the result rounded to 2 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$floatOne = 250.27;
$floatTwo = 290.66;
$sum4 = round($floatOne + $floatTwo, 2);



$ANSWER = $sum4;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Subtract `floatOne` from `floatTwo`, round up to 3 decimals and answer with
 * the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$sum4 = round($floatTwo - $floatOne, 3);



$ANSWER = $sum4;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Create a variable called `floatThree` and give it the value 62.56.  Add
 * `floatOne` to `floatTwo` and multiply the result with `floatThree`, take
 * that result and divide it by `numOne`.
 *
 * Answer with the result rounded to 4 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$floatThree = 62.56;
$result = $floatTwo + $floatOne;
$result2 = $result * $floatThree;
$sum5 = round($result2 / $numOne, 4);



$ANSWER = $sum5;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Create a variable `modOne` with a value of 623 and a variable `modTwo`
 * holding the value 63.
 *
 * Answer with the result of `modOne` modulo (%) `modTwo`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$modOne = 623;
$modTwo = 63;

$sum6 = $modOne % $modTwo;

$ANSWER = $sum6;

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
 * You are going to solve the well-known 'chessboard and rice grain problem'.
 *
 * Imagine you have a standard chessboard and put one rice grain on the first
 * square. Then you put two grains on the second square, four on the third,
 * eight on the fourth and so on... How many rice grains are there on the last
 * square?
 *
 * Answer with the square root of the result, rounded to 2 decimals. (Make
 * sure the answer is of the type `double`).
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$start = 1;
$end = 64;
$rice = 1;
$sum7 = 0;

for ($i = $start; $i <= $end; $i++) {
    $rice *= 2;
}

$sum7 = sqrt($rice);
$sum7 = round($sum7, 2);

$ANSWER = $sum7;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, true);

/**
 * Exercise 2.2 (3 points)
 *
 * Sum all numbers from 1 to 100. Answer with the result. (Make sure the
 * answer is of the type `integer`)
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$first = 1;
$finish = 100;
$sum8 = 0;

for ($i = $first; $i <= $finish; $i++) {
    $sum8 += $i;
}


$ANSWER = $sum8;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
