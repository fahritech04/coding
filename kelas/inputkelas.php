<?php

session_start();

if(!isset($_SESSION['login'])){
    header('Location: ?page=login');
    exit;
}

?>

<body class="container">
    
    <div class="col-6">
        <form action="?page=simpan_kelas" method="post">
            <div class="mb-3">
                <label for="">Nama Kelas</label>
                <input type="text" name="nama_kelas" class="form-control" placeholder="Ketik nama kelas">
            </div>
            <div class="btn-group">
                <a href="?page=kelas" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>

</body>