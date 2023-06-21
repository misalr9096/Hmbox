<?php
require('./database.php');

$id = $_GET['id'];

$query = " DELETE FROM user_registration WHERE id= '$id' ";
$data = mysqli_query($conn, $query);

if ($data) {
    echo "<script>alert('Record Deleted')</script>";


?>
    <meta http-equiv="refresh" content="0; url = http://hmbox2023.great-site.net/AdminDashboard.php" />

<?php

} else {
    echo "<script>alert('Failed to Delete')</script>";
}

?>