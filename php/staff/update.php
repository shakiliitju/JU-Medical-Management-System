<?php
$Gender = isset($_POST['Gender']) ? $_POST['Gender'] : '';
include_once 'db_conn.php';
if (count($_POST) > 0) {

  mysqli_query($conn, "UPDATE staff set S_ID='" . $_POST['S_ID'] . "', S_Name='" . $_POST['S_Name'] . "' ,Gender='" . $_POST['Gender'] . "' ,Work_Day='" . $_POST['Work_Day'] ."' WHERE S_ID='" . $_POST['S_ID'] . "'");
  $message = "Record Modified Successfully";
}
$query = mysqli_query($conn, "SELECT * FROM staff WHERE S_ID='" . $_GET['S_ID'] . "'");
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
        <h2>Staff ID</h2>
        <input type="hidden" name="S_ID" class="form-control" value="<?php echo $Patient_data['S_ID']; ?>" required>
        <input type="number" name="S_ID" value="<?php echo $Patient_data['S_ID']; ?>" required>
        <br>
      </div>

      <div>
        <h2>Staff Name</h2>
        <input name="S_Name" type="text" class="form-control" value="<?php echo $Patient_data['S_Name']; ?>" required>
      </div>

      <div>
        <h2>Gender</h2>
        <label for="male" class="form-control"><input type="radio" name="Gender" value="Male" <?php echo ($Gender == 'Male') ? ' checked=""' : ''; ?>/> Male</label>
        <label for="female" class="form-control"><input type="radio" name="Gender" value="Female" <?php echo ($Gender == 'Female') ? ' checked=""' : ''; ?> /> Female</label>
        <label for="others" class="form-control"><input type="radio" name="Gender" value="Others" <?php echo ($Gender == 'Others') ? ' checked=""' : ''; ?> /> Others</label>
      </div>

      <div>
        <h2>Work_Day</h2>
        <input type="date" id="day" class="form-control" name="Work_Day" value="<?php echo $Patient_data['Work_Day']; ?>" required>
      </div>
      <br>

      <input type="submit" value="Update" class="btn">

    </form>

  </div>
  </div>

  </div>


</body>

</html>
