<?php
/**
 * Definitions of commonly used functions.
 */
function loadTime()
{
    $timestampFirst = $_SERVER["REQUEST_TIME_FLOAT"];
    $timestampLast = microtime(true);
    $diff = $timestampLast - $timestampFirst;
    return "Loadtime: " . round($diff*1000, 3) . "ms.";
}

/**
 * Destroy a session, the session must be started.
 *
 * @return void
 */
function sessionDestroy()
{
    // Unset all of the session variables.
    $_SESSION = [];

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();
}

function connectToDatabase($dsn)
{
    // Enable verbose output of error (or include from config.php)
    error_reporting(-1);              // Report all type of errors
    ini_set("display_errors", 1);     // Display all errors

    // Open the database file and catch the exception if it fails.
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Failed to connect to the database using DSN:<br>$dsn<br>";
        throw $e;
    }

    return $db;
}


function printJettyResultsetToHTMLTable($res)
{
    echo "<p>The result contains " . count($res) . " rows.</p>";

    // Loop through the array and gather the data into table rows
    $rows = null;
    foreach ($res as $row) {
        $rows .= "<tr>";
        $rows .= "<td>{$row['id']}</td>";
        $rows .= "<td>{$row['boatType']}</td>";
        $rows .= "<td>{$row['boatEngine']}</td>";
        $rows .= "<td>{$row['boatLength']}</td>";
        $rows .= "<td>{$row['boatWidth']}</td>";
        $rows .= "<td>{$row['ownerName']}</td>";
        $rows .= "</tr>\n";
    }

    // Print out the result as a HTML table using PHP heredoc
    echo "
    <table>
    <tr>
        <th>ID</th>
        <th>boatType</th>
        <th>boatEngine</th>
        <th>boatLength</th>
        <th>boatWidth</th>
        <th>ownerName</th>
    </tr>
    $rows
    </table>
    ";
}
