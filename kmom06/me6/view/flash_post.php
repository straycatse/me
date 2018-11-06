<?php
/**
 * A post form submitting to a processing page.
 */
?><!doctype html>
<meta charset="utf-8">
<title>POST form to processing page</title>
<form method="post" action="?page=flash_post-process">
    <fieldset>
        <label>Vad vill du skicka för flashmeddelande?</label>
        <p>
            <label for="title">Meddelande:</label>
            <input id="title" type="text" name="title" value="<?= htmlentities($_POST["title"] ?? null) ?>">
        </p>
        <p>
            <input type="submit" name="create" value="Skicka">
            <input type="reset" value="Återställ">
        </p>
    </fieldset>
</form>
