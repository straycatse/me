<h1>Denna databas innehåller hemsidor som jag sköter</h2>

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
