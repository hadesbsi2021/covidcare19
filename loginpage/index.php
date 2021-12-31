<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '' , 'covidcare19') or die ('Unable to connect');

?>

<!DOCTYPE html>
<html>
<head>
 <title>LOGIN</title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="panel_login">
    <p class = "tulisan_atas">ADMIN LOGIN</p>
    
        <form action = "index.php" method = "post">
            <label>Username</label>
            <input type = "text" class = "form_login" name = "Username" style="wight : 50px" placeholder = "Username" required = ""><br/>
            <label>Password</label>
            <input type = "Password" class = "form_login" name = "Password" placeholder = "Password" required = ""><br/>
            <input type = "submit" class = "tombol_login" name = "login" value = "Login">
            <br/>
            <br/>
        </form>
</div>

<?php
    if (isset($_POST['login'])){
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];

    $select = mysqli_query($conn," SELECT * FROM login WHERE Username = '$Username' AND Password = '$Password' ");
    $row  = mysqli_fetch_array($select);

    if(is_array($row)) {
        $_SESSION["Username"] = $row['Username'];
        $_SESSION["Password"] = $row['Password'];
    }   else {
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid Username or Password!");';
        echo 'window.location.href = "index.php" ';
        echo '</script>';
    }
    }
    if(isset($_SESSION["Username"])){
        header("Location:halaman_admin.php");
    }
?>

</body>
</html>