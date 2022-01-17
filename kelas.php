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
    <h2 class="text-center bg-warning py-2">DATA KELAS</h2>
    
    <?php
        
        include "./config.php";
        $query = mysqli_query($koneksi, 'SELECT * FROM data_kelas') ?>
        <a href="index.php"  class="btn btn-primary">Home</a>
        <a href="inputkelas.php" class="btn btn-primary">Data Baru</a>
        
        <table class="table table-bordered">
            <thread>
                <tr>
                    <th>No</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thread>
            <?php $no=1; while($data = mysqli_fetch_array($query)){ ?>
                <tbody>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama_kelas'] ?></td>
                        
                        <td>
                            <div class="btn-group">
                                <a href="edit_kelas.php?id=<?=$data["id"]?>" class="btn btn-success">Edit</a>
                                <a href='delete_kelas.php?id=<?=$data['id']?>' class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            <?php 
            } ?>
        </table>

</body>

</html>