<?php

// session_start();

// if(!isset($_SESSION['login'])){
//     header('Location: ../login/login.php');
//     exit;
// }

?>

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
    <h2 class="text-center bg-success text-white py-2">APLIKASI DATA SISWA</h2>
    <div class="my-3 d-flex justify-content-between">
        <div>
            <a href="index.php?page=siswa" class="bg-primary p-2 mr-2 text-decoration-none text-white">Data Siswa</a>
            <a href="index.php?page=kelas" class="bg-danger p-2 mr-2 text-decoration-none text-white">Data Kelas</a>
            <a href="index.php?page=nilai" class="bg-warning p-2 mr-2 text-decoration-none text-white">Data Nilai</a>
            <div class="mt-3">
                <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="addon-wrapping">
            </div>
        </div>
        <div>
                <a href="../logout.php" class="bg-danger p-2 mr-2 text-decoration-none text-white ">Logout</a>
        </div>
    </div>
    
    <?php
    
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch($page) {
                // siswa
                case 'siswa':
                    include "siswa/siswa.php";
                    break;
                case 'input?siswa':
                    include "siswa/input.php";
                    break;
                case 'edit?siswa':
                    include "siswa/edit.php";
                    break;
                case 'simpan?siswa':
                    include "siswa/simpan.php";
                    break;
                case 'update?siswa':
                    include "siswa/update.php";
                    break;
                case 'delete?siswa':
                    include "siswa/delete.php";
                    break;

                // Kelas
                case 'kelas':
                    include "kelas/kelas.php";
                    break;
                case 'input?kelas':
                    include "kelas/inputkelas.php";
                    break;
                case 'edit?kelas':
                    include "kelas/edit_kelas.php";
                    break;
                case 'simpan?kelas':
                    include "kelas/simpan_kelas.php";
                    break;
                case 'update?kelas':
                    include "kelas/update_kelas.php";
                    break;
                case 'delete?kelas':
                    include "kelas/delete_kelas.php";
                    break;

                // nilai
                case 'nilai':
                    include "nilai/nilai.php";
                    break;
                case 'input?nilai':
                    include "nilai/input_nilai.php";
                    break;
                case 'edit?nilai':
                    include "nilai/edit_nilai.php";
                    break;
                case 'simpan?nilai':
                    include "nilai/simpan_nilai.php";
                    break;
                case 'update?nilai':
                    include "nilai/update_nilai.php";
                    break;
                case 'delete?nilai':
                    include "nilai/delete_nilai.php";
                    break;
                default:
                    echo "<center><h3>Maaf, Halaman tidak di temukan</h3></center>";
                    break;
            }
        } else {
            include "siswa/siswa.php";
        }
    
    ?>

</body>

</html>