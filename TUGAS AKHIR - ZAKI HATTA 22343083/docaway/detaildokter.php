<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Dokter - DocAway</title>

    <link rel="stylesheet" href="css/detail.css" />
    <script src="../js/myStyle.js"></script>

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
      href="images/logo_hijau_with_bg-removebg-preview.png"
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
    <!-- NAVBAR START -->
    <nav class="navbar">
      <a href="#home" class="navbar-logo">Docaway.</a>

      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="listdokter.php">Cari Dokter</a>
        <a href="#about">Tentang Kami</a>
        <a href="#contact">Kontak</a>
      </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- HOME SECTION START -->
    <section id="home" class="home">
      <div class="container">
        <div class="logo">
          <img src="images/logo_hijau_with_bg-removebg-preview.png" />
        </div>
        <div class="welcome">
          <h3>Hai, Selamat Datang!</h3>
          <h1>DocAway.</h1>
          <p>Bringing World-Class Healthcare to Your Doorstep</p>
        </div>

        <div class="img-dokter">
          <img
            src="images/dokter.png"
          />
        </div>
      </div>

      <div class="button">
        <a href="https://api.whatsapp.com/send/?phone=62895611464552&text&type=phone_number&app_absent=0"><button>Konsultasi Sekarang</button> </a>
        <button>Buat Appointment</button>
      </div>
    </section>
    <!-- HOME SECTION END-->


    <!-- DETAILLLL  -->

    <div class="content">
        <div class="kartu">
            <img src="uploads/foto-dokter/happy.jpg">

            <div class="badan-kartu">
                <div class="nama">Dr.Prof.Zaki Hatta</div>
                <div class="spesialisasi">Orthopaedic</div>
                <div class="kualifikasi">Harvard University</div>
                <div class="jadwalkonsultasi">Senin 9.00 - 15.00 </div>
                <div class="rumahsakit">Cenglid Hospital</div>

            </div>
        </div>
    </div>















    <footer class="footer">
    <p>&copy; 2023 DocAway. All rights reserved.</p>
    <p>
      Made with <span style="color: #ff0000;">&hearts;</span> by
      <a href="https://www.docaway.com" target="_blank">DocAway</a>
    </p>
  </footer>
  </body>
</html>