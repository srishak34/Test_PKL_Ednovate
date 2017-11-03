<!DOCTYPE html>
<html>
<head>
 <title>TAMBAH DATA</title>
 <link rel="stylesheet" href="header.css">
</head>
<body>  <a href="index2.php" class="menu">BERANDA</a> ||
 <a href="add.php" class="menu">TAMBAH DATA</a>
 <h2>FORM TAMBAH DATA</h2>
 <form enctype="multipart/form-data" action="" method="POST">
 <table>
 <tr>
  
 </tr>
 <tr>
  <td>Judul</td>
  <td><input type="text" name="namabuku"  placeholder="Masukkan judul" /></td>
 </tr>
 <tr>
   <td>Gambar </td>
   <td><input type="file" name="fupload"></td>
 </tr>
 <tr>
  <td>Stok</td>
  <td> <input type="text" name="stok" placeholder="Masukkan Stok"></td>
 </tr>   <tr>
   <td>Penerbit</td>
   <td><input type="text" name="penerbit" placeholder="Masukkan Penerbit"></td>
  </tr>
   <tr>
   <td>Penulis</td>
   <td>
   <input type="text" name="penulis" placeholder="Masukkan Penulis">
   </td>
  </tr>
  <tr>
   <td>Harga Jual</td>
   <td>
   <input type="text" name="hargajual" placeholder="Masukkan Harga">
   </td>
  </tr>
  <tr>
  <td></td>
    <td><input type="submit" name="tambah" value="Tambah">
  <button type="reset" value="Reset">Reset</button>
   </td>
  </tr>
  </table>
 </form>

 <?php 
  include "koneksi.php";

  

  if(isset($_POST['tambah'])){
  $judul     = $_POST['namabuku'];
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];
  $folder = "files/$nama_file";
  $stok    = $_POST['stok'];
  $penerbit = $_POST['penerbit'];
  $penulis  = $_POST['penulis'];
  $hargajual  = $_POST['hargajual'];
  $querytambah = mysqli_query($koneksi, "INSERT INTO buku(namabuku, gambar, stok, penerbit, penulis, hargajual) VALUES( '$judul', '$nama_file' , '$stok', '$penerbit', '$penulis', '$hargajual')") or die(mysqli_error());
  if (move_uploaded_file($lokasi_file,"$folder")) {
     echo "Nama File : <b>$nama_file</b> sukses di upload";
   } else {
    echo "fuckkkk";
   }
  if($querytambah) {
    header('location: index2.php');
   } else{
    echo "Upss Something wrong..";
   }
  }
 ?>
</body>
</html>