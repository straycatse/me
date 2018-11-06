<?php

/**
 * @preserve 8aed0520cc6a347c2e327f269bafb906
 *
 * 8aed0520cc6a347c2e327f269bafb906
 * htmlphp
 * lab4
 * v2
 * siso18
 * 2018-10-01 19:03:36
 * v3.1.3 (2018-09-13)
 *
 * Generated 2018-10-01 21:03:37 by dbwebb lab-utility v3.1.3 (2018-09-13).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 4 - Htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP Manual](http://php.net/manual/en/langref.php).
 *
 * There you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Basic functions
 *
 *
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create a function called `sumNumbers()` that should take 2 numbers as
 * arguments and return the sum of them.
 *
 * Answer with a call to the function using the numbers 314 and 652.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

function sumNumbers($num1, $num2)
{
    // $result = $num1 + $num2;
    return $num1 + $num2;
}

$result = sumNumbers("314", "652");

$ANSWER = $result;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a function called `sumArray()` that should take an array as argument
 * and return the sum of all items in the array.
 *
 * Answer with a call to the function using the array: `[2,134,8,35,5]`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$firstArray = [2,134,8,35,5];

function sumArray($array)
{
    return array_sum($array);
}

$result2 = sumArray($firstArray);

$ANSWER = $result2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create a function called `modArray()` that should take 2 arguments, an
 * array and a string. Replace the first item in the array with the string and
 * return the array.
 *
 * Answer with a call to the function using the arguments: `[1,321,5,89,8]`
 * and `"turnip"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$secondArray = [1,321,5,89,8];

function modArray($array, $string)
{
    $array[0] = $string;
    return $array;
}

$result3 = modArray($secondArray, "turnip");

$ANSWER = $result3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create a function called `printRange()` that should take 2 numbers as
 * arguments, start and stop. The function should add all even numbers between
 * start and stop (not including) to an array and return it.
 *
 * Answer with a call to the function using the arguments: 6 and 35.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

function printStop($start, $stop)
{
    for ($i = $start + 1; $i < $stop; $i++) {
        if ($i % 2 == 0) {
                $summedRange[] = $i;
        } else {
        }
    }
    return $summedRange;
}

$result4 = printStop(6, 35);

$ANSWER = $result4;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Create a function called `combineArrays()` that takes two arrays as
 * arguments. The function should combine the arrays to one associative array
 * and return it. The first argument is the key and the second argument is the
 * value.
 *
 * Answer with a call to the function using the arguments:
 * `[green,brown,pink,white,gray,blue]` and `[frog,bear,pig,lion,wolf,whale]`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$firstArray = ["green","brown","pink","white","gray","blue"];
$secondArray = ["frog","bear","pig","lion","wolf","whale"];

function combineArrays($array1, $array2)
{
    return array_combine($array1, $array2);
}

$result5 = combineArrays($firstArray, $secondArray);

$ANSWER = $result5;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Create a function called `euroToDollar()` that takes one argument, the euro
 * amount to convert to dollars. Count 1 Euro as 1.261215 dollars. Return the
 * dollar amount of 402 Euros.
 *
 * Answer with the result as a double with 4 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$inputEuro = 402;

function euroToDollar($amount)
{
    return $amount * 1.261215;
}

$result6 = round(euroToDollar($inputEuro), 4);

$ANSWER = $result6;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Create a function called `inRange()` that takes one argument. The function
 * should return `true` if the argument is higher than 50 and lower than 100.
 * If the number is out of range, the function should return `false`. The
 * return type should be boolean.
 *
 * Use the argument 144 and answer with a call to the function.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$inputNumber = 144;

function inRange($number)
{
    if ($number > 50 && $number < 100) {
        return true;
    } else {
        return false;
    }
}

$result7 = inRange($inputNumber);

$ANSWER = $result7;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/**
 * Exercise 1.8 (1 points)
 *
 * Create a function called `calculateArea()` that takes one argument, the
 * diameter of a circle. The function should return the area of the circle,
 * with 4 decimals.
 *
 * Answer with the result if the diameter is 10. ( hint: `pi()` )
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$inputDiameter = 10;

function calculateArea($dia)
{
    $rad = $dia / 2;
    return round($rad * $rad * pi(), 4);
}

$result8 = calculateArea($inputDiameter);

$ANSWER = $result8;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.8", $ANSWER, false);

/**
 * Exercise 1.9 (1 points)
 *
 * Create a function called `fibonacci()`. The function should use the
 * [Fibbonacci Sequence](http://en.wikipedia.org/wiki/Fibonacci_number),
 * starting with 1 and 2. Return the sum of all odd numbers in the sequence,
 * when the sequence value dont exceed 1.000.000.
 *
 * Answer with a call of the function. A Fibonacci-sequence can look like
 * this: 1, 2, 3, 5, 8, 13, 21, 34, 55 etc. You add the current value with the
 * last, i.e. `1+2=3, 3+2=5, 5+3=8 etc`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$start1 = 0;
$start2 = 1;

function fibonacci($fib1, $fib2)
{
    $summedOddNum = 0;
    while ($summedOddNum <= 1000000) {
        $fib3 = $fib1 + $fib2;
        if ($fib3 % 2 != 0) {
            $oddNumbers[] = $fib3;
            $summedOddNum = array_sum($oddNumbers);
        }
        //print $f3 . "<br>";
        $fib1 = $fib2;
        $fib2 = $fib3;
    }
    return $summedOddNum;
}

$result9 = fibonacci($start1, $start2);

$ANSWER = $result9;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.9", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 2.1 (3 points)
 *
 * In this exercises you should use the former functions `sumArray()` and
 * `calculateArea()`. Create a new function called `calculateMany()` that
 * takes an array with numbers as argument. For every number in the array,
 * call `calculateArea()` and store the result in a new array. The last
 * position in your new array should hold the result of a call to the function
 * `calculateArea()` where you pass the sum of the whole array, you passed as
 * argument. All numbers in the resulting array should be rounded up to
 * nearest integer. Loop through the array and convert all values to nearest
 * higher integer value.
 *
 * Tip: `intval()`.
 * Note: If your result seems correct but still fails, make sure your values
 * are of the type Integer and not Float.
 *
 * Answer with a call to `calculateMany()` with the array `43, 46, 30, 14,
 * 34`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = "Replace this text with the variable holding the answer.";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
