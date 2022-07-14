

<?php
include 'db/db.php';

$query = "SELECT * FROM div_213_users_new WHERE user_id = " . $_GET['id'];

$result12 = mysqli_query($connection, $query);

if (!$result12) {
    die("DB query failed");
}

$row2 = mysqli_fetch_assoc($result12);

mysqli_close($connection);
?>