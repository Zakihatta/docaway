<!-- simpan_appointment.php -->
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
        $message = "Data appointment berhasil disimpan";
    } else {
        $message = "Terjadi kesalahan: " . mysqli_error($conn);
    }

    header("Location: form_appointment.php?message=" . urlencode($message));
    exit();
}
?>
