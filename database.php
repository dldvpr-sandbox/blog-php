<?php
$dns = getenv('DB_DSN');
$user = getenv('DB_USER');
$pwd = getenv('DB_PWD');

try {
    $pdo = new PDO($dns, $user, $pwd, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

return $pdo;