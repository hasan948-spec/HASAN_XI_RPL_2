<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <h1>daftar produk</h1>
        <a href="form_tambah.php" class="btn">+ Tambah baru</a>
        <button style="border: none;"><a href="inpt_login.php" class="logout">Logout</a></button>
        <table border="1" class="table-form">
                <tr>
                    <th class="nyilik">No.</th>
                    <th>Nama Produk</th>
                    <th>harga</th>
                    <th>stok produk</th>
                    <th>aktivitas</th>
                </tr>
                <?php
                $query = mysqli_query($db, "SELECT * FROM produk");
                $no = 1;
                while($produk = mysqli_fetch_assoc($query)):
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($produk['nama_produk'])?></td>
                    <td><?= htmlspecialchars($produk['harga'])?></td>
                    <td><?= htmlspecialchars($produk['stok'])?></td>
                    <td>
                        <a href="edit_produk.php?id=<?= $produk['produk_id'] ?>" >Edit</a>
                        <a href="delete_produk.php?id=<?= $produk['produk_id'] ?>">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
        </table>
    </div>
    
</body>
</html>