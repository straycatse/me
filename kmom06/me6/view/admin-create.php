<!doctype html>
<meta charset=utf8>
<link href="style.css" rel="stylesheet">

<form method="post" action="insert-process.php">
    <fieldset>
        <legend>Lägg till hemsida</legend>
        <p><label>id<br><input type="number" name="id"></label></p>
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
echo "<p>The result contains " . count($res) . " rows.</p>";



// Loop through the array and gather the data into table rows
$rows = null;
foreach ($res as $row) {
    $rows .= "<tr>";
    $rows .= "<td>" . htmlentities($row['id']) . "</td>";
    $rows .= "<td>" . htmlentities($row['site']) . "</td>";
    $rows .= "<td>" . htmlentities($row['url']) . "</td>";
    $rows .= "<td>" . htmlentities($row['date']) . "</td>";
    $rows .= "</tr>\n";
}



// Print out the result as a HTML table using PHP heredoc
echo <<<EOD
<table>
<tr>
    <th>id</th>
    <th>site</th>
    <th>url</th>
    <th>date</th>
</tr>
$rows
</table>

<p><a href="init.php">Clear and re-init the database</a>.</p>
EOD;
