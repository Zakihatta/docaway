<div class="footer">
        <div class="column">
            <h4>NIM</h4>
            <ul>
                <?php
                require '../koneksi.php';
                $query_select = 'SELECT nim FROM footer';
                $run_query_select = mysqli_query($conn, $query_select);
                while ($row = mysqli_fetch_assoc($run_query_select)) {
                    echo '<li>' . $row['nim'] . '</li>';
                }
                ?>
            </ul>
        </div>
        <div class="column">
            <h4>Nama Lengkap</h4>
            <ul>
                <?php
                $query_select = 'SELECT namalengkap FROM footer';
                $run_query_select = mysqli_query($conn, $query_select);
                while ($row = mysqli_fetch_assoc($run_query_select)) {
                    echo '<li>' . $row['namalengkap'] . '</li>';
                }
                ?>
            </ul>
        </div>
        <div class="column">
            <h4>Prodi</h4>
            <ul>
                <?php
                $query_select = 'SELECT prodi FROM footer';
                $run_query_select = mysqli_query($conn, $query_select);
                while ($row = mysqli_fetch_assoc($run_query_select)) {
                    echo '<li>' . $row['prodi'] . '</li>';
                }
                ?>
            </ul>
        </div>
    </div>