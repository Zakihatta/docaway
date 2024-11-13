<?php
	require_once 'atas.php';
	require_once 'jelajah.php';

	$query_select = 'SELECT * FROM dokter';
	$run_query_select = mysqli_query($conn, $query_select);
?>

<div class="konten-dokter">
	<div class="cont-dokter">
		<h3 class="page-title">DATA DOKTER - DOCAWAY</h3>
		<div class="card">
			<a href="dokter_add.php" class="btn" title="Tambah data"><i class="fa fa-plus"></i></a>
			<table class="table">
				<thead>
					<tr>
						<th width="50">NO</th>
						<th>FOTO</th>
						<th>NAMA DOKTER</th>
						<th>SPESIALISASI</th>
						<th>KUALIFIKASI</th>
						<th>JADWAL KONSULTASI</th>
						<th>RUMAH SAKIT</th>
						<th>AKSI</th>
					</tr>
				</thead>
				<tbody>
					<?php if(mysqli_num_rows($run_query_select) > 0){ ?>
						<?php $nomor = 1; ?>
						<?php while($row = mysqli_fetch_array($run_query_select)){ ?>
							<tr>
								<td align="center"><?= $nomor++ ?></td>
								<td><img src="../uploads/dokter/<?= $row['foto'] ?>" width="200"></td>
								<td><?= $row['namadokter'] ?></td>
								<td><?= $row['spesialisasi'] ?></td>
								<td><?= $row['kualifikasi'] ?></td>
								<td><?= $row['jadwalkonsultasi'] ?></td>
								<td><?= $row['rumahsakit'] ?></td>
								<td>
									<a href="proses_dokter_edit.php" class="btn" title="Edit data"><i class="fa fa-edit"></i></a>
								</td>
							</tr>
						<?php } ?>
					<?php } else { ?>
						<tr>
							<td colspan="8">Tidak ada data</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php require_once 'bawah.php'; ?>
