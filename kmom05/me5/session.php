<?php
// Include the configuration file
require __DIR__ . "/config.php";
// Include essential functions
require __DIR__ . "/src/functions.php";
// Set common variables, these are exposed to the view template files

// Include the page header through the view template file

//$subpage = __DIR__ . "/view/$page.php";

$page = $_GET["page"] ?? "write_session";
$pages = [
    "write_session" => [
        "title" => "Info om session",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "destroy_session" => [
        "title" => "Förstör session",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "number_session" => [
        "title" => "Ökar med värdet 1",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "flash_post" => [
        "title" => "Flashmeddelande",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "flash_post-process" => [
        "title" => "Flashmeddelande",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "flash_post-result" => [
        "title" => "Flashmeddelande",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "contact_post" => [
        "title" => "Kontakt",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "contact_post-process" => [
        "title" => "Kontakt",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "contact_post-result" => [
        "title" => "Kontakt",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "stylechooser" => [
        "title" => "Stylechooser",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
];

$validPage = $pages[$page] ?? null;
if (!$validPage) {
    die("Nej. Ut.");
}

$title = "{$validPage["title"]}" . $baseTitle;
$subpage = $validPage["subpage"];
require __DIR__ . "/view/header.php";
require __DIR__ . "/view/session_multi.php";
require __DIR__ . "/view/footer.php";
