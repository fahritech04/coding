<?php

 include "../config.php";

 $nilai = $_POST['nilai'];

 mysqli_query($koneksi, "INSERT INTO 
 data_nilai (nilai) VALUE ('$nilai')");




 // for($i=0; $i < 10; $i++){
 //  $input_nilai = rand(10, 100);

 //  mysqli_query($koneksi, "INSERT INTO data_nilai (input_nilai) VALUE ('$input_nilai')");
 // }

 header('Location: ../nilai/nilai.php');
?>