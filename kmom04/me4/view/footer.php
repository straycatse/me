</main>
<?php
$numFiles   = count(get_included_files());
$memoryUsed = memory_get_peak_usage(true);
?>
<footer id="site-footer">
    <p>Specifikationer: <a href="https://www.w3.org/2009/cheatsheet/">Cheatsheet</a>
    <a href="https://www.w3.org/TR/html/">HTML specification</a>
    <a href="https://www.w3.org/TR/CSS/">CSS specification</a></p>
    <p>Validatorer: <a href="http://validator.w3.org/check/referer">HTML5</a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a></p>
    <p>Manualer: <a href="http://php.net">PHP</a>
    <p><?= loadTime() ?> Files included: <?= $numFiles ?>. Memory used: <?= $memoryUsed ?>.</p>
    <p>Stray Cat Communication © 2018</p>
</footer>

</body>
</html>
