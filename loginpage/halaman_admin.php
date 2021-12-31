<?php
include "function.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>COVID CARE 19 ADMIN</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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

    <div class="footer">
        Copyright &copy; 2021 - <a>covid care 19</a>
    </div>

</body>

</html>