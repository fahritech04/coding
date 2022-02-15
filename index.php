<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        </div>
        <div>
            <a href="index.php?page=logout" class="bg-danger p-2 mr-2 text-decoration-none text-white ">Logout</a>
        </div>
    </div>
    
    <?php 
    
    include "config.php";
    include_once "route/router.php";
    
    ?>

</body>

</html>