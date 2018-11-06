<?php

/**
 * @preserve ce8f2fa5e3d5677f4b4fa4a8b9546125
 *
 * ce8f2fa5e3d5677f4b4fa4a8b9546125
 * htmlphp
 * lab3
 * v2
 * siso18
 * 2018-09-27 19:41:57
 * v3.1.3 (2018-09-13)
 *
 * Generated 2018-09-27 21:41:58 by dbwebb lab-utility v3.1.3 (2018-09-13).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();



/** ===================================================================
 * Lab 3 - Htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP Manual](http://php.net/manual/en/langref.php).
 *
 * There you will find everything this lab will go through and much more.
 *
 */



/** -------------------------------------------------------------------
 * Section 1 . Arrays - with numeric index
 *
 *
 *
 */



/**
 * Exercise 1.1 (1 points)
 *
 * Create an array, called `countries` with the items: `[United Kingdom,
 * Bahamas, Ukraine]`.
 *
 * Answer with the second item in the array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */


$countries = ["United Kingdom", "Bahamas", "Ukraine"];

$ANSWER = $countries[1];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a new array called `capitals` with the items: `[London, Nassau,
 * Kiev]`.
 *
 * Answer with a string containing each country from the `countries`-array
 * followed by the corresponding capital. Use the format `"country = capital,
 * country = capital..."`
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$capitals = ["London", "Nassau", "Kiev"];
$result = $countries[0] . " = " . $capitals[0] . ", ";
$result .= $countries[1] . " = " . $capitals[1] . ", ";
$result .= $countries[2] . " = " . $capitals[2];

$ANSWER = $result;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create an array, called `numbers1` with the items: `[285, 11, 9.75, 9,
 * 2216]`. Answer with the sum of the first two items.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers1 = [285, 11, 9.75, 9, 2216];
$result2 =  $numbers1[0] + $numbers1[1];

$ANSWER = $result2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Use your arrays `numbers1` and `capitals` to change item at index 4 in
 * `numbers1` to the item at index 2 in `capitals`. Answer with the array
 * `numbers1`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers1[4] = $capitals[2];

$ANSWER = $numbers1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Use your array `countries` and concatenate the first and the last item as a
 * string. Separate the items with a hyphen `-` and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$result3 = $countries[0] . "-" . $countries[2];

$ANSWER = $result3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Arrays - with keys
 *
 *
 *
 */



/**
 * Exercise 2.1 (1 points)
 *
 * Use your `countries` and `capitals` arrays and create another array called
 * `keyArray`. The country should be the key and the capital should be the
 * value. Answer with the new array. (hint: `"country" => "capital"`)
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$keyArray[$countries[0]] = $capitals[0];
$keyArray[$countries[1]] = $capitals[1];
$keyArray[$countries[2]] = $capitals[2];

$ANSWER = $keyArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (1 points)
 *
 * Add the key `"India"` with the value `"New Delhi"` to your `keyArray`.
 * Answer with the updated array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$keyArray["India"] = "New Delhi";

$ANSWER = $keyArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);

/**
 * Exercise 2.3 (1 points)
 *
 * Answer with the value for the key `"Ukraine"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$result4 = $keyArray["Ukraine"];

$ANSWER = $result4;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 3 . Arrays - built-in functions
 *
 *
 *
 */



/**
 * Exercise 3.1 (1 points)
 *
 * Find the number of items in the array `[324, 36, 20.02, 8, 4998]`. Answer
 * with the result as an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers2 = [324, 36, 20.02, 8, 4998];

$result5 = count($numbers2);

$ANSWER = $result5;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.1", $ANSWER, false);

/**
 * Exercise 3.2 (1 points)
 *
 * Sort the array `[324, 36, 20.02, 8, 4998]` in decending order. Make sure
 * that it does maintain the key association. Answer with the sorted array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

//$numbers2 = krsort($numbers2);
arsort($numbers2);

$ANSWER = $numbers2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.2", $ANSWER, false);

/**
 * Exercise 3.3 (1 points)
 *
 * Use `pop()` on the array `[324, 36, 20.02, 8, 4998]` and answer with the
 * popped item.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$numbers3 = [324, 36, 20.02, 8, 4998];

$result6 = array_pop($numbers3);

$ANSWER = $result6;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.3", $ANSWER, false);

/**
 * Exercise 3.4 (1 points)
 *
 * Use `push()` on the array `[285, 11, 9.75, 9, 2216]` and insert the number
 * 55.89. Answer with the resulting array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$numbers4 = [285, 11, 9.75, 9, 2216];

array_push($numbers4, 55.89);

$ANSWER = $numbers4;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.4", $ANSWER, false);

/**
 * Exercise 3.5 (1 points)
 *
 * Copy your array `countries` to a new array called `newArray`. Use `shift()`
 * on the new array and answer with the shifted item.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$newArray = $countries;

$result7 = array_shift($newArray);

$ANSWER = $result7;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.5", $ANSWER, false);

/**
 * Exercise 3.6 (1 points)
 *
 * Use `unshift()` on your `newArray` add the items `"Montana"` and `"Oregon"`
 * in the beginning of the array. Answer with the modified array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

array_unshift($newArray, "Oregon");
array_unshift($newArray, "Montana");

$ANSWER = $newArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.6", $ANSWER, false);

/**
 * Exercise 3.7 (1 points)
 *
 * Reverse the order of the array `[324, 36, 20.02, 8, 4998]`. Answer with the
 * modified array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers5 = [324, 36, 20.02, 8, 4998];

$numbers5 = array_reverse($numbers5);

$ANSWER = $numbers5;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.7", $ANSWER, false);

/**
 * Exercise 3.8 (1 points)
 *
 * Use `implode()` on your `capital`-array and answer with a string where each
 * item is separated by a hyphen `-`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$capitalsAsString = implode("-", $capitals);


$ANSWER = $capitalsAsString;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.8", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 4 . Arrays - for-each loop
 *
 *
 *
 */



