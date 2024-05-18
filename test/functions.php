<?php 
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows [] = $row;
        }
        return $rows;
    }


    function tambah($data){
        global $conn;
        $nama = $data["nama"];
        $nomor = $data["nomor"];
        $email = $data["email"];
        $jurusan = $data["jurusan"];

        $gambar = upload();
        if(!$gambar){
            return false;
        }
        

        $query = "INSERT INTO siswa VALUES ('', '$nama', '$nomor', '$email', '$jurusan', '$gambar')";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
        
    } 

    function upload(){
        $namaFile = $_FILES["gambar"]["name"];
        $ukuranFile = $_FILES["gambar"]["size"];
        $error = $_FILES["gambar"]["error"];
        $tmpName = $_FILES["gambar"]["tmp_name"];

        $namaFileBaru = uniqid() . '_' . $namaFile;
        
        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

        return $namaFileBaru;
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    function edit($data){

        global $conn;
        $id = $data["id"];
        $nama = $data["nama"];
        $nomor = $data["nomor"];
        $email = $data["email"];
        $jurusan = $data["jurusan"];
        $gambar = $data["gambar"];

        $query = "UPDATE siswa SET nama = '$nama', nomor = '$nomor', email = '$email', jurusan = '$jurusan', gambar = '$gambar' WHERE id = $id";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);

    }


    function cari($keyword){

        $query = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%'";
        return query($query);
    }

    function registrasi($data){
        global $conn;
        $username = $data["username"];
        $password = $data["password"];
        $password2 = $data["password2"];

        $query = "INSERT INTO user VALUES ('', '$username', '$password') ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }


?>