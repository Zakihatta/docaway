<?php
    session_start();
    if(!isset($_SESSION['uid'])){
      header('location:../login.php');
    }
?>
<?php
    require_once '../koneksi.php';

    $query_select = 'SELECT * FROM dokter';
    $run_query_select = mysqli_query($conn, $query_select);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - DocAway</title>

    <link rel="stylesheet" href="../css/admin.css" />

    <!-- CDN Fontawesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- LOGO -->
    <link
      rel="shortcut icon"
      href="../images/logo_hijau_with_bg-removebg-preview.png"
      type="image/x-icon"
    />

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,400;1,700;1,900&family=Silkscreen&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
    />


  </head>
  <body>
    
    <section class="atas">
        <div class="banner">
            <div class="logo">
                <img src="../images/logo_hijau_with_bg-removebg-preview.png">
            </div>

            <div class="judul">
                <h1>DocAway</h1>
                <h3>Beranda - Admin</h3>
            </div>
        </div>
    </section>