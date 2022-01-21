<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
     <!DOCTYPE html>
     <html>

     <head>
          <title>Ju Medical Center</title>
          <link rel="shortcut icon" href="https://juniv.edu/images/favicon.ico">
          <link rel="stylesheet" type="text/css" href="/css/php-style.css">
     </head>

     <body>
          <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
          <a href="logout.php">Logout</a>
     </body>

     </html>

<?php
} else {
     header("Location: index.php");
     exit();
}
?>