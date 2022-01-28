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
      padding: 10px 250px;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      background-color: rgb(108, 166, 151);
      font-weight: bolder;

    }

    h1 {
      font-weight: bolder;
      font-family: 'Mochiy Pop P One', sans-serif;
      color: rgb(42, 79, 76);
    }

    .btn {
      padding: 10px;
      border-radius: 20px;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-weight: bolder;
      font-size: 15px;
      margin: 20px;
      margin-left: 60px;
      border: red 2px solid;
      background-color: rgb(131, 216, 118);
    }

    .btn:hover {
      background-color: rgb(96, 9, 67);
      color: white;
      transform: scale(1.2);
      transition: .5s;
    }
  </style>
</head>

<body>
  <!-- Begin Page Content -->
  <div class="container" style="margin-top: 3%;margin-bottom: 5%;width: 75%;">
    <!-- Area Chart -->


    <div>
      <h1>Add Test</h1>
    </div>

    <br>

    <form action="/php/test/add-test-con.php" method="post">

      <div>
        <h2>Test ID</h2>
        <input type="number" placeholder="number" name="T_ID" class="" required>
      </div>
      <div>
        <h2>Test Name</h2>
        <input name="T_Name" type="text" class="form-control" placeholder="" required>
      </div>
      <div>
        <h2>Test Price</h2>
        <input type="number" placeholder="number" name="T_Price" class="" required>
      </div>
      <br>

      <input type="submit" value="Submit" class="btn">

    </form>

  </div>
  </div>

  </div>


</body>

</html>