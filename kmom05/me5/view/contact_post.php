<?php
/**
 * A post form submitting to a processing page.
 */
?><!doctype html>
<meta charset="utf-8">
<title>POST form to processing page</title>
<form id="contact" method="post" action="?page=contact_post-process">
    <fieldset>
        <label>Kontakta Simon</label>
        <p>
            <label for="name">Namn</label>
            <input id="name" type="text" name="name" value="<?= htmlentities($_POST["name"] ?? null) ?>">
        </p>
        <p>
            <label for="email">Epost</label>
            <input id="email" type="email" name="email" value="<?= htmlentities($_POST["email"] ?? null) ?>">
        </p>
        <p>
            <label for="message">Meddelande</label>
            <!-- <input id="message" type="textarea" name="message" value="<?= htmlentities($_POST["message"] ?? null) ?>"> -->
            <textarea id="message" form="contact" type="textarea" name="message" value="<?= htmlentities($_POST["message"] ?? null) ?>"></textarea>
        </p>
        <p>
            <input type="submit" name="create" value="Skicka">
            <input type="reset" value="Återställ">
        </p>
    </fieldset>
</form>
