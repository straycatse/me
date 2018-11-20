<?php
// Include the configuration file
require __DIR__ . "/config.php";
// Include essential functions
require __DIR__ . "/src/functions.php";
// Set common variables, these are exposed to the view template files

// Include the page header through the view template file

$db = connectToDatabase($dsn2);

//$subpage = __DIR__ . "/view/$page.php";

$page = $_GET["page"] ?? "write_admin";
$pages = [
    "write_admin" => [
        "title" => "Info om session",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "admin_create" => [
        "title" => "Lägg till",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "admin_process" => [
        "title" => "Processar ny rad",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "admin_update" => [
        "title" => "Uppdatera en rad",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "admin_update_process" => [
        "title" => "Processar uppdateringen av en rad",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "admin_delete" => [
        "title" => "Radera en rad",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "admin_delete_process" => [
        "title" => "Processerar raderingen av en rad",
        "subpage" => __DIR__ . "/view/$page.php"
    ],
    "admin_init" => [
        "title" => "Töm och återinitiera databasen",
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
require __DIR__ . "/view/admin_multi.php";
require __DIR__ . "/view/footer.php";
