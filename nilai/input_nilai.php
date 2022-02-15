<?php

    session_start();

    if(!isset($_SESSION['login'])){
        header('Location: ?page=login');
        exit;
    }


?>
<body class="container">    

    <div class="col-6">
        <form action="?page=simpan_nilai" method="post">
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
                <a href="?page=nilai" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>

</body>