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
