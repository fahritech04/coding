<?php

    session_start();

    if(!isset($_SESSION['login'])){
        header('Location: ?page=login');
        exit;
    };

    $query = mysqli_query($koneksi, 'SELECT * FROM data_kelas');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
</head>

<body class="container">
    
    <div class="mt-3 mb-2">
        <a href="?page=input_kelas" class="btn btn-outline-primary">Input Kelas</a>
    </div>
    
    <table class="table table-striped table-dark">
        <thread class="thead-dark">
            <tr>
                <th>No</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thread>
        <?php $no=1; while($data = mysqli_fetch_object($query)){ ?>
        <tbody>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data->nama_kelas ?></td>
                
                <td>
                    <div class="btn-group">
                        <a href="?page=edit_kelas&id=<?=$data->id?>" class="btn btn-success me-2">Edit</a>
                        <a href='?page=delete_kelas&id=<?=$data->id?>' class="btn btn-danger">Delete</a>
                    </div>
                </td>
            </tr>
        </tbody>
        <?php 
        } ?>
    </table>

</body>

</html>