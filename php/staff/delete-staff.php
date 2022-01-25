

<?php

include 'db_conn.php';

// $D_ID = $_GET['D_ID'];
// $sql = " DELETE FROM doctor WHERE D_ID = $D_ID " ;
// mysqli_query($conn,$sql);

// header("location:doctor.php");

if(isset($_GET['S_ID'])){
    $id = $_GET['S_ID'];

    $sql = "delete from 'staff' where id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Deleted successfull";
        header("location:staff.php");
    }else{
        die(mysqli_error($conn));
    }
}

?>
