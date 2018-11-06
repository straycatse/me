<?php
$db = connectToDatabase($dsn);

// Prepare and execute the SQL statement
$stmt = $db->prepare("SELECT * FROM Article");
$stmt->execute();

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

$rows = null;
foreach ($res as $row) {
    $titles[] = $row['title'];
    $contents[] = $row['content'];
    // $rows .= "<tr>";
    // $rows .= "<td>{$row['id']}</td>";
    // $rows .= "<td>{$row['category']}</td>";
    // $rows .= "<td>{$row['title']}</td>";
    // $rows .= "<td>{$row['content']}</td>";
    // $rows .= "</tr>\n";
}

echo "<h1>" . $titles[3] . "</h1>";
print_r($contents[3]);
// Print out the result as a HTML table using PHP heredoc
// echo <<<EOD
// <table>
// <tr>
//     <th>id</th>
//     <th>category</th>
//     <th>title</th>
//     <th>content</th>
// </tr>
// $rows
// </table>
// EOD;
