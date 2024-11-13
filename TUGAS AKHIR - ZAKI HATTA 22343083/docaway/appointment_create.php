<!-- appointment.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }

        input[type="date"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
    include 'koneksi.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $iddokter = $_POST['iddokter'];
        $nama = $_POST['nama'];
        $nomorhp = $_POST['nomorhp'];
        $email = $_POST['email'];
        $tanggal_app = $_POST['tanggal_app'];
        $keterangan = $_POST['keterangan'];

        $sql = "INSERT INTO appointment (iddokter, nama, nomorhp, email, tanggal_app, keterangan) 
                VALUES ('$iddokter', '$nama', '$nomorhp', '$email', '$tanggal_app', '$keterangan')";

        if (mysqli_query($conn, $sql)) {
            echo "Data appointment berhasil disimpan";
        } else {
            echo "Terjadi kesalahan: " . mysqli_error($conn);
        }
    }
    ?>

    <h2>Form Appointment</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="iddokter">ID Dokter:</label>
        <select name="iddokter" required>
            <?php
            include 'koneksi.php';

            $query = "SELECT * FROM dokter";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['iddokter'] . "'>" . $row['nama_dokter'] . "</option>";
            }
            ?>
        </select><br>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br>

        <label for="nomorhp">Nomor HP:</label>
        <input type="text" name="nomorhp" id="nomorhp" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="tanggal_app">Tanggal Appointment:</label>
        <input type="date" name="tanggal_app" id="tanggal_app" required><br>

        <label for="keterangan">Keterangan:</label>
        <textarea name="keterangan" id="keterangan" rows="5" required></textarea><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
