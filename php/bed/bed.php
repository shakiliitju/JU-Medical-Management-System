<!DOCTYPE html>
<html lang="en">

<head>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

</head>

<body>

    <div class="container">

        <div class="row">
            <div style="margin-left: 50%; margin-top: 5%;">
                <h2>Manage <b>Bed</b></h2>
            </div>
            <div style="margin-left: 85%; margin-top: 3%;">
                <button><a href="/php/bed/add-bed.php">Add Bed</a></button>
            </div>
        </div>
    </div>
    </div>

    <div class="card-body">
        <div style="margin-left: 20%; margin-top: 1%;">
            <table id="dataTable" width="90%" cellspacing="10">
                <thead>
                    <tr>
                        <th>Bed_Num</th>
                        <th>Bed_Status</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'db_conn.php';
                    $Bed_Num = 0;
                    $sql = " SELECT * FROM bed ";
                    $query = mysqli_query($conn, $sql);
                    while ($Patient_data = mysqli_fetch_array($query)) {
                        $Bed_Num = $Bed_Num + 1;

                    ?>
                        <tr>
                            <td><b><?php echo $Bed_Num  ?></b></td>
                            <td><?php echo $Patient_data['Bed_Status'];  ?></td>
                            <td style="width: 140px;">
                                <button> <a href="update-data.php?ID=<?php echo $Patient_data['Bed_Num'];  ?>" class="btn btn-success"><b>Update</b></a></button>
                                <button><a href="delete-bed.php?php echo $Patient_data['Bed_Num']; ?>" class="btn btn-danger"><b>Delete</b></a></button>


                            </td>
                        </tr>
                    <?php

                    }

                    ?>

                </tbody>
            </table>
        </div>


    </div>
    </div>


</body>

</html>