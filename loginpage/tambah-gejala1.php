<h3> Tambah Gejala </h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="120"> Nama Gejala </td>
            <td> <input type="text" name="nama_gejala"> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="proses" value="Simpan"> </td>
        </tr>
    </table>

</form>

<?php
include "koneksi.php";

if (isset($_POST['proses'])) {
    mysqli_query($koneksi, "insert into gejala1 set nama_gejala = '$_POST[nama_gejala]'");

    echo "Data Gejala baru telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='gejala.php'>";
}

?>