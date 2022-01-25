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

    <!-- header section starts  -->

   

    <!-- header section ends -->



    <!-- booking section starts   -->

    <section class="book" id="book">

        <h1 class="heading">Add Patient</h1>

        <div class="row">
            <form action="/php/patient/add-patient-con.php" method="post">
                
                <h2>Patient Name</h2>
                <input type="text" placeholder="patient name" name="P_Name" class="" required>

                <h2>Gender</h2>
                <label for="male" class=""><input type="radio" name="Gender" value="Male" id="male" /> Male</label>
                <label for="female" class=""><input type="radio" name="Gender" value="Female" id="female" /> Female</label>
                <label for="others" class=""><input type="radio" name="Gender" value="Others" id="others" /> Others</label>

                <h2>Patient Age</h2>
                <input type="number" placeholder="patient age" name="Age" class="" required>

                <h2>Patient Type</h2>
                <input list="browsers" name="P_Type" id="browser" class="" required>
                <datalist id="browsers">
                    <option value="Student">
                    <option value="Teacher">
                    <option value="Staff">
                </datalist>


                <input type="submit" value="Add Patient" class="btn">
            </form>

        </div>

    </section>

    <!-- booking section ends -->




    <!-- footer section starts  -->

    

    <!-- footer section ends -->

















</body>

</html>