<?php
include "koneksi.php";

$sql = mysqli_query($koneksi, "select * from gejala where nama_gejala='$_GET[nama]'");
$data = mysqli_fetch_array($sql);

?>

<h3> Ubah Data Gejala </h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="120"> Nama Gejala </td>
            <td> <input type="text" name="nama_gejala" value="<?php echo $data['nama_gejala']; ?>"> </td>
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
    mysqli_query($koneksi, "update gejala set where nama_gejala ='$_POST[nama_gejala]'");

    echo "Data Gejala telah diubah";
    echo "<meta http-equiv=refresh content=1;URL='gejala-nama.php'>";
}

?>