/**
 * Exercise 4.1 (1 points)
 *
 * Create an array, called `numbers1` with the items: `[10, 3, 45, 98, 4, 7,
 * 56, 23, 3, 1]`. Use a for-each loop to sum each item with 13 and put them
 * in a new array called `summedNumbers1`. Answer with the new array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers1 = [10, 3, 45, 98, 4, 7, 56, 23, 3, 1];

foreach ($numbers1 as $value) {
    $summedNumbers1[] = $value + 13;
}

$ANSWER = $summedNumbers1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.1", $ANSWER, false);

/**
 * Exercise 4.2 (1 points)
 *
 * Create a new array called `numbers2` with the items `[1, 6, 4, 67, 43, 2,
 * 89, 8, 55, 10]`. Use at least a for-each loop to add all numbers larger
 * than 20 to a new array called `largeNumbers`. Answer with the new array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers2 = [1, 6, 4, 67, 43, 2, 89, 8, 55, 10];

foreach ($numbers2 as $value) {
    if ($value > 20) {
        $largeNumbers[] = $value;
    } else {
    }
}

$ANSWER = $largeNumbers;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.2", $ANSWER, false);

/**
 * Exercise 4.3 (1 points)
 *
 * Create an array with the keys: `"one"`, `"two"`, `"three"`, `"four"` and
 * `"five"` and the values: 1, 2, 3, 4, 5. Use a foreach-loop to add all keys
 * and values to an array in the format: `["key"=value, "key"=value, etc]`.
 * Use `implode()` to make the answer a string with all items separated by a
 * comma `,`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$keyArray1["one"] = 1;
$keyArray1["two"] = 2;
$keyArray1["three"] = 3;
$keyArray1["four"] = 4;
$keyArray1["five"] = 5;

foreach ($keyArray1 as $key => $value) {
    $summedArray1[] = $key . "=" . $value;
}

$result8 = implode(",", $summedArray1);

$ANSWER = $result8;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 5 . Switch-case
 *
 * [PHP Manual about
 * switch](http://se1.php.net/manual/en/control-structures.switch.php)
 *
 */



/**
 * Exercise 5.1 (1 points)
 *
 * Create a switch-case statement to decide which continent a certain country
 * resides in. Use the countries: `"Sweden, Brazil, China, Australia, Canada"`
 * and the continents:
 *     `"Europe, South America, Asia, Oceania, North America"`.
 *
 * Answer with a test on the country: `"Australia"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$countries1["Sweden"] = [];
$countries1["Brazil"] = [];
$countries1["China"] = [];
$countries1["Australia"] = [];
$countries1["Canada"] = [];
//$continents1 = ["Europe", "South America", "Asia", "Oceania", "North America"];
foreach ($countries1 as $key => $value) {
    switch ($key) {
        case "Sweden":
            $value = "Europe";
            break;
        case "Brazil":
            $value = "South America";
            break;
        case "China":
            $value = "Asia";
            break;
        case "Australia":
            $value = "Oceania";
            break;
        case "Canada":
            $value = "North America";
            break;
    }
}

print_r($countries1);

$ANSWER = $countries1[3];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("5.1", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 6 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */



/**
 * Exercise 6.1 (3 points)
 *
 * A switch-case statement can handle multiple cases with the same result.
 * Create a new switch-case statement that decides which is the corresponding
 * continent. Use the countries: `"Sweden, Denmark, Finland, Brazil, China,
 * Australia, Canada"` and the continents: `"Europe, South America, Asia,
 * Oceania, North America"`.
 *
 * Answer with a test on the country: `"Sweden"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */






$ANSWER = "Replace this text with the variable holding the answer.";

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.1", $ANSWER, false);

/**
 * Exercise 6.2 (3 points)
 *
 * Sort the array `[285, 11, 9.75, 9, 2216]` in ascending order. Make sure
 * that it does not maintain the key association. Answer with the sorted
 * array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers6 = [285, 11, 9.75, 9, 2216];

sort($numbers6);

$ANSWER = $numbers6;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.2", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
