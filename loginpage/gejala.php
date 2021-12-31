<?php
include "function.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>COVID CARE 19 ADMIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>



    <h1>COVID CARE 19 ADMIN</h1>
    <hr>

    <div class="menu">
        <ul id="navigasi">
            <li><a href="halaman_admin.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="#">Pemeriksaan</a>
                <ul>
                    <li><a href="gejala.php">Gejala</a></li>
                    <li><a href="hasil.php">Hasil</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <link rel="stylesheet" href="style.css">

    <h3> Data Gejala 1</h3>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Gejala</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include "koneksi.php";

        $no = 1;
        $ambildata = mysqli_query($koneksi, "select * from gejala");
        while ($tampil = mysqli_fetch_array($ambildata)) {
            $warna = ($no % 2 == 1) ? 'white' : '#eee';

            echo "
        <tr bgcolor='$warna'>
            <td>$no</td>
            <td>$tampil[nama_gejala]</td>
            <td><a href='?nama=$tampil[nama_gejala]'> <input type='button' class='btn-delete' </a></td>
            <td><a href='ubah-gejala.php?nama=$tampil[nama_gejala]'> <input type='button' class='btn-update' </a></td>
        <tr>";
            $no++;
        }
        ?>
    </table>

    <br />
    <a href="tambah-gejala.php" class='btn-update'>Tambah Gejala</a>
    <br />
    <br />

    <h3> Data Gejala 2 </h3>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Gejala</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include "koneksi.php";

        $no = 1;
        $ambildata = mysqli_query($koneksi, "select * from gejala1");
        while ($tampil = mysqli_fetch_array($ambildata)) {
            $warna = ($no % 2 == 1) ? 'white' : '#eee';

            echo "
        <tr bgcolor='$warna'>
            <td>$no</td>
            <td>$tampil[nama_gejala]</td>
            <td><a href='?nama=$tampil[nama_gejala]'> <input type='button' class='btn-delete' </a></td>
            <td><a href='ubah-gejala.php?nama=$tampil[nama_gejala]'> <input type='button' class='btn-update' </a></td>
        <tr>";
            $no++;
        }
        ?>
    </table>

    <br />
    <a href="tambah-gejala1.php" class='btn-update'>Tambah Gejala</a>
    <br />
    <br />

    <h3> Data Gejala 3 </h3>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Gejala</th>
            <th colspan="2">Aksi</th>
        </tr>

        <?php
        include "koneksi.php";

        $no = 1;
        $ambildata = mysqli_query($koneksi, "select * from gejala2");
        while ($tampil = mysqli_fetch_array($ambildata)) {
            $warna = ($no % 2 == 1) ? 'white' : '#eee';

            echo "
        <tr bgcolor='$warna'>
            <td>$no</td>
            <td>$tampil[nama_gejala]</td>
            <td><a href='?nama=$tampil[nama_gejala]'> <input type='button' class='btn-delete' </a></td>
            <td><a href='ubah-gejala.php?nama=$tampil[nama_gejala]'> <input type='button' class='btn-update' </a></td>
        <tr>";
            $no++;
        }
        ?>
    </table>

    <br />
    <a href="tambah-gejala2.php" class='btn-update'>Tambah Gejala</a>

    <div class="footer">
        Copyright &copy; 2021 - <a>covid care 19</a>
    </div>

</body>

<?php
include "koneksi.php";

if (isset($_GET['nama'])) {
    mysqli_query($koneksi, "delete  from gejala where nama_gejala='$_GET[nama]'");

    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='gejala.php'>";
}
