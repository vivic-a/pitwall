<?php
/**
 * config.php
 * Starts the session and opens the database connection (PDO).
 * Update the constants below to match your local MySQL setup
 * (e.g. XAMPP/WAMP default is host=localhost, user=root, pass="").
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('DB_HOST', 'localhost');
define('DB_NAME', 'pitwall_db');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
} catch (PDOException $e) {
    // In production you would log this instead of printing it.
    die('Database connection failed. Make sure MySQL is running and that '
        . 'you have imported database/schema.sql. (' . $e->getMessage() . ')');
}
