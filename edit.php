<!DOCTYPE html>
 <html>
 <head>
  <title>EDIT DATA</title>
  <link rel="stylesheet" href="header.css">
 </head>
 <body>
 <a href="index.php" class="menu">BERANDA</a> ||
 <a href="add.php" class="menu">TAMBAH DATA</a>
  <h1>EDIT DATA</h1>

   <?php
  include "koneksi.php";

   $id = $_GET['idbuku'];

   $query = mysqli_query($koneksi, "SELECT * FROM bukuedno WHERE id = '$id'");

   $res = mysqli_fetch_array($query);
   ?>

    <form action="" method="POST">
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
  if(isset($_POST['edit'])){

  $judul     = $_POST['namabuku'];
  $gambar    = $_POST['gambar'];
  $stok      = $_POST['stokk'];
  $penerbit  = $_POST['penerbit'];
  $penulis   = $_POST['status'];
  $harga     = $_POST['hargajual'];
  

   $queryupdate = mysqli_query($koneksi, "UPDATE buku SET namabuku = '$judul',
                           gambar    = '$gambar',
                           stok ='$stok',
                    penerbit  = '$penerbit',
                        penulis  = '$penulis'
             WHERE id = $id");

   if($queryupdate){
   header('location: index.php');
  }else{
   echo "Upss Something wrong..";
  }
  }

   ?>