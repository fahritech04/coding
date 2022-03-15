<?php

    session_start();

    if(!isset($_SESSION['login'])){
        header('Location: ?page=login');
        exit;
    };

    if(isset($_POST['search'])){
        $query = mysqli_query($koneksi, 
        'SELECT * FROM data_siswa join data_kelas on data_siswa.kelas_id = data_kelas.id
        WHERE nama_siswa LIKE "%' . $_POST['search'] . '%" ');
    } else {
        $query = mysqli_query($koneksi, 
        'SELECT * FROM data_siswa join data_kelas on data_siswa.kelas_id = data_kelas.id');
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>

<body class="container">    
<div class="d-flex justify-content-between mb-2">
    <div>
        <a href="?page=input_siswa" class="btn btn-primary mb-2">Input Siswa</a> 
    </div>
    <form action="" method="POST" class="col-3 d-flex">
        <input class="form-control me-2" name="search" placeholder="Search">
        <input type="submit" class="btn btn-warning" value="Search">
    </form>
</div>

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
                        <a href="?page=edit_siswa&id=<?=$data->id_siswa ?>" class="btn btn-success me-2">Edit</a>
                        <a href="?page=delete_siswa&id=<?=$data->id_siswa ?>" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        </tbody>
        <?php 
        } ?>
    </table>

</body>

</html>