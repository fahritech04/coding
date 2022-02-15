<?php

    session_start();

    if(!isset($_SESSION['login'])){
        header('Location: ?page=login');
        exit;
    };

    $query  = mysqli_query($koneksi, "SELECT * FROM data_kelas WHERE id='$_GET[id]'");
    $data   = mysqli_fetch_object($query);
?>
<body class="container">    

    <div class="col-6">
        <form action="?page=update_kelas" method="post">
            <input type="hidden" name="id" value="<?=$data->id ?>">
            <div class="mb-3">
                <label for="">Nama Kelas</label>
                <input type="text" name="nama_kelas" class="form-control" value="<?=$data->nama_kelas ?>">
            </div>
           
            <div class="btn-group">
                <a href="?page=kelas" class="btn btn-warning">Batal</a>
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
        </form>
    </div>

</body>