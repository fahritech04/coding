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

                // login & logut
                case 'login':
                    include "login/login.php";
                    break;
                case 'simpan?login':
                    include "login/simpan_login.php";
                    break;
                case 'logout':
                    include "logout.php";
                    break;
                
                // register
                case 'register':
                    include "register/register.php";
                    break;
                case 'simpan?register':
                    include "register/simpan_register.php";
                    break;
                default:
                    echo "<center><h3>Maaf, Halaman tidak di temukan</h3></center>";
                    break;
            }
        } else {
            include "siswa/siswa.php";
        }
    
    ?>