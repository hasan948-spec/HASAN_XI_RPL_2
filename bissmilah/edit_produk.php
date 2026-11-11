<?php
include('koneksi.php');

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$produk_id = $_GET['id'];

$query = mysqli_query($db, "SELECT * FROM produk WHERE produk_id='$produk_id'");
$produk = mysqli_fetch_assoc($query);

if(isset($_POST['posting'])){
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    
    mysqli_query($db, "UPDATE produk SET nama_produk='$nama_produk', harga='$harga', stok='$stok' WHERE produk_id='$produk_id'");
    
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card-daftar">
    <form method="POST">
        <h1>Form edit Produk</h1>
        <div>
            <label>nama produk:</label>
            <input type="text" name="nama_produk" class="input2" value="<?php echo $produk['nama_produk']; ?>" required>
        </div>
        <br>
        <div>
            <label>harga:</label>
            <input type="text" name="harga" class="input2" value="<?php echo $produk['harga']; ?>" required>
        </div>
        <br>
        <div>
            <label>stok:</label>
            <input type="text" name="stok" class="input2" value="<?php echo $produk['stok']; ?>" required>
        </div>
        <br>
        <button type="submit" name="posting" class="tombol">Simpan</button>
    </form>
    </div>
</body>
</html>