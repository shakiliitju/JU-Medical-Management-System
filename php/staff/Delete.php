<?php
include_once 'db_conn.php';
$sql = "DELETE FROM staff WHERE S_ID='" . $_GET["S_ID"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'staff.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>