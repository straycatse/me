<?php
// Include the configuration file
require __DIR__ . "/config.php";
// Include essential functions
require __DIR__ . "/src/functions.php";

// Check if style is changed and then set it
$style = isset($_POST['style'])
    ? $_POST['style']
    : null;

if ($style !== null) {
    $_SESSION['stylesheet'] = $style;
}



// To debug a processingpage, before it does its redirect
//var_dump($_SESSION);
//die();



// Redirect to the resultpage
header("Location: session.php?page=stylechooser");
