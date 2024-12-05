<?php include 'includes/db.php'; ?>

<?php
$id = $_GET['id'];
$query = "DELETE FROM article WHERE id = $id";

if (mysqli_query($conn, $query)) {
    header('Location: index.php');
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
