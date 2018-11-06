<?php
$title = $_POST["title"] ?? "FUSK!";
$_SESSION["flashmessage"] = $title;

$url = "?page=flash_post-result";
header("Location: $url");
