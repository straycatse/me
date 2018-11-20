<?php
// Check if form posted and get incoming
if (isset($_POST['delete'])) {
    // Store posted form in parameter array
    $id  = $_POST['id'];

    $params = [$id];

    // Prepare SQL statement to DELETE a row in the table
    $sql = <<<EOD
DELETE FROM Websites
    WHERE
        id = ?
EOD;
    $stmt = $db->prepare($sql);

    // Execute the SQL to INSERT within a try-catch to catch any errors.
    try {
        $stmt->execute($params);
    } catch (PDOException $e) {
        echo "<p>Failed to delete the row, dumping details for debug.</p>";
        echo "<p>Incoming \$_POST:<pre>" . print_r($_POST, true) . "</pre>";
        echo "<p>The error code: " . $stmt->errorCode();
        echo "<p>The error message:<pre>" . print_r($stmt->errorInfo(), true) . "</pre>";
        throw $e;
    }

    // Print out the successful results
    echo "<p>Raderade raden:<br></p><pre>" . print_r($params, true) . "</pre>";
    echo "<p><a href='?page=admin_delete'>Radera en annan rad?</a>.</p>";
    exit();
}
