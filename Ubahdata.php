<!DOCTYPE html>
 <html>
 <head>
  <title>EDIT DATA</title>
  <link rel="stylesheet" href="header.css">
  <style type="text/css">
    img {
      width: 8cm;
      height: 10cm;
    }
  </style>
 </head>
 <body>
 <a href="index2.php" class="menu">BERANDA</a> ||
 <a href="add.php" class="menu">TAMBAH DATA</a>
  <h1>EDIT DATA</h1>

   <?php
  include "koneksi.php";

   $id = $_GET['id'];

   $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE idbuku = '$id'");

   $res = mysqli_fetch_array($query);
   ?>

    <form enctype="multipart/form-data" action="" method="POST">
   <table>
   <tr>
    <td>Judul </td>
    <td><input type="text" name="namabuku" value="<?php echo $res['namabuku'] ?>"></td>
   </tr>
   <tr>
    <td>Gambar </td>
    <td><img src="files/<?php echo $res['gambar'] ?>"></td>
    <td><input type="file" name="gambar" value="<?php echo $res['gambar'] ?>"></td>
   </tr>
   <tr>
    <td>Stok</td>
    <td> <input type="text" name="stok" value="<?php echo $res['stok'] ?>"></td>
   </tr> 
    <tr>
     <td>Penerbit</td>
     <td><input type="text" name="penerbit" value="<?php echo $res['penerbit'] ?>"></td>
    </tr>
     <tr>
     <td>Penulis</td>
     <td><input type="text" name="penulis" value="<?php echo $res['penulis'] ?>"></td>
    </tr>
    <tr>
      <td>Harga Jual</td>
      <td><input type="text" name="hargajual" value="<?php echo $res['hargajual'] ?>"></td>
    </tr>
    <tr>
    <td></td>
      <td><input type="submit" name="edit" value="Edit">
    <button type="reset" value="Reset">Reset</button>
     </td>  
    </tr>
    </table>
 </form>
 </body>
 </html>

 <?php
  include "koneksi.php";

  
  
  if(isset($_POST['edit'])){ //1
    /* syntak edit gambar */
  $lokasi_file = $_FILES['gambar']['tmp_name'];
  $nama_file   = $_FILES['gambar']['name'];
  
  //end

  $judul     = $_POST['namabuku'];
  $stok      = $_POST['stok'];
  $penerbit  = $_POST['penerbit'];
  $penulis   = $_POST['penulis'];
  $harga     = $_POST['hargajual'];

  $foto = date('dmYHis').$nama_file;
  $folder = "files/".$foto;

if (move_uploaded_file($lokasi_file,"$folder")) { //2
     

    $queryy = "SELECT * FROM buku WHERE idbuku ='".$id."'";
    $sqli = mysqli_query($koneksi, $queryy); // Eksekusi/Jalankan query dari variabel $query
    $res = mysqli_fetch_array($sqli); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("files/".$res['gambar'])) // Jika foto ada
      unlink("images/".$res['gambar']); // Hapus file foto sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
    $query = "UPDATE buku SET namabuku  = '$judul', gambar = '$foto', stok = '$stok', penerbit = '$penerbit', penulis   = '$penulis', hargajual = '$harga' WHERE idbuku = $id";
     // Eksekusi/ Jalankan query dari variabel $query
    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
      
      header("location: index.php");
    } else {
      echo "fail";
      echo "<a href='ubahdata.php'> jbkjkjjk </a>";
    }
  }//2
}//1
?>
