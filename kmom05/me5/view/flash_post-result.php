<?php
$message = $_SESSION["flashmessage"] ?? null;
$_SESSION["flashmessage"] = null;


?><!doctype html>
<meta charset="utf-8">
<title>Says thank you</title>
<h1>Thank you!</h1>
<?php if ($message) : ?>
<div>
<p><?= $message ?>
</div>
<?php endif; ?>
