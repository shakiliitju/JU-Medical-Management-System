<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ju Medical Center</title>
    <link rel="shortcut icon" href="https://juniv.edu/images/favicon.ico">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- font ends -->

    <style>
        /* navbar style starts here */
        body {
            background: rgba(96, 193, 138, 0.722);
        }

        .slidebar {

            border: 20px;
            width: 15%;
            height: 700px;
            position: fixed;
            top: 0px;
            background-color: rgba(195, 179, 179, 0.493);
        }

        .slidebar header {
            padding: 30px 10px;
            text-align: center;
            font-family: 'Mochiy Pop P One', sans-serif;
            font-size: 30px;
            font-weight: bolder;
            color: rgb(16, 95, 98);
        }

        .slidebar header span {
            font-size: 50px;
            color: rgb(89, 161, 87);
        }


        .slidebar ul li {

            list-style: none;
            padding: 10px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-weight: bolder;

        }

        .slidebar ul li:hover {
            transform: scale(1.1);
            transition: .5s;
            border-radius: 10px;
            background-color: rgb(89, 150, 152);
            margin-right: 20px;
        }

        .slidebar ul li a {
            text-decoration: none;
        }


        /* slidebar ends */

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        /* internal style */

        h2 {
            font-size: 40px;

        }

        table {
            border: 2px solid black;
        }



        th {
            padding: 7px;
            border: 2px solid black;
            font-size: 22px;

        }

        td {
            border: 2px solid black;
            padding: 5px 10px 5px 20px;
            font-size: 15px;
            font-weight: bolder;

        }

        button {

            border: solid 2px black;
            border-radius: 15px;
            padding: 2px 6px;
            background-color: rgb(167, 127, 169);

        }

        button a {
            text-decoration: none;
            color: black;
            font-weight: bolder;
            padding: 2px 3px;

        }

        button:hover {
            background-color: greenyellow;
            transition: .5s;
            transform: scale(1.1);
        }

        /* internal style end */
    </style>

</head>

<body>

    <!-- sildebar starts -->

    <div class="slidebar">
        <header>
            <span>
                <i class="fas fa-users-cog"></i><br>
            </span>
            ADMIN
        </header>
        <ul>
            <li>
                <a href="/php/Doctor/doctor.php"><i class="fas fa-user-md"></i> Doctors</a>
            </li>
            <li>
                <a href="/php/staff/staff.php"><i class="fas fa-user-nurse"></i> Staffs</a>
            </li>
            <li>
                <a href="/php/patient/patient.php"><i class="fas fa-user-injured"></i> Patients</a>
            </li>
            <li>
                <a href="/php/test/test.php"><i class="fas fa-file-medical-alt"></i> Tests</a>

            </li>
            <li>
                <a href="/php/bed/bed.php"><i class="fas fa-procedures"></i> Bed</a>

            </li>
            <li>
                <a href="/php/Ambulence/ambulence.php"><i class="fas fa-ambulance"></i> Ambulance</a>

            </li>
            <li>
                <a href="/php/medicine/medicine.php"><i class="fas fa-medkit"></i> Medicine</a>
            </li>

        </ul>

        <!-- logoutbutton -->
        <div>
            <style>
                .logout {
                    text-align: center;
                    margin-top: 50px;
                    font-family: 'Mochiy Pop P One', sans-serif;
                    font-weight: bolder;
                }

                .logout:hover {
                    transform: scale(1.2);
                    color: red;
                    transition: 1s;
                }
            </style>
            <a style="text-decoration: none;" href="/php/index.php">
                <div class="logout">
                    Log Out
                </div>
            </a>
        </div>
    </div>

    <!-- slidebar ends -->

    <div class="container">

        <div class="row">
            <div style="margin-left: 50%; margin-top: 5%;">
                <h2>Manage <b>Bed</b></h2>
            </div>
            <div style="margin-left: 83%; margin-top: 3%;">
                <button><a href="/php/bed/add-bed.php">Add Bed</a></button>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div style="margin-left: 20%; margin-top: 1%;">

         <!-- (A) SEARCH FORM -->
         <form method="post" action="search.php">
                <input type="text" name="search" required />
                <input type="submit" value="Search" />
            </form>
            <br>

            <table id="dataTable" width="90%" cellspacing="10">
                <thead>
                    <tr>
                        <th> Bed_Number </th>
                        <th> Date </th>
                        <th> Bed_Status </th>
                        <th> Operation </th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include 'db_conn.php';

                    $sql = " SELECT * FROM bed LIMIT 5";
                    $query = mysqli_query($conn, $sql);
                    while ($Patient_data = mysqli_fetch_array($query)) {
                   

                    ?>
                        <tr>
                            <td><b><?php echo $Patient_data['Bed_Num'];  ?></b></td>
                            <td><?php echo $Patient_data['Date'];  ?></td>
                            <td><?php echo $Patient_data['Bed_Status'];  ?></td>
                            <td style="width: 140px;">

                                <button> <a href="/php/bed/add-bed.php?ID=<?php echo $Patient_data['Bed_Num'];  ?>" class="btn btn-success"><b>Update</b></a></button>
                                <button><a href="/php/bed/Delete.php?Bed_Num=<?php echo $Patient_data['Bed_Num']; ?>" class="btn btn-danger"><b>Delete</b></a></button>



                            </td>
                        </tr>
                    <?php

                    }

                    ?>

                </tbody>
            </table>
        </div>


    </div>


</body>

</html>