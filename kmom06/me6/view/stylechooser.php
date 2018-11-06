<p>Här kan du byta stil på hemsidan med hjälp av ett POST-formulär!</p>

<p>Nuvarande stil = '<?=$key?>'.</p>

<form method="post" action="postform-process.php">
        <select name="style">
            <option value="default">Default style</option>
            <option value="second">Second style</option>
        </select>
    </label>

    <input type="submit" name="doIt" value="Välj">

</form>
