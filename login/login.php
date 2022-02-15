<?php

session_start();

if(isset($_SESSION['login'])){
    header('Location: ?page=login');
    exit;
}

?>

<body class="container">
 
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-success text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <form action="index.php?page=simpan_login" method="post">
            <div class="mb-md-5 mt-md-4 pb-5">
             
            <!-- logo -->
             <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
             <img src="skawan.png" class="col-3 mb-3 mt-3" alt="logo smk">
             
              <!-- username -->
              <div class="form-outline form-white mb-3">
                <input type="text" name="username" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Username</label>
              </div>

              <!-- password -->
              <div class="form-outline form-white mb-3">
                <input type="password" name="pass" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <!-- button Group -->
              <div class="btn-group">
               <div class="me-2">
                <a href="?page=register" class="btn btn-warning btn-lg">Register</a>
               </div>
               <div class="me-2">
                <input type="submit" value="Login" class="btn btn-light btn-lg">
               </div>
              </div>


            </div>
            </form>


          </div>
        </div>
      </div>
    </div>

</body>