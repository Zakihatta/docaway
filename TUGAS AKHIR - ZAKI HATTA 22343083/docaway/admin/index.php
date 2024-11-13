<?php
    require_once 'atas.php';
?>

<?php
    require_once 'jelajah.php';
?>
        <?php
            include '../koneksi.php';
            $query = "SELECT * FROM beranda";
            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        ?>

    <div class="beranda-konten">
        <div class="beranda-kontainer">
            <div class="title">
                <h2>Hai, <?= $_SESSION['uname'] ?> </h2>
                
            </div>
            <div class="isi">
            <h3><?php echo $row['judul']; ?></h3>
                <h5><?php echo $row['tanggal']; ?></h5>
                <p><?php echo $row['isiberita']; ?></p>
            </div>
        </div>
    </div>
    <?php
        } else {
            echo "No data found.";
        }
        ?>

<?php
    require_once 'bawah.php';
?>