<?php
// Check if form posted and get incoming
if (isset($_POST['save'])) {
    // Store posted form in parameter array
    $id   = $_POST['id'];
    $name   = $_POST['name'];
    $site = $_POST['site'];
    $url= $_POST['url'];
    $date  = $_POST['date'];

    $params = [$name, $site, $url, $date, $id];

    // Prepare SQL statement to UPDATE a row in the table
    $sql = <<<EOD
UPDATE Websites
    SET
        name = ?,
        site = ?,
        url = ?,
        date = ?
    WHERE
        id = ?
EOD;
    $stmt = $db->prepare($sql);

    // Execute the SQL to INSERT within a try-catch to catch any errors.
    try {
        $stmt->execute($params);
    } catch (PDOException $e) {
        echo "<p>Failed to update the row, dumping details for debug.</p>";
        echo "<p>Incoming \$_POST:<pre>" . print_r($_POST, true) . "</pre>";
        echo "<p>The error code: " . $stmt->errorCode();
        echo "<p>The error message:<pre>" . print_r($stmt->errorInfo(), true) . "</pre>";
        throw $e;
    }

    // Print out the successful results
    echo "<p>Uppdaterade rad:<br></p><pre>" . print_r($params, true) . "</pre>";
    echo "<p><a href='?page=admin_update'>Uppdatera en annan rad</a>.</p>";
    exit();
}
