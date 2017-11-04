<?php
  include "koneksi.php";

  $id = $_GET['id'];
  
  if(isset($_POST['edit'])){ //1
    /* syntak edit gambar */
  $lokasi_file = $_FILES['gambar']['tmp_name'];
  $nama_file   = $_FILES['gambar']['name'];
  $folder      = "files/$nama_file";
  //end

  $judul     = $_POST['namabuku'];
  $stok      = $_POST['stok'];
  $penerbit  = $_POST['penerbit'];
  $penulis   = $_POST['status'];
  $harga     = $_POST['hargajual'];


if (move_uploaded_file($lokasi_file,"$folder")) { //2
     

    $queryy = "SELECT * FROM buku WHERE idbuku ='".$id."'";
    $sqli = mysqli_query($koneksi, $queryy); // Eksekusi/Jalankan query dari variabel $query
    $res = mysqli_fetch_array($sqli); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("files/".$res['gambar'])) {
               // Jika foto ada
      unlink("files/".$res['gambar']); 
      }//3         // Hapus file foto sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
    $query = "UPDATE buku SET namabuku  = '$judul', gambar = '$nama_file', stok = '$stok', penerbit = '$penerbit', penulis   = '$penulis', hargajual = '$harga' WHERE id = $id";
     // Eksekusi/ Jalankan query dari variabel $query
    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
      echo "Good Job";
      header("location: index2.php");
    } else {
      echo "fail";
      echo "<a href='ubahdata.php'> jbkjkjjk </a>";
    }
  }//2
}//1
?>