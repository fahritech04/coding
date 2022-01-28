<?php

    session_start();

    if(!isset($_SESSION['login'])){
        header('Location: ../login/login.php');
        exit;
    }

    include "../config.php";

?>
<body class="container">
    

<h2 class="text-center bg-success text-white py-2">INPUT DATA NILAI</h2>
<!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="col-6">
        <form action="../nilai/simpan_nilai.php" method="post">
            <div class="mb-3">
            <select name="siswa_id" class="form-control form-select">
                <option disabled selected> Pilih Nama </option>
                    <?php 
                        $sql = mysqli_query($koneksi, "SELECT * FROM data_siswa");
                        while ($siswa = mysqli_fetch_object($sql)) {
                    ?>
                        <option value="<?=$siswa->id_siswa?>"><?=$siswa->nama_siswa?></option> 
                    <?php
                    }
                    ?>
            </select>
            </div>
            <div class="mb-3">
                <label for="">Input Nilai</label>
                <input type="number" name="nilai" class="form-control" placeholder="Input Nilai 0 - 100">
            </div>
            <div class="btn-group">
                <a href="../kelas/kelas.php" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

</body>