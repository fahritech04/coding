 <?php
 
    include "../config.php";
    $query = mysqli_query($koneksi, "SELECT * FROM data_kelas");
 
 ?>
 <body class="container">
     
 
 <h2 class="text-center bg-warning py-2">APLIKASI DATA SISWA</h2>
<!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="col-6">
        <form action="../siswa/simpan.php" method="post">
            <div class="mb-3">
                <label for="">Nama Siswa</label>
                <input type="text" name="nama_siswa" class="form-control" placeholder="Ketik nama siswa">
            </div>
            <div class="mb-3">
                <label>kelas</label>
                <select name="kelas_id" class="form-control form-select">
                <option disabled selected> Pilih Kelas </option>
                    <?php 
                        while ($kelas = mysqli_fetch_object($query)) {
                    ?>
                        <option value="<?=$kelas->id?>"><?=$kelas->nama_kelas?></option> 
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label>No. Handphone</label>
                <input type="number" name="no_hp" class="form-control">
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" placeholder="Ketik alamat disini"></textarea>
            </div>
            <div class="btn-group">
                <a href="../siswa/index.php" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

</body>