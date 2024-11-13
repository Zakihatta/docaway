<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DocAway</title>

    <link rel="stylesheet" href="css/style.css" />
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
        <a href="home">Home</a>
        <a href="listdokter.php">Cari Dokter</a>
        <a href="#about">Tentang Kami</a>
        <a href="#contact">Kontak</a>
        <a href="login.php">Login</a>
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

    <!-- SOLUSI START -->
    <section id="solution" class="solution">
      <h2>Temukan Solusi Cepat dengan Keunggulan Layanan!</h2>

      <div class="container">
        <div class="lokasi">
          <img src="images/location.png" />
          <h4>Tentukan Lokasi</h4>
        </div>
        <div class="dokter">
          <img src="images/loupe.png" />
          <h4>Temukan Dokter</h4>
        </div>
        <div class="kalender">
          <img src="images/calendar.png" />
          <h4>Tentukan Jadwal</h4>
        </div>
        <div class="solusi">
          <img src="images/solution.png" />
          <h4>Dapatkan Solusi Anda</h4>
        </div>
      </div>
    </section>

    <section id="layanan" class="layanan">
      <h2>Cek Layanan Kami</h2>
      <img src="images/Membuat Appointment Dengan Dokter.png" />
    </section>

    <!-- TENTANG KAMI START -->
    <section id="about"class="about">
      <div class="container">
        <div class="row">
          <h3>Profil Perusahaan</h3>
          <p>Visi: Menghadirkan perubahan positif dalam pelayanan kesehatan global dengan menyediakan layanan berobat ke rumah sakit di luar negeri yang berkualitas tinggi dan terjangkau.<br>
          Misi: Memastikan akses yang mudah dan aman bagi pasien internasional untuk mendapatkan perawatan medis terbaik di rumah sakit terkemuka di luar negeri, sambil memberikan pengalaman pribadi dan perawatan yang holistik.</p>

          <h3>Kenapa Memilih Kami</h3>
          <p>
          DocAway adalah penyedia layanan berobat ke rumah sakit di luar negeri yang didirikan dengan tujuan untuk membantu pasien internasional mendapatkan perawatan medis yang terbaik di seluruh dunia. Kami bekerja sama dengan jaringan rumah sakit terkemuka yang memiliki reputasi internasional untuk menyediakan layanan yang aman, terpercaya, dan berkualitas tinggi.

          Kami mengakui bahwa mencari perawatan medis di luar negeri dapat menjadi pengalaman yang menantang dan membingungkan bagi banyak orang. Oleh karena itu, tim ahli kami berkomitmen untuk memberikan bantuan yang komprehensif dan didedikasikan untuk memastikan pasien mendapatkan perawatan yang sesuai dengan kebutuhan mereka.
          </p>

          <h3>Kontak</h3>
          <div class="kontak">
            <div class="phone">
              <img src="images/telephone-call.png">
              <h4>(+62) 895 - 6114 - 64552</h4>
            </div>
            <div class="loc">
              <img src="images/placeholder.png">
              <h4><span>Padang : </span>Komp.Mawar Putih M2, Korong Gadang</h4>
            </div>

            <div class="email">
              <img src="images/email.png">
              <h4>zakihattamg@gmail.com</h4>
            </div>
          </div>

        </div>
        <div class="img">
          <img src="images/TENTANG.png">
        </div>
      </div>
    </section>


    <!-- TENTANG KAMI END -->




    <footer class="footer">
    <p>&copy; 2023 DocAway. All rights reserved.</p>
    <p>
      Made with <span style="color: #ff0000;">&hearts;</span> by
      <a href="https://www.docaway.com" target="_blank">DocAway</a>
    </p>
  </footer>
  </body>
</html>
