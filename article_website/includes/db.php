<?php
$host = 'localhost';
$db = 'company_article_dashboard';
$user = 'root';
$pass = '';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
