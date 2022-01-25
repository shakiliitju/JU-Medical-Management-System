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
                <h2>Manage <b>Ambulence</b></h2>
            </div>
            <div style="margin-left: 85%; margin-top: 3%;">
                <button><a href="/php/Ambulence/add-ambulence.php">Add Ambulence</a></button>
            </div>
        </div>
    </div>
    </div>

    <div class="card-body">
        <div style="margin-left: 20%; margin-top: 1%;">
            <table id="dataTable" width="90%" cellspacing="10">
                <thead>
                    <tr>
                        <th>Amb_ID</th>
                        <th>Amb_Status</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'db_conn.php';
                    $Amb_ID = 0;
                    $sql = " SELECT * FROM ambulence ";
                    $query = mysqli_query($conn, $sql);
                    while ($Patient_data = mysqli_fetch_array($query)) {
                        $Amb_ID = $Amb_ID + 1;

                    ?>
                        <tr>
                            <td><b><?php echo $Amb_ID  ?></b></td>
                            <td><?php echo $Patient_data['Amb_Status'];  ?></td>
                            <td style="width: 140px;">
                                <button> <a href="update-data.php?ID=<?php echo $Patient_data['Amb_ID'];  ?>" class="btn btn-success"><b>Update</b></a></button>
                                <button><a href="delete-patient.php?php echo $Patient_data['Amb_ID']; ?>" class="btn btn-danger"><b>Delete</b></a></button>


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