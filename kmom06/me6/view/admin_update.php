<?php
// Check if script was accessed using specific position
// as in update?position=2
$id = isset($_GET['id'])
    ? $_GET['id']
    : null;

$name = null;
$site = null;
$url = null;
$date = null;

if ($id) {
    // Get details on the boat using specified position
    $sql = "SELECT * FROM Websites WHERE id = ?";
    $stmt = $db->prepare($sql);
    $params = [$id];
    $stmt->execute($params);

    // Get the results as an array with column names as array keys
    $res = $stmt->fetchAll(PDO::FETCH_BOTH);

    if (empty($res)) {
        die("No such position.");
    }

    // Move content of array to individual variables, for ease of use.
    list($id, $name, $site, $url, $date) = $res[0];
}

?>

<form method="post" action="?page=admin_update_process">
    <fieldset>
        <legend>Uppdatera befintlig rad</legend>
        <p><label>id<br><input type="number" name="id" value="<?=$id?>" readonly></label></p>
        <p><label>name<br><input type="text" name="name" value="<?=$name?>"></label></p>
        <p><label>site<br><input type="text" name="site" value="<?=$site?>"></label></p>
        <p><label>url<br><input type="text" name="url" value="<?=$url?>"></label></p>
        <p><label>date<br><input type="date" name="date" value="<?=$date?>"></label></p>
        <p><input type="submit" name="save" value="Spara"></p>
    </fieldset>
</form>


<?php
// Check whats in the database
$sql = "SELECT * FROM Websites";
$stmt = $db->prepare($sql);

echo "<p>Execute the SQL-statement:<br><code>$sql</code><p>";
$stmt->execute();

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<p>The result contains " . count($res) . " rows.</p>";

// Loop through the array and gather the data into table rows
$rows = null;
foreach ($res as $row) {
    $id = htmlentities($row['id']);
    $rows .= "<tr>";
    $rows .= "<td><a href='?page=admin_update&id=$id'>$id</a></td>";
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
