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
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/book.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <img src="/image/logo-ju-small.png" alt style="height: 70px; width: 65px;">
        <a href="" class="logo">JU Medical Center</a>

        <nav class="navbar">
            <a href="/html/index.html">home</a>
            <a href="/html/services.html">services</a>
            <a href="/html/about.html">about</a>
            <a href="/html/director.html">director</a>
            <a href="/html/doctors.html">doctors</a>
            <a href="/html/staff.html">staff</a>
            <a href="http://localhost:3000/php/booking.php">booking</a>
            <a href="http://localhost:3000/php/index.php">login</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- header section ends -->



    <!-- booking section starts   -->

    <section class="book" id="book">

        <h1 class="heading"> <span>book</span> now </h1>

        <div class="row">
            <form action="/php/book.php" method="post">
                <h3>book appointment</h3>

                <h2>Patient ID</h2>
                <input type="number" placeholder="number" name="P_ID" class="box" required>


                <h2>Patient Name</h2>
                <input type="text" placeholder="patient name" name="P_Name" class="box" required>

                <h2>Gender</h2>
                <label for="male" class="box"><input type="radio" name="Gender" value="Male" id="male" /> Male</label>
                <label for="female" class="box"><input type="radio" name="Gender" value="Female" id="female" /> Female</label>
                <label for="others" class="box"><input type="radio" name="Gender" value="Others" id="others" /> Others</label>

                <h2>Patient Age</h2>
                <input type="number" placeholder="number" name="Age" class="box" required>

                <h2>Patient Type</h2>
                <input list="browsers" name="P_Type" id="browser" class="box" required>
                <datalist id="browsers">
                    <option value="Student">
                    <option value="Teacher">
                    <option value="Staff">
                </datalist>

                <h2>Admit Date</h2>
                <input type="date" id="day" class="box" name="A_Date" required>

                <input type="submit" value="book now" class="btn">
            </form>

        </div>

    </section>

    <!-- booking section ends -->




    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="/html/index.html"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="services.html"> <i class="fas fa-chevron-right"></i> services </a>
                <a href="about.html"> <i class="fas fa-chevron-right"></i> about </a>
                <a href="doctors.html"> <i class="fas fa-chevron-right"></i> doctors </a>
                <a href="http://localhost:3000/php/booking.php"> <i class="fas fa-chevron-right"></i> booking </a>
            </div>

            <div class="box">
                <h3>our services</h3>
                <a href="/html/services.html"> <i class="fas fa-chevron-right"></i> Free Checkups </a>
                <a href="/html/services.html"> <i class="fas fa-chevron-right"></i> 24/7 Ambulance </a>
                <a href="/html/services.html"> <i class="fas fa-chevron-right"></i> Medicines </a>
                <a href="/html/doctors.html"> <i class="fas fa-chevron-right"></i> Expert Doctors </a>
                <a href="/html/services.html"> <i class="fas fa-chevron-right"></i> Bed Facility </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> 1324 </a>
                <a href="#"> <i class="fas fa-phone"></i> 01715054872 </a>
                <a href="#"> <i class="fas fa-envelope"></i> medicalju123@gmail.com </a>
                <a href="https://goo.gl/maps/gCv8rquk261n7FnXA"> <i class="fas fa-map-marker-alt"></i> Jahangirnagar University, Savar, Dhaka-1342, Bangladesh. </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/Medical-Centre-Jahangirnagar-University-111006755903584/?ref=page_internal"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>

        <div class="credit"> created by <span>Group 16</span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>