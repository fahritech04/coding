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
    <h2 class="text-center bg-warning py-2">APLIKASI DATA SISWA</h2>
    <div class="my-3 d-flex justify-content-between">
        <div>
            <a href="../kelas/kelas.php" class="bg-danger p-2 mr-2 text-decoration-none text-white">Data Kelas</a>
            <a href="../nilai/nilai.php" class="bg-warning p-2 mr-2 text-decoration-none text-white">Data Nilai</a>
            <a href="../login/register.php" class="bg-success p-2 mr-2 text-decoration-none text-white ">Register</a>
        </div>
    </div>
    
    <?php
        
        include "../config.php";
        
        $query = mysqli_query($koneksi, "SELECT * FROM data_siswa join data_kelas on data_siswa.kelas_id = data_kelas.id");
        
        ?>
        <a href="../siswa/input.php" class="btn btn-primary">Data Baru</a> 
        <table class="table table-striped table-dark">
            <thread class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Nomor HP</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thread>
            <?php $no=1; while($data = mysqli_fetch_object($query)){ ?>
                <tbody>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data->nama_siswa ?></td>
                        <td><?= $data->nama_kelas ?></td>
                        <td><?= $data->no_hp ?></td>
                        <td><?= $data->alamat ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="../siswa/edit.php?id=<?=$data->id_siswa ?>" class="btn btn-success">Edit</a>
                                <a href="../siswa/delete.php?id=<?=$data->id_siswa ?>" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            <?php 
            } ?>
        </table>

</body>

</html>