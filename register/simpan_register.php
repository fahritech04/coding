<?php
 
 $username  = $_POST['username'];
 $pass      = $_POST['pass'];
 
 // method
 $username  = strtolower(stripslashes($username));
 // enkripsi Password
 $pass = password_hash($pass, PASSWORD_DEFAULT);  
 
 // Cek data
 $reg = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
 if(mysqli_fetch_assoc($reg)){
  echo "<script> alert('Username Sudah Tersedia'); </script>";
  header('location: ?page=register');
  exit;
 }

 mysqli_query($koneksi, "INSERT INTO user (username, pass) VALUE ('$username', '$pass')");

 

 header('Location: ?page=login');


?>