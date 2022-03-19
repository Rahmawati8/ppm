<!-- <?php session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php
   include("konten/head.html");
   include("konten/head.html");
   ?>
</head>
<body>

   <div class="container">
     <?php
    include("konten/judul.html");

    if (!empty($_SESSION['id'])) {
    include("konten/nav.php");
    include("atur-konten.php");
  } else {
    if ($_GET['menu'] == 'registrasi') {
    include('konten/registrasi.php');   
  } else {
     include('konten/login.php');
  }
}

     ?>
   </div> 
</body>
</html>