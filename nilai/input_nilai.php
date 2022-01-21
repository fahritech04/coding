<?php
 include "../config.php";

 $query = mysqli_query($koneksi, "SELECT * FROM data_siswa");

?>

<!-- CDN Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
<h2 class="text-center bg-warning py-2">INPUT NILAI SISWA</h2>
<div class="my-3 d-flex justify-content between">
 <div>
  <a href="../siswa/index.php" class="bg-danger p-2 mr-2 text-decoration-none text-white">Data Siswa</a>
  <a href="../kelas/kelas.php" class="bg-danger p-2 mr-2 text-decoration-none text-white">Data Kelas</a>
 </div>
</div>

  <div class="col-6">
    <form action="../nilai/simpan_nilai.php" method="post">

    <table class="table table-bordered">
        <thread>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Nilai</th>
          </tr>
        </thread>
        <?php $no=1; while($data = mysqli_fetch_array($query)){ ?>
          <tbody>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $data['nama_siswa'] ?></td>
              <td>                         
                <input type="number" name="nilai" class="form-control" placeholder="Isi Nilai">
              </td>
            </tr>
          </tbody>
        <?php 
        } ?>
    </table>            
      <div class="btn-group">
        <a href="../nilai/nilai.php" class="btn btn-warning">Batal</a>
        <input type="submit" value="Simpan" class="btn btn-primary">
      </div>
    </form>
  </div>

</div>