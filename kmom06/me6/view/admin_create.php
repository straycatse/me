<!doctype html>
<meta charset=utf8>
<link href="style.css" rel="stylesheet">

<form method="post" action="?page=admin_process">
    <fieldset>
        <legend>Lägg till hemsida</legend>
        <p><label>id<br><input type="number" name="id"></label></p>
        <p><label>name<br><input type="text" name="name"></label></p>
        <p><label>site<br><input type="text" name="site"></label></p>
        <p><label>url<br><input type="text" name="url"></label></p>
        <p><label>date<br><input type="text" name="date"></label></p>
        <p><input type="submit" name="add" value="Add"></p>
    </fieldset>
</form>


<?php
$db2 = connectToDatabase($dsn2);

// Prepare and execute the SQL statement
$sql = "SELECT * FROM Websites";
$stmt = $db2->prepare($sql);

echo "<p>Execute the SQL-statement:<br><code>$sql</code><p>";
$stmt->execute();



// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

printWebsitesResultsetToHTMLTable($res);

echo "<p><a href='?page=admin_init'>Rensa och initiera databasen</a>.</p>";
