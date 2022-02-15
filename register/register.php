
<body class="container">
 

<h2 class="text-center bg-success text-white py-2">REGISTER</h2>
<!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">
    <div class="col-6 mx-auto">
        <form action="index.php?page=simpan?register" method="post">
            <div class="mb-3">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="pass" class="form-control" placeholder="Masukkan Password">
            </div>
            <div class="btn-group">
                <a href="index.php?page=login" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

</body>