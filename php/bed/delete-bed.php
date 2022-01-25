
<?php
session_start();
include 'db_conn.php';

if (isset($_GET['P_ID'])) {

    $P_ID = validate($_GET['P_ID']);
    $sql = "DELETE FROM patient WHERE P_ID=$P_ID";
    mysqli_query($conn, $sql);
} else {
    header("location:patient.php");
}

?>
