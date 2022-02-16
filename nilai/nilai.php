<?php

    session_start();

    if(!isset($_SESSION['login'])){
        header('Location: ?page=login');
        exit;
    };

    $query  = mysqli_query($koneksi, "SELECT siswa_id, nama_siswa, nilai FROM data_nilai JOIN data_siswa ON data_nilai.siswa_id = data_siswa.id_siswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai</title>
</head>

<body class="container">    

    <div class="mt-3 mb-2">
        <a href="?page=input_nilai" class="btn btn-outline-primary">Input Nilai</a>
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
                        <a href="?page=edit_nilai&id=<?= $data->siswa_id?>" class="btn btn-success me-2">Edit</a>
                        <a href="?page=delete_nilai&id=<?= $data->siswa_id?>" class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        </tbody>
        <?php 
        } ?>
    </table>

</body>

</html>