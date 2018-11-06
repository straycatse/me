<?php

// Valid stylesheets and valid values to store in the session
$stylesheets = [
    "default" => "css/style.css",
    "second" => "css/second.css",
];

// Get current stylesheet from the session, or use default
$key = isset($_SESSION['stylesheet'])
    ? $_SESSION['stylesheet']
    : "default";

// See if the key actually matches a stylesheet
if (isset($stylesheets[$key])) {
    $stylesheet = $stylesheets[$key];
} else {
    $safekey = htmlentities($key);
    die("The value of key='$safekey' does not match a valid stylesheet.");
}

?>
<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?=$stylesheet?>">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
</head>

<body>
    <header class="site-header">
        <img src="img/logo.png" alt="logo" />
        <span class="site-title">Me-Sida</span>
        <span class="site-slogan">Min första fina me-sida är på gång</span>
        <form class="site-chooser" method="post" action="postform-process.php">
                <select name="style">
                    <option value="default">Default style</option>
                    <option value="second">Second style</option>
                </select>
            </label>
            <input type="submit" name="doIt" value="Välj">

        </form>

    </header>

    <nav class="navbar">
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "me.php" ? "selected" : ""; ?>" href="me.php">Hem</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "report.php" ? "selected" : ""; ?>" href="report.php">Redovisning</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "multipage.php" ? "selected" : ""; ?>" href="multipage.php">Redovisning (Multi)</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "session.php" ? "selected" : ""; ?>" href="session.php">Session</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "about.php" ? "selected" : ""; ?>" href="about.php">Om</a>
    </nav>
    <main>
