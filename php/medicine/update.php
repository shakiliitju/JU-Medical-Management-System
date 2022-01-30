<?php
include_once 'db_conn.php';
if (count($_POST) > 0) {

  mysqli_query($conn, "UPDATE medicine set M_Code='" . $_POST['M_Code'] . "', M_Name='" . $_POST['M_Name'] . "' ,Quantity='" . $_POST['Quantity'] . "' WHERE M_Code='" . $_POST['M_Code'] . "'");
  $message = "Record Modified Successfully";
}
$query = mysqli_query($conn, "SELECT * FROM medicine WHERE M_Code='" . $_GET['M_Code'] . "'");
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
        <h2>Medicine Code</h2>
        <input type="hidden" name="M_Code" class="form-control" value="<?php echo $Patient_data['M_Code']; ?>">
        <input type="number" name="M_Code" value="<?php echo $Patient_data['M_Code']; ?>">
        <br>
      </div>

      <div>
        <h2>Medicine Name</h2>
        <input name="M_Name" type="text" class="form-control" value="<?php echo $Patient_data['M_Name']; ?>" required>
      </div>

      <div>
        <h2>Quantity</h2>
        <input type="number" name="Quantity" value="<?php echo $Patient_data['Quantity']; ?>">
        <br>
      </div>
    
      <br>

      <input type="submit" value="Update" class="btn">

    </form>

  </div>
  </div>

  </div>


</body>

</html>
