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


  <!-- header section starts  -->



  <!-- header section ends -->



  <!-- booking section starts   -->

  <section class="book" id="book">

    <h1 class="heading">Add Ambulence</h1>

    <div class="row">
      <form action="/php/Ambulence/add-ambulence-con.php" method="post">

        <h2>Ambulence ID</h2>
        <input type="number" placeholder="number" name="Amb_ID" class="" required>

        <h2>Amb_Status</h2>
        <input list="browsers" name="Amb_Status" id="browser" class="" required>
        <datalist id="browsers">
          <option value="Available">
          <option value="Not Available">
        </datalist>


        <input type="submit" value="Add Ambulence" class="btn">
      </form>

    </div>

  </section>

  <!-- booking section ends -->




  <!-- footer section starts  -->



  <!-- footer section ends -->

















</body>

</html>