<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success mb-3 rounded-bottom">
  <div class="container">
    <a class="navbar-brand" href="?page=siswa">Aplikasi Data Siswa</a>
    
    <div class="navbar-collapse">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="?page=siswa">Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="?page=kelas">Kelas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="?page=nilai">Nilai</a>
        </li>
    </ul>
    
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search">
        <button class="btn btn-outline-light me-2" type="submit">Search</button>
        <a href="?page=logout" class="btn btn-warning">Logout</a>
    </form>

    </div>

  </div>
</nav>

<?php

    include "config.php";
    include_once "route/router.php";

?>

</body>

</html>