<!doctype html>
<meta charset=utf8>
<link href="style.css" rel="stylesheet">

<?php
$db = connectToDatabase($dsn);

// Prepare and execute the SQL statement
$sql = "SELECT * FROM jetty";
$stmt = $db->prepare($sql);

echo "<p>Execute the SQL-statement:<br><code>$sql</code><p>";
$stmt->execute();

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

printJettyResultsetToHTMLTable($res);
// // Loop through the array and gather the data into table rows
// $rows = null;
// foreach ($res as $row) {
//     $rows .= "<tr>";
//     $rows .= "<td>{$row['id']}</td>";
//     $rows .= "<td>{$row['boatType']}</td>";
//     $rows .= "<td>{$row['boatEngine']}</td>";
//     $rows .= "<td>{$row['boatLength']}</td>";
//     $rows .= "<td>{$row['boatWidth']}</td>";
//     $rows .= "<td>{$row['ownerName']}</td>";
//     $rows .= "</tr>\n";
// }
//
// // Print out the result as a HTML table using PHP heredoc
// echo <<<EOD
// <table>
// <tr>
//     <th>ID</th>
//     <th>boatType</th>
//     <th>boatEngine</th>
//     <th>boatLength</th>
//     <th>boatWidth</th>
//     <th>ownerName</th>
// </tr>
// $rows
// </table>
// EOD;
