<?php
	require_once 'atas.php';
?>

<?php
    require_once 'jelajah.php';
?>

<div class="tambah-dokter-con">
        <h2>Form Dokter</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="namadokter">Nama Dokter</label>
                <input type="text" id="namadokter" name="namadokter" required>
            </div>
            <div class="form-group">
                <label for="spesialisasi">Spesialisasi</label>
                <input type="text" id="spesialisasi" name="spesialisasi" required>
            </div>
            <div class="form-group">
                <label for="kualifikasi">Kualifikasi</label>
                <input type="text" id="kualifikasi" name="kualifikasi">
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" id="foto" name="foto" required>
            </div>
            <div class="form-group">
                <label for="jadwalkonsultasi">Jadwal Konsultasi</label>
                <input type="text" id="jadwalkonsultasi" name="jadwalkonsultasi">
            </div>
            <div class="form-group">
                <label for="rumahsakit">Rumah Sakit</label>
                <select id="rumahsakit" class="input-control" name="rumahsakit">
					<option value="">Pilih</option>
                    <option value="Cengild Medical Centre">Cengild Medical Centre</option>
                    <option value="AlTY orthopedic hospital">AlTY orthopedic hospital</option>
                    <option value="Sunway Medical Centre">Sunway Medical Centre</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    
    <?php
    // Cek apakah form telah disubmit
    if (isset($_POST['submit'])) {
        // Ambil data dari form
        $namadokter = $_POST['namadokter'];
        $spesialisasi = $_POST['spesialisasi'];
        $kualifikasi = $_POST['kualifikasi'];
        $jadwalkonsultasi = $_POST['jadwalkonsultasi'];
        $rumahsakit = $_POST['rumahsakit'];

        // Proses upload file foto
        $targetDir = "../uploads/dokter/";
        $foto = $_FILES['foto']['name'];
        $targetFile = $targetDir . basename($foto);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));


        // Check if file already exists
        if (file_exists($targetFile)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }


        // Allow only certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // If everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
                echo "The file " . basename($_FILES['foto']['name']) . " has been uploaded.";
                
                // Masukkan data dokter ke database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "newdocaway";

                // Buat koneksi ke database
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Periksa koneksi
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Buat query untuk memasukkan data dokter ke tabel "dokter"
                $sql = "INSERT INTO dokter (namadokter, spesialisasi, kualifikasi, foto, jadwalkonsultasi, rumahsakit) VALUES ('$namadokter', '$spesialisasi', '$kualifikasi', '$foto', '$jadwalkonsultasi', '$rumahsakit')";

                if ($conn->query($sql) === true) {
                    echo "Data dokter berhasil dimasukkan.";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Tutup koneksi
                $conn->close();
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    ?>

<?php require_once 'bawah.php'; ?>