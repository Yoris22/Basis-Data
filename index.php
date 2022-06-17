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
              $sql = "SELECT * FROM pegawai"
              $query = mysqli_query($db, $sql);

              while ($hasil = mysqli_fetch_array($query)) {
                  echo "<tr>";
                  echo "<td>" . $hasil['NIP'] . "</td>";
                  echo "<td>" . $hasil['NAMA'] . "</td>";
                  echo "<td>" . $hasil['KOTA'] . "</td>";
                  echo "<td>" . $hasil['TGL_LAHIR'] . "</td>";
                  //merubah jenis kelamin L menjadi laki-laki, P menjadi perempuan
                  if ($hasil['JK'] == 'L') {
                      echo "<td>laki-laki</td>";
                  } else {
                      echo "<td>perempuan</td>";
                  }
                  echo "<td>" . $hasil{'KJ'} . "</td>";
                  echo "</tr>";
               
                }
                ?>
            </tbody>
        </table>
        <p>Total data: <?php echo mysqli_num_rows($query) ?></p>

 </body>
 </html>
