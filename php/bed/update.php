<?php
include_once 'db_conn.php';
if (count($_POST) > 0) {

  mysqli_query($conn, "UPDATE bed set Bed_Num='" . $_POST['Bed_Num'] . "',Date='" . $_POST['Date'] . "' ,Bed_Status='" . $_POST['Bed_Status'] . "' WHERE Bed_Num='" . $_POST['Bed_Num'] . "'");
  $message = "Record Modified Successfully";
}
$query = mysqli_query($conn, "SELECT * FROM bed WHERE Bed_Num='" . $_GET['Bed_Num'] . "'");
$Patient_data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ju Medical Center</title>
  <link rel="shortcut icon" href="https://juniv.edu/images/favicon.ico">
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- custom css file link  -->
  <!-- <link rel="stylesheet" href="/css/style.css"> -->

  <style>
    body {

      background-color: #8CD2AB;

    }

    .container {

      width: 60%;
      float: right;
      font-size: large;
      font-family: sans-serif;

    }

    .btn{
      border: 2px solid black;
      border-radius: 10px;
      font-weight: bolder;
      padding: 5px 10px;
    }
    .btn:hover{
      transform: scale(1.1);
      transition: .5s;
      background-color: greenyellow;
    }
  </style>


</head>

<body>
  <!-- Begin Page Content -->
  <div class="container" style="margin-top: 3%;margin-bottom: 5%;width: 75%;">
    <!-- Area Chart -->


    <form action="" method="post">
      <div><?php if (isset($message)) {
              echo $message;
            } ?>
      </div>

      <div>
        <h2>Bed Number</h2>
        <input type="hidden" name="Bed_Num" class="form-control" value="<?php echo $Patient_data['Bed_Num']; ?>">
        <input type="number" name="Bed_Num" value="<?php echo $Patient_data['Bed_Num']; ?>">
        <br>
      </div>

      <div>
        <h2>Date</h2>
        <input type="date" id="day" class="form-control" name="Date" value="<?php echo $Patient_data['Date']; ?>" required>
      </div>

      <div>
      <h2>Bed Status</h2>
        <input list="browsers" name="Bed_Status" class="form-control" required>
        <datalist id="browsers">
          <option value="<?php echo $Patient_data['Bed_Status']; ?>">
          <option value="<?php echo $Patient_data['Bed_Status']; ?>">
        </datalist>
      </div>
      <br>

      <input type="submit" value="Update" class="btn">

    </form>

  </div>
  </div>

  </div>


</body>

</html>
