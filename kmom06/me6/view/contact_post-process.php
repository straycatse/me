<?php
$title = $_POST["title"] ?? "FUSK!";
$name = $_POST["name"] ?? "FUSK";
$message = $_POST["message"] ?? "FUSK";
$_SESSION["name"] = $name;
$_SESSION["message"] = $message;

$url = "?page=contact_post-result";
header("Location: $url");
