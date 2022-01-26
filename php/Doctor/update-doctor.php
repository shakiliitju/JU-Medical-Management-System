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
</head>

<body>
  <!-- Begin Page Content -->
  <div class="container" style="margin-top: 3%;margin-bottom: 5%;width: 75%;">
    <!-- Area Chart -->


      <div>
        <h1>Add Doctor</h1>
      </div>

        <br>

        <form action="/php/Doctor/add-doctor-con.php" method="post">

          <div>
            <h2>Doctor Name</h2>
            <input name="D_Name" type="text" class="form-control" placeholder="" required>
          </div>

          <div>
            <h2>Gender</h2>
            <label for="male" class="form-control"><input type="radio" name="Gender" value="Male" id="male" /> Male</label>
            <label for="female" class="form-control"><input type="radio" name="Gender" value="Female" id="female" /> Female</label>
            <label for="others" class="form-control"><input type="radio" name="Gender" value="Others" id="others" /> Others</label>
          </div>

          <div>
            <h2>Work_Day:</h2>
            <input type="date" id="day" class="form-control" name="Work_Day">
          </div>

          <div>
            <h2>Speciality</h2>
            <input name="Speciality" type="text" class="form-control" placeholder="" required>
          </div>
          <br>

          <input type="submit" value="Add Doctor" class="btn">

        </form>

      </div>
    </div>

  </div>


</body>

</html>