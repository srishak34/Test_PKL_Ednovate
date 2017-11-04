<!DOCTYPE html>
<html>
<head>
	<title>Penjualan Buku</title>
	<style type="text/css">
		header {
			margin-left: 0.2cm;
			width: 35cm;
			height: 2cm;
			border: solid 4px black;

		}

		#body2 {
			border: solid 4px black;
			width: 35cm;
			height: infinite;
			margin-left: 0.2cm;
		}
		ul {
			list-style-type:  none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;

		}

		li {
			float: left;

		}
		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 20px;
			text-decoration: none;
		}

			.left {
			float: right;
			
		}
		li a:hover {
			background-color: #111;
		}

		table {

		}

			.content {
				background-image: url(content.jpg);
				background-repeat: no-repeat;
				background-size: cover;
				position: relative;
			width: 27cm;
			height: 20cm;
			border: solid 4px black;
			border-radius: 5px;
			opacity: 0.7;
		}

			.list {
			width: 7.3cm;
			height: 20cm;
			border: solid 4px black;
			border-radius: 5px;

		}
			.text {
				font-family: garamond;
				color: white;
				font-size: 50px;
				font-weight: 600;
			}

		footer {
			width: 35cm;
			height: 2cm;
			border: solid 4px black;
			margin-left: 0.2cm;
		}
		*	{
 			padding:0;
 			margin:0;
		}	
		body 	{
 			background:#fff;
 			font-family:Georgia, "Times New Roman", Times, serif;
 			text-align:center;
		}
		#header	{
 			background:#00a2d1;
 			width:100%;
 			height:50px;
 			color:#fff;
 			font-size:36px;
 			font-family:Verdana, Geneva, sans-serif;
			}
		#body 	{
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
  width: 9cm;
  height: 10cm;
}
	</style>
</head>
<body>
	<header>
		<p align="center">Header</p>
	</header>
	<div id="body2">
		 <div>
			<nav>
				<ul>
					<li><a href="index2.php" >BERANDA</a></li>
					<li><a href="add.php" >TAMBAH DATA</a></li>
					<li><a href="Contact">Contact</a></li>
					<li class="left"><a  href="Login">Login</a></li>
				</ul>
			</nav>
<form action="" method="POST">
<table border="1" cellspacing="0" cellpadding="4" style="margin: 0 auto;">
 <tr style="text-align:center;background-color:#1abc9c">
                <td>Id</td>
                <td>Judul</td>
                <td>Sampul Buku</td>
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
		</div>	
	</div>
	<footer >
		<p align="center">Footer</p>
	</footer>
</body>
</html>