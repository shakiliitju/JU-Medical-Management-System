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
                <h2>Manage <b>Patient</b></h2>
            </div>
            <div style="margin-left: 85%; margin-top: 3%;">
                <button><a href="add-patient.php">Add Patient</a></button>
            </div>
        </div>
    </div>
    </div>

    <div class="card-body">
        <div style="margin-left: 20%; margin-top: 1%;">
            <table id="dataTable" width="90%" cellspacing="10">
                <thead>
                    <tr>
                        <th>P_ID</th>
                        <th>P_Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>P_Type</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'db_conn.php';
                    $P_ID = 0;
                    $sql = " SELECT * FROM patient ";
                    $query = mysqli_query($conn, $sql);
                    while ($Patient_data = mysqli_fetch_array($query)) {
                        $P_ID = $P_ID + 1;

                    ?>
                        <tr>
                            <td><b><?php echo $P_ID  ?></b></td>
                            <td><?php echo $Patient_data['P_Name'];  ?></td>
                            <td><?php echo $Patient_data['Gender'];  ?></td>
                            <td><?php echo $Patient_data['Age'];  ?></td>
                            <td><?php echo $Patient_data['P_Type'];  ?></td>
                            <td style="width: 140px;">
                                <button> <a href="update-data.php?ID=<?php echo $Patient_data['P_ID'];  ?>" class="btn btn-success"><b>Update</b></a></button>
                                <button><a href="delete-patient.php?php echo $Patient_data['P_ID']; ?>" class="btn btn-danger"><b>Delete</b></a></button>


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