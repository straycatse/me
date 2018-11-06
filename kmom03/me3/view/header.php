<?php $uriFile = basename($_SERVER["PHP_SELF"]); ?>
<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
</head>

<body>
    <header class="site-header">
        <img src="img/logo.png" alt="logo" />
        <span class="site-title">Me-Sida</span>
        <span class="site-slogan">Min första fina me-sida är på gång</span>
    </header>

    <nav class="navbar">
        <a class="<?= basename($_SERVER['PHP_SELF']) == "me.php" ? "selected" : ""; ?>" href="me.php">Hem</a>
        <a class="<?= basename($_SERVER['PHP_SELF']) == "report.php" ? "selected" : ""; ?>" href="report.php">Redovisning</a>
        <a class="<?= basename($_SERVER['PHP_SELF']) == "multipage.php" ? "selected" : ""; ?>" href="multipage.php">Multipage (Array)</a>
        <a class="<?= basename($_SERVER['PHP_SELF']) == "about.php" ? "selected" : ""; ?>" href="about.php">Om</a>
    </nav>
    <main>
