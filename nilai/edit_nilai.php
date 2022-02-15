<?php

    session_start();

    if(!isset($_SESSION['login'])){
        header('Location: ?page=login');
        exit;
    }

    $query  = mysqli_query($koneksi, "SELECT id_siswa, nama_siswa, nilai FROM data_nilai JOIN data_siswa ON data_nilai.siswa_id = data_siswa.id_siswa WHERE siswa_id='$_GET[id]'");
    $data   = mysqli_fetch_object($query);
?>
<body class="container">    

    <div class="col-6">
        <form action="?page=update_nilai" method="post">
            <input type="hidden" name="siswa_id" value="<?=$data->id_siswa ?>">
            <div class="mb-3">
                <label for="">Nama Siswa</label>
                <input type="text" name="nama_siswa" readonly class="form-control" value="<?=$data->nama_siswa ?>">
            </div>
            <div class="mb-3">
                <label for="">Nilai</label>
                <input type="number" name="nilai" class="form-control" value="<?=$data->nilai ?>">
            </div>
           
            <div class="btn-group">
                <a href="?page=nilai" class="btn btn-warning">Batal</a>
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
        </form>
    </div>

</body>