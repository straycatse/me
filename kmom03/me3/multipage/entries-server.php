<h1>$_SERVER innehåll</h1>
<p>$_SERVER innehåller <?PHP echo count($_SERVER); ?> antal rader</p>
<?php
$key = key($_SERVER);
$firstKey = $key;
?>
<p>Första värdet har nyckeln <?PHP echo $firstKey?> och innehållet <?PHP echo reset($_SERVER); ?></p>
<?php
end($_SERVER);
$key = key($_SERVER);
$lastKey = $key;
?>
<p>Sista värdet har nyckeln <?PHP echo $lastKey?> och innehållet <?PHP echo end($_SERVER)?></p>
