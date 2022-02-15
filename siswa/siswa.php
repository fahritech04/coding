<?php

    session_start();

    if(!isset($_SESSION['login'])){
        header('Location: ?page=login');
        exit;
    };

    $query = mysqli_query($koneksi, "SELECT * FROM data_siswa join data_kelas on data_siswa.kelas_id = data_kelas.id");

    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b>Hasil pencarian : ".$cari."</b>";
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

        <form class="row g-1 mb-3" action="" method="get">
            <div class="col-3">
                <input type="text" name="cari" class="form-control" placeholder="Search">
            </div>
            <div class="col-auto">
                <input type="submit" value="Cari" class="btn btn-primary">
            </div>
        </form>

    <a href="?page=input_siswa" class="btn btn-primary">Data Baru</a> 
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
        <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi, "SELECT * FROM data_siswa JOIN data_kelas on data_siswa.kelas_id = data_kelas.id WHERE nama_siswa LIKE '%$cari%' ");				
        }else{
            $data = mysqli_query($koneksi, "SELECT * FROM data_siswa JOIN data_kelas on data_siswa.kelas_id = data_kelas.id");		
        }
        $no=1; 
        while($data = mysqli_fetch_object($data)){ ?>
        <tbody>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data->nama_siswa ?></td>
                <td><?= $data->nama_kelas ?></td>
                <td><?= $data->no_hp ?></td>
                <td><?= $data->alamat ?></td>
                <td>
                    <div class="btn-group">
                        <a href="?page=edit_siswa&id=<?=$data->id_siswa ?>" class="btn btn-success">Edit</a>
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