<?php

    session_start();

    if(!isset($_SESSION['login'])){
        header('Location: ../login/login.php');
        exit;
    }

    include "../config.php";

    $query  = mysqli_query($koneksi, "SELECT * FROM data_siswa JOIN data_kelas ON data_siswa.kelas_id = data_kelas.id WHERE id_siswa='$_GET[id]'");
    $data   = mysqli_fetch_object($query);
?>
<body class="container">
    

<h2 class="text-center bg-success text-white py-2">APLIKASI DATA SISWA</h2>
<!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="col-6">
        <form action="../siswa/update.php" method="POST">
            <input type="hidden" name="id_siswa" value="<?=$data->id_siswa ?>">
            <div class="mb-3">
                <label for="">Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" value="<?= $data->nama_siswa ?>">
            </div>
            <div class="mb-3">
                <label for="kelas_id">kelas</label>
                <select name="kelas_id" class="form-control form-select">
                <option disabled selected> Pilih Kelas </option>
                    <?php 
                        $sql = mysqli_query($koneksi, "SELECT * FROM data_kelas");
                        while ($kelas = mysqli_fetch_object($sql)) {
                    ?>
                        <option value="<?= $kelas->id ?>"> <?= $kelas->nama_kelas ?> </option> 
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label>No. Handphone</label>
                <input type="number" name="no_hp" class="form-control" value="<?= $data->no_hp ?>">
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control"><?= $data->alamat?></textarea>
            </div>
            <div class="btn-group">
                <a href="../siswa/index.php" class="btn btn-warning">Batal</a>
                <input type="submit" value="Update" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

</body>