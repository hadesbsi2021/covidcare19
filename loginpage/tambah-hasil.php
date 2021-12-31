<h3> Tambah Hasil </h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="120"> Hasil </td>
            <td> <input type="text" name="hasil"> </td>
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
    mysqli_query($koneksi, "insert into hasil set hasil = '$_POST[hasil]'");

    echo "Data Gejala baru telah tersimpan";
    echo "<meta http-equiv=refresh content=1;URL='hasil.php'>";
}
