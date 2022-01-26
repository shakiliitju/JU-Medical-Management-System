<?php
include_once 'db_conn.php';
$sql = "DELETE FROM medicine WHERE M_Code='" . $_GET["M_Code"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'medicine.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>