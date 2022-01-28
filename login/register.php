<?php

    include "../config.php";
    $uery   = mysqli_query($koneksi, "SELECT * FROM user");

    if(isset($_POST['register'])){

        $username   = $_POST['username'];
        $password   = $_POST['password'];

    }

?>

<body class="container">
 

<h2 class="text-center bg-warning py-2">REGISTER</h2>
<!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="col-6 mx-auto">
        <form action="" method="post">
            <div class="mb-3">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="password1" class="form-control" placeholder="Masukkan Password">
            </div>
            <div class="mb-3">
                <label for="">Konfirmasi Password</label>
                <input type="password" name="password2" class="form-control" placeholder="Konfirmasi Password">
            </div>
            <div class="btn-group">
                <a href="../siswa/index.php" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" name="register" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

</body>