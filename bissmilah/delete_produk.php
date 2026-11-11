<?php
include('koneksi.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    mysqli_query($db, "DELETE FROM produk WHERE produk_id='$id'");
}
header("location: index.php");
?>