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
					<li><a class="active" href="#home">Home</a></li>
					<li><a href="Product">Product</a></li>
					<li><a href="Contact">Contact</a></li>
					<li class="left"><a  href="Login">Login</a></li>
				</ul>
			</nav>
			<table >
				<tr>
					<td><div class="content">
						<table border="1"  cellpadding="5">
							<tr>
								<td>Id</td>
								<td>Judul</td>
								<td>Stok</td>
								<td>Penerbit</td>
								<td>Penulis</td>
								<td>Harga Jual</td>
							</tr>
						</table>
					</div></td>
					<td><div class="list">
						
					</div></td>
				</tr>
			</table>
		</div>	
	</div>
	<footer >
		<p align="center">Footer</p>
	</footer>
</body>
</html>