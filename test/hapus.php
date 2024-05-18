<?php 
    require 'functions.php';

    $id = $_GET["id"];

    

    if(hapus($id)){
       echo "data dihapus"; 
       
    } else {
        echo "data gagal do hapus";
    }
?>