// update-data.php


<?php

include 'connection.php';
if (isset($_POST['UPDATEDATA'])) {
  $ID = $_GET['ID'];
  $NAME = $_POST['NAME'];
  $EMAIL = $_POST['EMAIL'];
  $ADDRESS = $_POST['ADDRESS'];
  $PHONE = $_POST['PHONE'];
  $CITY = $_POST['CITY'];
  $UPDATED_DATE = $_POST['UPDATED_DATE'];

  $sql = " UPDATE `operations` SET `ID`=$ID,`NAME`='$NAME',`EMAIL`='$EMAIL',`ADDRESS`='$ADDRESS',`PHONE`='$PHONE',`CITY`='$CITY',`UPDATED_DATE`='$UPDATED_DATE' WHERE ID = $ID ";
  $query = mysqli_query($con, $sql);

  header("location:doctor.php");
}




?>
<?php
$ID = $_GET['ID'];
$sql = " SELECT * FROM `operations` WHERE ID = $ID ";
$query = mysqli_query($con, $sql);
$update_rec = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="assest/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assest/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="assest/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>
  <!-- Begin Page Content -->
  <div class="container" style="margin-top: 3%;margin-bottom: 5%;width: 75%;">
    <!-- Area Chart -->
    <div class="card shadow mb-2">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary display-4">Update Employee Details</h6>
      </div>
      <div class="card-body">
        <br>
        <form method="post">
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-4">
              <input value="<?php echo $update_rec['NAME']; ?>" name="NAME" type="text" class="form-control" placeholder="" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-4">
              <input value="<?php echo $update_rec['EMAIL']; ?>" name="EMAIL" type="email" class="form-control" placeholder="" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-4">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ADDRESS"><?php echo $update_rec['ADDRESS']; ?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-4">
              <input value="<?php echo $update_rec['PHONE']; ?>" name="PHONE" type="text" class="form-control" placeholder="" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">City</label>
            <div class="col-sm-4">
              <input value="<?php echo $update_rec['CITY']; ?>" name="CITY" type="text" class="form-control" placeholder="" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Updated Date</label>
            <div class="col-sm-4">
              <input name="UPDATED_DATE" id="date" name="date" class="form-control">
            </div>
          </div>
          <script type="text/javascript">
            document.getElementById('date').value = Date();
          </script>
          <br>
          <button type="submit" class="btn btn-danger " name="UPDATEDATA">Update</button>

        </form>

      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="assest/vendor/jquery/jquery.min.js"></script>
  <script src="assest/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assest/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assest/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="assest/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="assest/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="assest/js/demo/datatables-demo.js"></script>

</body>

</html>