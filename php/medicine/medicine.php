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
                <h2>Manage <b>Medicine</b></h2>
            </div>
            <div style="margin-left: 85%; margin-top: 3%;">
                <button><a href="/php/medicine/add-medicine.php">Add Medicine</a></button>
            </div>
        </div>
    </div>
    </div>

    <div class="card-body">
        <div style="margin-left: 20%; margin-top: 1%;">
            <table id="dataTable" width="90%" cellspacing="10">
                <thead>
                    <tr>
                        <th>M_Code</th>
                        <th>Quantity</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'db_conn.php';
                    $M_Code = 0;
                    $sql = " SELECT * FROM medicine ";
                    $query = mysqli_query($conn, $sql);
                    while ($Patient_data = mysqli_fetch_array($query)) {
                        $M_Code = $M_Code + 1;

                    ?>
                        <tr>
                            <td><b><?php echo $M_Code  ?></b></td>
                            <td><?php echo $Patient_data['Quantity'];  ?></td>
                            <td style="width: 140px;">
                                <button> <a href="update-data.php?ID=<?php echo $Patient_data['M_Code'];  ?>" class="btn btn-success"><b>Update</b></a></button>
                                <button><a href="delete-patient.php?php echo $Patient_data['M_Code']; ?>" class="btn btn-danger"><b>Delete</b></a></button>


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