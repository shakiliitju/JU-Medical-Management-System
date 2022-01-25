

<?php

include 'db_conn.php';

// $D_ID = $_GET['D_ID'];
// $sql = " DELETE FROM doctor WHERE D_ID = $D_ID " ;
// mysqli_query($conn,$sql);

// header("location:doctor.php");

if(isset($_GET['D_ID'])){
    $id = $_GET['D_ID'];

    $sql = "delete from 'doctor' where id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Deleted successfull";
        header("location:doctor.php");
    }else{
        die(mysqli_error($conn));
    }
}
?>
