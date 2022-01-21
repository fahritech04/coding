<?php
 include "../config.php";
        
 $query = mysqli_query($koneksi, "SELECT * FROM data_siswa JOIN nilai ON data_siswa.id = nilai.id_siswa");
 // $data = mysqli_fetch_object($query)
?>
<h2 class="text-center bg-warning py-2">INPUT DATA KELAS</h2>
<!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="col-6">
        <form action="../nilai/simpan_nilai.php" name="nilai" method="post">
        <select class="form-select" aria-label="Default select example">
         <option selected>Open this select menu</option>
         <?php while($data = mysqli_fetch_object($query)) { 
         ?>
         <option value="<?=$data->nama_siswa ?>"><?=$data->nama_siswa ?></option>
         <?php
         }
         ?>
        </select>
            <div class="btn-group">
                <a href="../nilai/nilai.php" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>