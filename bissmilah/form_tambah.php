<?php
include('koneksi.php');

if(isset($_POST['posting'])){
    $nama_produk = mysqli_real_escape_string($db, $_POST['nama_produk']);
    $harga = mysqli_real_escape_string($db, $_POST['harga']);
    $stok = mysqli_real_escape_string($db, $_POST['stok']);

    mysqli_query($db, "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama_produk', '$harga', '$stok')");
    
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card-daftar">
        <form method="POST">
            <h1>Formulir Pendaftaran Produk</h1>
            <div>
                <label>Nama Produk:</label>
                <input type="text" name="nama_produk" class="input2" required>
            </div>
            <br>
            <div>
                <label>Harga:</label>
                <input type="number" step="0.01" name="harga" class="input2" required>
            </div>
            <br>
            <div>
                <label>Stok:</label>
                <input type="number" name="stok" class="input2" required>
            </div>
            <br>
            <button type="submit" name="posting" class="tombol">Posting</button>
        </form>
    </div>
</body>
</html>