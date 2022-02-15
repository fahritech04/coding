<?php
    
        if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch($page) {
                // siswa
                case 'siswa':
                    include "siswa/siswa.php";
                    break;
                case 'input_siswa':
                    include "siswa/input.php";
                    break;
                case 'edit_siswa':
                    include "siswa/edit.php";
                    break;
                case 'simpan_siswa':
                    include "siswa/simpan.php";
                    break;
                case 'update_siswa':
                    include "siswa/update.php";
                    break;
                case 'delete_siswa':
                    include "siswa/delete.php";
                    break;

                // Kelas
                case 'kelas':
                    include "kelas/kelas.php";
                    break;
                case 'input_kelas':
                    include "kelas/inputkelas.php";
                    break;
                case 'edit_kelas':
                    include "kelas/edit_kelas.php";
                    break;
                case 'simpan_kelas':
                    include "kelas/simpan_kelas.php";
                    break;
                case 'update_kelas':
                    include "kelas/update_kelas.php";
                    break;
                case 'delete_kelas':
                    include "kelas/delete_kelas.php";
                    break;

                // nilai
                case 'nilai':
                    include "nilai/nilai.php";
                    break;
                case 'input_nilai':
                    include "nilai/input_nilai.php";
                    break;
                case 'edit_nilai':
                    include "nilai/edit_nilai.php";
                    break;
                case 'simpan_nilai':
                    include "nilai/simpan_nilai.php";
                    break;
                case 'update_nilai':
                    include "nilai/update_nilai.php";
                    break;
                case 'delete_nilai':
                    include "nilai/delete_nilai.php";
                    break;

                // login & logut
                case 'login':
                    include "login/login.php";
                    break;
                case 'simpan_login':
                    include "login/simpan_login.php";
                    break;
                case 'logout':
                    include "logout.php";
                    break;
                
                // register
                case 'register':
                    include "register/register.php";
                    break;
                case 'simpan_register':
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