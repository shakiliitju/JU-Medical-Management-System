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

        <h1 class="heading">Add bed</h1>

        <div class="row">
            <form action="/php/bed/add-bed-con.php" method="post">
                

                <h2>Bed_Status</h2>
                <input list="browsers" name="Bed_Status" id="browser" class="" required>
                <datalist id="browsers">
                    <option value="Available">
                    <option value="Not Available">
                </datalist>

                <input type="submit" value="Submit" class="btn">
            </form>

        </div>

    </section>

    <!-- booking section ends -->




    <!-- footer section starts  -->

    

    <!-- footer section ends -->

















</body>

</html>