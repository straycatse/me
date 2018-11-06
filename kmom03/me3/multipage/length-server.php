<?PHP
foreach ($_SERVER as $key => $value) {
    $keyLength[$key] = strlen($key);
    $valLength[$value] = strlen($value);
    echo $key . " " . strlen($value) . "<br>";
}

arsort($keyLength);
reset($keyLength);
$maxKey = key($keyLength);

arsort($valLength);
reset($valLength);
$maxVal = key($valLength);

echo '<p>Den längsta key som finns är ' . '"' . $maxKey . '".</p>' ;
echo '<p>Det längsta värdet som finns är ' . '"' . $maxVal . '".</p>' ;
