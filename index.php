<!-- MasBackend.com™ -->
<!-- Credit -->
<!-- ©Ilham 2022-2024 -->
<!-- ©Kevin A.K.A Vincent 2022-2024 -->

<!DOCTYPE html>

<!-- Konekas Ke Database -->
<?php
    // Header
    include 'header.php';

    session_start();
    
    // Jika belum login akan diarahkan ke halaman login
    if(isset($_SESSION["loggedin"]) == false){
        header("location: login.php");
        exit;
    }

    require_once "process/koneksi.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css"/>
    <link rel="stylesheet" href="css/index.css">
</head>
<body oncontextmenu="return false">
    <!-- Loader Page -->
    <div id="loader-wrapper">
        <h2>Loading...</h2>
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    
    <!-- Bagian Daftar Tamu -->
    <div class="daftar_tamu animate_animated animate__bounceOut">
        <h1>DAFTAR TAMU</h1>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for NIK.." title="Type in a name">
        <table id="tamu">
            <tr class="header_table">
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
                include_once 'process/koneksi.php';

                // Query Data Tamu
                $sql = "SELECT * FROM tb_tamu;";
                $queryRes = mysqli_query($conn,$sql);
                while($hasilTamu = mysqli_fetch_array($queryRes)){
                    
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

            <?php } ?>
        </table>
    </div>

    <!-- Bagian Tambah Tamu -->
    
    <div class="form_tamu animate_animated animate_bounceOut">
        <h1>FORMULIR TAMU</h1>
        <form  action="process/input.php" method="GET" class="form-tamu">
                <label for="nik"> NIK/NIP: <input type="number" name="nik" id="nik" placeholder="Masukan NIK anda" required></label>
                <label for="nama"> Nama: <input type="text" name="nama" id="nama" placeholder="Masukan nama anda" required></label>
                <label for="insta"> Instansi/Perusahaan: <input type="text" name="instansi" id="insta" placeholder="Masukan nama instansi/perusahaan anda" required></label>
                <label for="alamat"> Alamat: <input type="text" name="alamat" id="alamat" placeholder="Masukan alamat anda" required></label>
                <label for="telp"> No-Telepon: <input type="tel" name="telpon" id="telp" placeholder="Masukan No Handphone anda" required></label>
                <label for="tgl"> Tanggal Kunjungan: <input type="date" name="tgl" id="tgl" required></label>
                <label for="bidang"> Bidang Kejuruan: 
                    <select name="bidang" id="bidang">
                        <option value="" selected="true" disabled="disabled">Bidang yang ingin dikunjung:</option>
                        <option value="Kepala Balai" > Kepala Balai </option>
                        <option value="Tata Usaha dan Kepegawaian" > Tata Usaha dan Kepegawaian </option>
                        <option value="Bidang Penyelenggara" > Bidang Penyelenggara </option>
                        <option value="Bidang program dan evaluasi" > Bidang program dan evaluasi </option>
                        <option value="TIK" > TIK </option>
                        <option value="Elektro" > Elektro </option>
                        <option value="Pariwisata" > Pariwisata </option>
                        <option value="Refrigeration dan Welding" > Refrigeration dan Welding </option>
                    </select>
                </label>
                <label for="ket"> Keterangan: <textarea name="ket" id="ket" cols="50" rows="10" placeholder="Jumlah Orang atau Nama Rombongan"></textarea></label>
                <input type="submit" value="Input" name="input">  
        </form>
    </div>

    <!-- Search Bar Table -->
    <script src="js/searchbar.js"></script>

    <!-- Loader -->
    <script src="js/loader.js"></script>

</body>

<!-- Footer -->
<?php
    include 'footer.php';
?>
</html>
