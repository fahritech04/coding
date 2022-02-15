<?php
 session_start();

 $username  = $_POST['username'];
 $pass      = $_POST['pass'];

 $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");

 // cek username
 if(mysqli_num_rows($query) === 1){
  // cek password
  $row = mysqli_fetch_assoc($query);
  if(password_verify($pass, $row['pass'])){
   // Set session
   $_SESSION['login'] = true;
   
   header('Location: ?page=siswa');
   exit;
  }
    
 }
 header('Location: ?page=login');

?>