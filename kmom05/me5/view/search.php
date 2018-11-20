<?php
// Get incoming from search form
$search = isset($_GET['search'])
    ? $_GET['search']
    : null;

?><!doctype html>
<meta charset=utf8>
<link href="style.css" rel="stylesheet">

<article>

<form>
    <input type="search" name="search" placeholder="Enter substring to search for, use % as wildcard." value="<?=$search?>">
    <input type="submit" value="Search">
</form>


<?php
// Break script if empty $search
if (is_null($search)) {
    exit("<p>Nothing to display, please enter a searchstring.");
}

$db = connectToDatabase($dsnMe);

// Prepare the SQL statement
$sql = "SELECT * FROM Websites WHERE name LIKE ? OR site LIKE ? OR url LIKE ?";
$stmt = $db->prepare($sql);
echo "<p>Preparing the SQL-statement:<br><code>$sql</code><p>";

// Execute the SQL statement using parameters to replace the ?
$params = [$search, $search];
$stmt->execute($params);
echo "<p>Executing using parameters:<br><pre>" . htmlentities(print_r($params, true)) . "</pre>";

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<p>The result contains " . count($res) . " rows.</p>";

// Loop through the array and gather the data into table rows
$rows = null;
foreach ($res as $row) {
    $rows .= "<tr>";
    $rows .= "<td>{$row['id']}</td>";
    $rows .= "<td>{$row['name']}</td>";
    $rows .= "<td>{$row['site']}</td>";
    $rows .= "<a href='{$row['url']}'><td>{$row['url']}</td></a>";
    $rows .= "<td>{$row['date']}</td>";
    $rows .= "</tr>\n";
}

// Print out the result as a HTML table using PHP heredoc
echo <<<EOD
<table>
<tr>
    <th>Id</th>
    <th>Site name</th>
    <th>Description</th>
    <th>URL</th>
    <th>Date</th>
</tr>
$rows
</article>
</table>

<p><a href="?">Clear search results</a>.</p>
EOD;
