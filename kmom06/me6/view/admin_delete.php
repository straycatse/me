<?php
// Check if script was accessed using specific position
// as in ?position=2
$id = isset($_GET['id'])
    ? $_GET['id']
    : null;

if ($id) {
    echo <<<EOD
<form method="post" action="?page=admin_delete_process">
    <fieldset>
        <legend>Ta bort rad</legend>
        <p><label>id<br><input type="number" name="id" value="$id" readonly></label></p>
        <p><input type="submit" name="delete" value="Ta bort"></p>
    </fieldset>
</form>
EOD;
} else {
    echo "<p><strong>Välj en rad att ta bort.</strong></p>";
}

// Check whats in the database
$sql = "SELECT * FROM Websites";
$stmt = $db->prepare($sql);

echo "<p>Execute the SQL-statement:<br><code>$sql</code><p>";
$stmt->execute();

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<p>The result contains " . count($res) . " rows.</p>";

// Loop through the array and gather the data into table rows
// Loop through the array and gather the data into table rows
$rows = null;
foreach ($res as $row) {
    $id = htmlentities($row['id']);
    $rows .= "<tr>";
    $rows .= "<td><a href='?page=admin_delete&id=$id'>$id</a></td>";
    $rows .= "<td>" . htmlentities($row['name']) . "</td>";
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
    <th>name</th>
    <th>site</th>
    <th>url</th>
    <th>date</th>
</tr>
$rows
</table>

<p><a href='?page=admin_init'>Rensa och initiera databasen</a>.</p>
EOD;
