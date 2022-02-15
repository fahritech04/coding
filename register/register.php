<body class="container">

    <div class="col-6">
        <form action="?page=simpan_register" method="post">
            <div class="mb-3">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="pass" class="form-control" placeholder="Masukkan Password">
            </div>
            <div class="btn-group">
                <a href="?page=login" class="btn btn-warning">Batal</a>
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>

</body>