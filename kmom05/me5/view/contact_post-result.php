<?php
$name = $_SESSION["name"] ?? null;
$message = $_SESSION["message"] ?? null;
$_SESSION["name"] = null;
$_SESSION["message"] = null;


?><!doctype html>
<meta charset="utf-8">
<title>Says thank you</title>
<h1>Tack <?php echo $name ?>!</h1>
<?php if ($message) : ?>
<div>
<p>Ditt meddelande: <q><?= $message ?></q>
</div>
<?php endif; ?>
