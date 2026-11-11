<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="side1">
        <div class="text">
            <h3>Welcome back</h3>
            <h1>Please login as <br>an officer</h1>
            <p>This is website kasir online this <br> website allows you to manage <br>your inventory and sales efficiently.</p>
        </div>
        <div class="form-petugas">
            <form action="proses_login.php" method="POST">
                <h2 style="text-align: center;margin-bottom:7px;">Login</h2>
        <p>
        <label>Username</label>
        <input type="text" placeholder="masukkan username" name="username">
    </p>
    <p>
        <label>Email</label>
        <input type="email" placeholder="masukkan email" name="email">
    </p>
    <p>
        <label>Password</label>
        <input type="password" placeholder="masukkan username" name="password">
    </p>
    <button type="submit" name="login">click</button>
    </form>
    <?php
    $error='';
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
    }
    $pesan = '';
    if ($error == 'login'){
        $pesan = 'Username atau password salah.';
    } elseif ($error == 'invalid') {
        $pesan = 'Anda harus login terlebih dahulu.';
    }
    if ($pesan!==''){
        echo $pesan;
    }
    ?>
        </div>
    </div>
</body>
</html>