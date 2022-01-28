<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Data Siswa</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="container">
    <h2 class="text-center bg-warning py-2">DATA NILAI</h2>
    
    <?php
        
        include "../config.php";
        $query  = mysqli_query($koneksi, "SELECT siswa_id, nama_siswa, nilai FROM data_nilai JOIN data_siswa ON data_nilai.siswa_id = data_siswa.id_siswa")?>
        <a href="../siswa/index.php"  class="btn btn-danger">Data Siswa</a>
        <a href="../kelas/kelas.php"  class="btn btn-warning">Kelas</a>
        <div class="mt-3 mb-2">
            <a href="../nilai/input_nilai.php" class="btn btn-primary">Input Nilai</a>
        </div>
        
        <table class="table table-striped table-dark">
            <thread class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nilai</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thread>
            <?php $no = 1; while($data = mysqli_fetch_object($query)){?>
                <tbody>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data->nama_siswa ?></td>
                        <td><?= $data->nilai ?></td>               
                        <td><?php
                         if($data->nilai < 75){
                          echo "<span class='badge bg-danger'>Tidak Tuntas</span>";
                         }else {
                          echo "<span class='badge bg-primary'>Tuntas</span>";
                         }
                        ?></td>
                        <td>
                            <div class="btn-group">
                            <a href="../nilai/edit_nilai.php?id=<?= $data->siswa_id?>" class="btn btn-success">Edit</a>
                            <a href="../nilai/delete_nilai.php?id=<?= $data->siswa_id?>" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            <?php 
            } ?>
        </table>

</body>

</html>