<?php
    include "../config.php";

    $query  = mysqli_query($koneksi, "SELECT id_siswa, nama_siswa, nilai FROM data_nilai JOIN data_siswa ON data_nilai.siswa_id = data_siswa.id_siswa WHERE id_siswa='$_GET[id]'");
    $data   = mysqli_fetch_object($query);
?>
<h2 class="text-center bg-warning py-2">EDIT DATA KELAS</h2>
<!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="col-6">
        <form action="../nilai/update_nilai.php" method="post">
            <input type="hidden" name="id_siswa" value="<?=$data->id_siswa ?>">
            <div class="mb-3">
                <label for="">Nama Siswa</label>
                <input type="text" name="nama_siswa" readonly class="form-control" value="<?=$data->nama_siswa ?>">
            </div>
            <div class="mb-3">
                <label for="">Nilai</label>
                <input type="number" name="nilai" class="form-control" value="<?=$data->nilai ?>">
            </div>
           
            <div class="btn-group">
                <a href="../nilai/nilai.php" class="btn btn-warning">Batal</a>
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>