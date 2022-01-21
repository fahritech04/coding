<?php
    include "./config.php";

    // $query  = mysqli_query($koneksi, "SELECT * FROM data_siswa WHERE id='$_GET[id]'");
    $query = mysqli_query($koneksi, "SELECT * FROM data_siswa JOIN nilai ON data_siswa.id = nilai.id_siswa");
    $data   = mysqli_fetch_object($query);
?>
<h2 class="text-center bg-warning py-2">INPUT NILAI SISWA</h2>
<!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="col-6">
        <form action="simpan_nilai.php" method="POST">
            <input type="hidden" name="id" value="<?=$data->id ?>">
            <div class="mb-3">
                <label>Nama Siswa</label>
                <select name="kelas_id" class="form-control">
                    <option value="<?=$data->nama_siswa ?>"><?=$data->nama_siswa ?></option>
                </select>
            </div>
            <div class="mb-3">
                <label>Nilai</label>
                <input type="number" name="nilai" class="form-control" value="<?=$data->nilai ?>">
            </div>
            <div class="btn-group">
                <a href="index.php" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>