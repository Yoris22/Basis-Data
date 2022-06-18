<?php
include "config.php";
?>
<!DOCTYPE html>
<html>

</head>
     <tittle> Basis Data 2 phpmyadmin</tittle>
</head>

<body>
    </--menampilkan tabel pegawai -->
    <h3>Isi Tabel Pegawai</h3>
    <table border="1">
        <thead>
            <tr>
                <th>NIP</th>
                <th>NAMA</th>
                <th>KOTA</th>
                <th>TGL_LAHIR</th>
                <th>JK</th>
                <th>KJ</th>
            </tr>
          </thead>
          <tbody>
                <?php
                    $sql = "SELECT * FROM pegawai";
                    $query = mysqli_query($db, $sql);
                ?>
                <?php while ($hasil = mysqli_fetch_array($query)): ?>
                    <tr>
                        <td><?= $hasil['nip'] ?></td>
                        <td><?= $hasil['nama'] ?></td>
                        <td><?= $hasil['kota'] ?></td>
                        <td><?= $hasil['tgl_lahir'] ?></td>
                        <?php if ($hasil['jk'] == 'L'): ?>
                            <td>laki-laki</td>
                        <?php else: ?>
                            <td>perempuan</td>
                        <?php endif; ?>
                        <td><?= $hasil['kj'] ?></td>";
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <p>Total data: <?php echo mysqli_num_rows($query) ?></p>

 </body>
 </html>
