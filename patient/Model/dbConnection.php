<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$hostname = "db-mysql-sgp1-99715-do-user-14558665-0.b.db.ondigitalocean.com";
$port = "25060";
$dbname = "defaultdb";
$username = "doadmin";
$password = "AVNS_iwuZuKd3mf5KxnmLF_R";

try {
    $pdo = new PDO(
        "mysql:host=$hostname;port=$port;dbname=$dbname",
        $username,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Your database operations here

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
