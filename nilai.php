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
    <h2 class="text-center bg-warning py-2">NILAI SISWA</h2>
    <div class="my-3 d-flex justify-content between">
        <div>
            <a href="../coding/siswa/index.php" class="bg-danger p-2 mr-2 text-decoration-none text-white">Data Siswa</a>
            <a href="../coding/kelas/kelas.php" class="bg-danger p-2 mr-2 text-decoration-none text-white">Data Kelas</a>
            <a href="nilai.php" class="bg-warning p-2 mr-2 text-decoration-none text-white">Nilai</a>
        </div>
    </div>
    
    <?php
        
        include "./config.php";
        
        $query = mysqli_query($koneksi, 'SELECT * FROM data_siswa JOIN nilai ON data_siswa.id = nilai.id_siswa') ?>
        <a href="inputnilai.php" class="btn btn-primary">Input Nilai</a> 
        <table class="table table-bordered">
            <thread>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nilai</th>
                    <th>Aksi</th>
                </tr>
            </thread>
            <?php $no=1; while($data = mysqli_fetch_array($query)){ ?>
                <tbody>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama_siswa'] ?></td>
                        <td><?= $data['nilai'] ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="edit.php?id=<?=$data["id"]?>" class="btn btn-success">Edit</a>
                                <a href='delete.php?id=<?=$data['id']?>' class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            <?php 
            } ?>
        </table>

</body>

</html>