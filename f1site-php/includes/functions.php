<?php
/**
 * functions.php
 * Small shared helpers used across pages. Keeping these in one file
 * avoids repeating the same logic (escaping, auth checks, flashes) on
 * every page.
 */

/** Escape a value for safe HTML output. */
function h(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

/** Is a user currently logged in? */
function is_logged_in(): bool
{
    return isset($_SESSION['user_id']);
}

/** Redirect to another page in this app and stop execution. */
function redirect(string $path): void
{
    header('Location: ' . $path);
    exit;
}

/**
 * Store a one-time "flash" message in the session so it can be
 * displayed on the next page load (e.g. after a redirect).
 */
function set_flash(string $type, string $message): void
{
    $_SESSION['flash'] = ['type' => $type, 'message' => $message];
}

/** Retrieve and clear the flash message, if any. */
function get_flash(): ?array
{
    if (!empty($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}
