<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ADMIN PAGE</title>
     <!-- fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

     <!-- CSS STYILE  -->

     <style>
          body {
               margin: 0;
          }


          /* navbar style starts here */
          .slidebar {

               border: 20px;
               width: 15%;
               height: 700px;
               position: absolute;
               background-color: rgba(195, 179, 179, 0.493);
          }

          .slidebar header {
               padding: 30px 10px;
               text-align: center;
               font-family: 'Mochiy Pop P One', sans-serif;
               font-size: 30px;
               font-weight: bolder;
               color: rgb(16, 95, 98);
          }

          .slidebar header span {
               font-size: 50px;
               color: rgb(89, 161, 87);
          }

          .slidebar ul {
               
          }

          .slidebar ul li {

               list-style: none;
               padding: 10px;
               font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
               font-weight: bolder;

          }

          .slidebar ul li:hover {
               transform: scale(1.1);
               transition: .5s;
               border-radius: 10px;
               background-color: rgb(89, 150, 152);
               margin-right: 20px;
          }

          .slidebar ul li a {
               text-decoration: none;
          }

          /* body decoratin starts */
          .mainpart {
               background: rgba(96, 193, 138, 0.722);
               width: 85%;
               height: 700px;
               float: right;
               position: relative;
          }

          .infocard {
               margin: 30px;
               margin-top: 90px;
               width: 80%;
               height: 580px;
               position: fixed;
               text-align: center;



          }

          .cardspecific {
               height: 220px;
               float: left;
               margin: 20px;
               border: solid black 5px;
               border-radius: 30px;
               font-weight: bolder;
               color: rgb(9, 9, 84);
               font-size: 30px;
               font-family: 'Mochiy Pop P One', sans-serif;
               padding: 10px;
               padding-top: 20px;

          }

          .cardspecific:hover {
               transform: scale(1.1);
               background: rgba(108, 154, 117, 0.813);
               transition: 1s;


          }

          .number {
               font-size: 25px;
               padding-top: 60px;
               color: rgb(85, 12, 99);
          }


          /* logout button */
          .log {}

          .log h3 {
               position: fixed;
               top: 5px;
               right: 5%;
               border: black solid;
               padding: 10px;
               border-radius: 20px;
               font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
               font-weight: bolder;
          }

          .log h3 a {
               text-decoration: none;
               color: black;
          }

          .log h3:hover {
               transition: .5s;
               transform: scale(1.1);
               background: rgb(22, 122, 17);

          }
     </style>

</head>

<body>

     <!-- slidebar -->

     <div class="slidebar">
          <header>
               <span>
                    <i class="fas fa-users-cog"></i><br>
               </span>
               ADMIN
          </header>

          <ul>
               <li>
                    <a href="/php/Doctor/doctor.php"><i class="fas fa-user-md"></i> Doctors</a>
               </li>
               <li>
                    <a href="/php/staff/staff.php"><i class="fas fa-user-nurse"></i> Staffs</a>
               </li>
               <li>
                    <a href="/php/patient/patient.php"><i class="fas fa-user-injured"></i> Patients</a>
               </li>
               <li>
                    <a href="/php/test/test.php"><i class="fas fa-file-medical-alt"></i> Tests</a>

               </li>
               <li>
                    <a href="/php/bed/bed.php"><i class="fas fa-procedures"></i> Bed</a>

               </li>
               <li>
                    <a href="/php/Ambulence/ambulence.php"><i class="fas fa-ambulance"></i> Ambulance</a>

               </li>
               <li>
                    <a href="/php/medicine/medicine.php"><i class="fas fa-medkit"></i> Medicine</a>
               </li>

          </ul>
          
     </div>

     <!-- mainpart -->

     <div class="mainpart">

          <div class="infocard">

               <div class="cardspecific" style="width: 26%;">
                    Doctors

                    <div class="number">
                         Number
                    </div>

               </div>
               <div class="cardspecific" style="width: 26%;">
                    Staffs

                    <div class="number">
                         Number
                    </div>
               </div>
               <div class="cardspecific" style="width: 26%;">
                    patients

                    <div class="number">
                         Number
                    </div>
               </div>
               <div class="cardspecific" style="width: 18%;">
                    Test

                    <div class="number">
                         Number
                    </div>
               </div>
               <div class="cardspecific" style="width: 18%;">
                    Bed

                    <div class="number">
                         Number
                    </div>
               </div>
               <div class="cardspecific" style="width: 18%;">
                    Ambulance

                    <div class="number">
                         Number
                    </div>
               </div>
               <div class="cardspecific" style="width: 18%;">
                    Medicine

                    <div class="number">
                         Number
                    </div>
               </div>

          </div>

     </div>

     <div class="log">
          <h3>
               <a href="/php/login.php">
                    LOG OUT
               </a>
          </h3>
     </div>
</body>

</html>