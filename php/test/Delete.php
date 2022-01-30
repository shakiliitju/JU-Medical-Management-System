<?php
include_once 'db_conn.php';
$sql = "DELETE FROM test WHERE T_ID='" . $_GET["T_ID"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'test.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>