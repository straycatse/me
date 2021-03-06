<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <header class="site-header">
        <!-- <a href="home.php"><div class="logo-div">
            <img src="img/logo.png" alt="logo" /><br>
            <span class="site-slogan">Begravningsmuseum online</span>
        </div></a>
        <ul class="nav nav-tabs justify-content-end">
          <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == "home.php" ? "active" : ""; ?>" href="home.php">Hem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == "objects.php" ? "active" : ""; ?>" href="objects.php">Objekt</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == "articles.php" ? "active" : ""; ?>" href="articles.php">Artiklar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == "about.php" ? "active" : ""; ?>" href="about.php">Om BMO</a>
          </li>
        </ul> -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
          <a class="navbar-brand" href="home.php"><img src="img/logo.png" alt="logo" width="75"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == "home.php" ? "active" : ""; ?>" href="home.php">Hem</a>
              <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == "objects.php" ? "active" : ""; ?>" href="objects.php">Objekt</a>
              <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == "articles.php" ? "active" : ""; ?>" href="articles.php">Artiklar</a>
              <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == "about.php" ? "active" : ""; ?>" href="about.php">Om BMO</a>
            </div>
          </div>
        </nav>
    </header>
    <!-- <main> -->
