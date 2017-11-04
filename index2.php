<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>
 <link rel="stylesheet" href="header.css">
 <style type="text/css">
   @charset "utf-8";
/* CSS Document */

*
{
 padding:0;
 margin:0;
}
body
{
 background:#fff;
 font-family:Georgia, "Times New Roman", Times, serif;
 text-align:center;
}
#header
{
 background:#00a2d1;
 width:100%;
 height:50px;
 color:#fff;
 font-size:36px;
 font-family:Verdana, Geneva, sans-serif;
}
#body
{
 margin-top:100px;
}
#body table
{
 margin:0 auto;
 position:relative;
 bottom:50px;
}
table td,th
{
 padding:20px;
 border: solid #9fa8b0 1px;
 border-collapse:collapse;
}
#footer
{
 text-align:center;
 position:absolute;
 left:0;
 right:0;
 margin:0 auto;
 bottom:50px;
}
img {
  width: 7cm;
  height: 10cm;
}
 </style>
</head>
<body>
<a href="index2.php" class="menu">BERANDA</a> ||
<a href="add.php" class="menu">TAMBAH DATA</a>
<br>
<br>
<form action="" method="POST">
<table border="1" cellspacing="0" cellpadding="4">
 <tr style="text-align:center;background-color:#1abc9c">
                <td>Id</td>
                <td>Judul</td>
                <td>Gambar</td>
                <td>Stok</td>
                <td>Penerbit</td>
                <td>Penulis</td>
                <td>Harga Jual</td>
 </tr>
  <?php
          include "koneksi.php";
  $query = mysqli_query($koneksi, "SELECT * FROM buku") or die (mysqli_error());
       if(mysqli_num_rows($query) == 0){
    echo "<b>Tidak ada data yang tersedia</b>";
    }else{
      while($r = mysqli_fetch_array($query)):     ?>
   
 <tr style="text-align:center">
  <td><?php echo $r['idbuku'] ?></td>
  <td><?php echo $r['namabuku'] ?></td>
  <td><img src="files/<?php echo $r['gambar'] ?>"></td>
  <td><?php echo $r['stok'] ?></td>
  <td><?php echo $r['penerbit'] ?></td>
  <td><?php echo $r['penulis'] ?></td>
  <td><?php echo $r['hargajual'] ?></td>
  <td>
   <a href="ubahdata.php?id=<?php echo $r['idbuku'] ?>">Edit</a> ||
   <a href="delete.php?id=<?php echo $r['idbuku'] ?>" onClick='return confirm("Apakah Ada yakin menghapus?")'>Hapus</a>
  </td>
 </tr>
 <?php
  endwhile;
  }
 ?>
</table>
</form>
</body>
</html>