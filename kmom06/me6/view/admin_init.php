<?php
// Prepare the SQL statement to drop the table
echo "<p>Detta kommer att tömma databasen<p>";
$sql = <<<EOD
DROP TABLE IF EXISTS "Websites";
EOD;
$stmt = $db->prepare($sql);
$stmt->execute();

// Prepare the SQL statement to create the table
echo "<p>Återskapar databasen<p>";
$sql = <<<EOD
CREATE TABLE `Websites` (
    `id`  INTEGER,
    `name`  TEXT,
    `site`    TEXT,
    `url`    TEXT,
    `date` TEXT,
    PRIMARY KEY(`id`)
);
EOD;
$stmt = $db->prepare($sql);
$stmt->execute();

// Prepare SQL statement to INSERT new rows into table
echo "<p>Sätter in rader<p>";
$sql = <<<EOD
INSERT INTO "Websites" VALUES(?, ?, ?, ?, ?);
EOD;
$stmt = $db->prepare($sql);

// Insert each row
echo "<p>Sätter in värdena i raderna</p>";
$params = [1,'Me-sida','En personlig Me-sida','http://www.student.bth.se/~siso18/dbwebb-kurser/htmlphp/me/kmom05/me5/me.php','2016-02-03'];
$stmt->execute($params);

$params = [2,'simonsolberg','Min personliga sida','http://simonsolberg.se','2017-01-03'];
$stmt->execute($params);

$params = [3,'Stray Cat','Mitt företag','https://straycat.nu','2018-11-20'];
$stmt->execute($params);

// Check whats in the database
$sql = "SELECT * FROM Websites";
$stmt = $db->prepare($sql);

echo "<p>Execute the SQL-statement:<br><code>$sql</code><p>";
$stmt->execute();

// Get the results as an array with column names as array keys
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
printWebsitesResultsetToHTMLTable($res);
