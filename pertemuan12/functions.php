<?php 
     // koneksi ke database
   $conn = mysqli_connect("localhost", "root", "", "phpdasar");

   function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
   }


   function tambah($data){
    global $conn;
    // ambil data dari tiap elemen dalam form
    $nomor = htmlspecialchars($data["nomor"]);
    $nama = htmlspecialchars($data["nama"]);
    $email =  htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

     // query insert data
     $query = "INSERT INTO siswa
     VALUES
     ('', '$nama', '$nomor', '$email', '$jurusan', '$gambar')";
      mysqli_query($conn, $query);

      return mysqli_affected_rows($conn);
   }

   function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
   }

   function ubah($data){
    global $conn;
    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nomor = htmlspecialchars($data["nomor"]);
    $nama = htmlspecialchars($data["nama"]);
    $email =  htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

     
     $query = "UPDATE siswa SET nomor = '$nomor', nama = '$nama', email = '$email', jurusan = '$jurusan', gambar = '$gambar'
     WHERE id = $id";
      mysqli_query($conn, $query);

      return mysqli_affected_rows($conn);
   }

   function cari($keyword){
      $query = "SELECT * FROM siswa 
               WHERE nama LIKE '%$keyword%' OR nomor LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' ";
         return query($query);
   }
   

?>

