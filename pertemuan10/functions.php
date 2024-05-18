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

?>

