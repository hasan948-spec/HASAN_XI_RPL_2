<?php
include('koneksi.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login_admin WHERE username='$username' AND email='$email' AND password='$password'";
    $query = mysqli_query($db, $sql);

    $tum=mysqli_num_rows($query);
    if ($tum > 0) {
        header("Location: index.php");
        echo "Login berhasil";
    } else {
        header("location: form_login.php?error=login");
    }
}else{
    echo "isi semua formulir";
}
?>