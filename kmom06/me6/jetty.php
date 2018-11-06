<?php
/**
 * This is a page controller for a multipage. You should name this file
 * as the name of the pagecontroller for this multipage. You should then
 * add a directory with the same name, excluding the file suffix of ".php".
 * You then then have several multipages within the same directory, like this.
 *
 * multipage.php
 * multipage/
 *
 * some-test-page.php
 * some-test-page/
 */
 // Include the configuration file
 require __DIR__ . "/config.php";

 // Include essential functions
 require __DIR__ . "/src/functions.php";

// Get what subpage to show, defaults to index
$pageReference = $_GET["page"] ?? "index";

// Get the filename of this multipage, exkluding the file suffix of .php
$base = basename(__FILE__, ".php");

// Create the collection of valid sub pages.
$pages = [
    "index" => [
        "title" => "Intro för multisidan",
        "file" => __DIR__ . "/$base/index.php",
    ],
    "connect" => [
        "title" => "Kopplar mot databasen Jetty.",
        "file" => __DIR__ . "/$base/connect.php",
    ],
    "select-table" => [
        "title" => "Skriver ut innehållet i databasen.",
        "file" => __DIR__ . "/$base/select-table.php",
    ],
    "select-form" => [
        "title" => "Söker i databasens innehåll.",
        "file" => __DIR__ . "/$base/select-form.php",
    ],
    "details" => [
        "title" => "Visar innehållsdetaljer",
        "file" => __DIR__ . "/$base/details.php",
    ],
    "details?jettyPosition=1" => [
        "title" => "Search table contents details.",
        "file" => __DIR__ . "/$base/details.php",
    ],
];

// Get the current page from the $pages collection, if it matches
$page = $pages[$pageReference] ?? null;

// Base title for all pages and add title from selected multipage
$title = $page["title"] ?? "404";
$title .= " | Test multipage";

// Render the page
require __DIR__ . "/view/header.php";
require __DIR__ . "/view/jetty.php";
require __DIR__ . "/view/footer.php";
