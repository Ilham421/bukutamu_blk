<link rel="stylesheet" href="../css/index.css">

<?php

    include_once 'koneksi.php';

    // Assign variable dari GET
    $nip = $_GET['nik'];
    $nama = $_GET['nama'];
    $instansi = $_GET['instansi'];
    $alamat = $_GET['alamat'];
    $telp = $_GET['telpon'];
    $tgl = $_GET['tgl'];
    $bidang = $_GET['bidang'];
    $ket = $_GET['ket'];


    // Query Input ke table tamu
    $sql = "INSERT INTO tb_tamu VALUES(
        '{$nip}',
        '{$nama}',
        '{$instansi}',
        '{$alamat}',
        '{$telp}',
        '{$tgl}',
        '{$bidang}'
        ,'{$ket}');";
    // Jalankan Query
     mysqli_query($conn,$sql);
?>

<table id="tamu">
         <tr>
            <th>NIK/NIP</th>
            <th>Nama</th>
            <th>Instansi/Perusahaan</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Tanggal Kunjungan</th>
            <th>Bidang Kejuruan</th>
            <th>Keterangan</th>
         </tr>
         <?php

            $sql = "SELECT * FROM tb_tamu WHERE nik='{$nip}'";
            $secQueryRes = mysqli_query($conn,$sql);
            $hasilTamu = mysqli_fetch_assoc($secQueryRes);
         ?>
          <tr>
            <td><?= $hasilTamu['NIK'] ?></td>
            <td><?= $hasilTamu['Nama'] ?></td>
            <td><?= $hasilTamu['Instansi'] ?></td>
            <td><?= $hasilTamu['Alamat'] ?></td>
            <td><?= $hasilTamu['NoHp'] ?></td>
            <td><?= $hasilTamu['Tgl_visit'] ?></td>
            <td><?= $hasilTamu['Bidang'] ?></td>
            <td><?= $hasilTamu['Ket'] ?></td>
          </tr>
    </table>

    <button><a href="../index.php">Kembali</a></button>