<?php
// Include the configuration file
require __DIR__ . "/config.php";
// Include essential functions
require __DIR__ . "/src/functions.php";
// Set common variables, these are exposed to the view template files

// Include the page header through the view template file

//$subpage = __DIR__ . "/view/$page.php";

$page = $_GET["page"] ?? "kmom01";
$pages = [
    "kmom01" => [
        "title" => "Kmom01",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "kmom02" => [
        "title" => "Kmom02",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "kmom03" => [
        "title" => "Kmom03",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "kmom04" => [
        "title" => "Kmom04",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "kmom05" => [
        "title" => "Kmom05",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "kmom06" => [
        "title" => "Kmom06",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "kmom10" => [
        "title" => "Kmom10",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
];

$validPage = $pages[$page] ?? null;
if (!$validPage) {
    die("Nej. Ut.");
}

$title = "{$validPage["title"]} redovisning" . $baseTitle;
$subpage = $validPage["subpage"];
require __DIR__ . "/view/header.php";
require __DIR__ . "/view/report_multi.php";
require __DIR__ . "/view/footer.php";
