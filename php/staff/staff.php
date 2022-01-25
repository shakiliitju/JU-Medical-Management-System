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
                <h2>Manage <b>Doctor</b></h2>
            </div>
            <div style="margin-left: 85%; margin-top: 3%;">
                <button><a href="/php/Doctor/add-doctor.php">Add Doctor</a></button>
            </div>
        </div>
    </div>
    </div>

    <div class="card-body">
        <div style="margin-left: 20%; margin-top: 1%;">
            <table id="dataTable" width="90%" cellspacing="10">
                <thead>
                    <tr>
                        <th>D_ID</th>
                        <th>D_Name</th>
                        <th>Gender</th>
                        <th>Work_Day</th>
                        <th>Speciality</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'db_conn.php';
                    $D_ID = 0;
                    $sql = " SELECT * FROM doctor ";
                    $query = mysqli_query($conn, $sql);
                    while ($Patient_data = mysqli_fetch_array($query)) {
                        $D_ID = $D_ID + 1;

                    ?>
                        <tr>
                            <td><b><?php echo $D_ID  ?></b></td>
                            <td><?php echo $Patient_data['D_Name'];  ?></td>
                            <td><?php echo $Patient_data['Gender'];  ?></td>
                            <td><?php echo $Patient_data['Work_Day'];  ?></td>
                            <td><?php echo $Patient_data['Speciality'];  ?></td>
                            <td style="width: 140px;">
                                <button> <a href="update-data.php?ID=<?php echo $Patient_data['D_ID'];  ?>" class="btn btn-success"><b>Update</b></a></button>
                                <button><a href="/php/Doctor/delete-data.php echo $Patient_data['D_ID']; ?>" class="btn btn-danger"><b>Delete</b></a></button>


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