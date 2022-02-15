<?php

session_start();

if(!isset($_SESSION['login'])){
    header('Location: index.php?page=login');
    exit;
}

?>

<body class="container">
    

<!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="col-6">
        <form action="index.php?page=simpan?kelas" method="post">
            <div class="mb-3">
                <label for="">Nama Kelas</label>
                <input type="text" name="nama_kelas" class="form-control" placeholder="Ketik nama kelas">
            </div>
            <div class="btn-group">
                <a href="index.php?page=kelas" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

</body>