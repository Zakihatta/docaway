<?php
	require_once '../koneksi.php';

	if(isset($_GET['iddokter'])) {
		$iddokter = $_GET['iddokter'];

		// Ambil data dokter berdasarkan iddokter
		$query_select = "SELECT * FROM dokter WHERE iddokter = '$iddokter'";
		$run_query_select = mysqli_query($conn, $query_select);
		$row = mysqli_fetch_assoc($run_query_select);

		if($row) {
			// Tampilkan form untuk mengedit data dokter
			require_once 'atas.php';
			require_once 'jelajah.php';
			?>

			<div class="konten-dokter">
				<div class="cont-dokter">
					<h3 class="page-title">EDIT DATA DOKTER - DOCAWAY</h3>
					<div class="card">
						<form action="proses_dokter_edit.php" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="iddokter" value="<?= $row['iddokter'] ?>">

							<div class="form-group">
								<label for="namadokter">Nama Dokter</label>
								<input type="text" id="namadokter" name="namadokter" value="<?= $row['namadokter'] ?>" required>
							</div>

							<div class="form-group">
								<label for="spesialisasi">Spesialisasi</label>
								<input type="text" id="spesialisasi" name="spesialisasi" value="<?= $row['spesialisasi'] ?>" required>
							</div>

							<div class="form-group">
								<label for="kualifikasi">Kualifikasi</label>
								<input type="text" id="kualifikasi" name="kualifikasi" value="<?= $row['kualifikasi'] ?>" required>
							</div>

							<div class="form-group">
								<label for="jadwalkonsultasi">Jadwal Konsultasi</label>
								<input type="text" id="jadwalkonsultasi" name="jadwalkonsultasi" value="<?= $row['jadwalkonsultasi'] ?>" required>
							</div>

							<div class="form-group">
								<label for="rumahsakit">Rumah Sakit</label>
								<input type="text" id="rumahsakit" name="rumahsakit" value="<?= $row['rumahsakit'] ?>" required>
							</div>

							<div class="form-group">
								<label for="foto">Foto</label>
								<input type="file" id="foto" name="foto">
								<p class="small-text">Biarkan kosong jika tidak ingin mengubah foto</p>
							</div>

							<div class="form-group">
								<button type="submit" name="submit" class="btn">Simpan</button>
								<a href="dokter.php" class="btn">Batal</a>
							</div>
						</form>
					</div>
				</div>
			</div>

			<?php require_once 'bawah.php';
		} else {
			// Redirect ke halaman dokter.php jika iddokter tidak valid
			header("Location: dokter.php");
			exit();
		}
	} else if(isset($_POST['submit'])) {
		$iddokter = $_POST['iddokter'];
		$namadokter = $_POST['namadokter'];
		$spesialisasi = $_POST['spesialisasi'];
		$kualifikasi = $_POST['kualifikasi'];
		$jadwalkonsultasi = $_POST['jadwalkonsultasi'];
		$rumahsakit = $_POST['rumahsakit'];

		// Update data dokter dalam database
		$query_update = "UPDATE dokter SET namadokter = '$namadokter', spesialisasi = '$spesialisasi', kualifikasi = '$kualifikasi', jadwalkonsultasi = '$jadwalkonsultasi', rumahsakit = '$rumahsakit' WHERE iddokter = '$iddokter'";
		$run_query_update = mysqli_query($conn, $query_update);

		if($run_query_update) {
			// Pembaruan berhasil, redirect ke halaman dokter.php dengan pesan sukses
			header("Location: dokter.php?success=update");
			exit();
		} else {
			// Terjadi kesalahan selama pembaruan, redirect ke halaman edit_dokter.php dengan pesan error
			header("Location: edit_dokter.php?error=update");
			exit();
		}
	} else {
		// Redirect ke halaman dokter.php jika tidak ada parameter iddokter atau data yang dikirim dari form
		header("Location: dokter.php");
		exit();
	}
?>
