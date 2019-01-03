<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan Minggu ke-6</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="flex.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1>WELCOME TO MY BLOG</h1>
			<strong>Description About Me</strong>
		</div>
		<div class="menu"> 
			<ul>
			  <li><a href="index.html">Home</a></li>
			  <li><a href="#">Contact</a>
			  <li><a href="galery.html">Gallery</a></li>
			  <li><a href="about.html">About</a></li>
			</ul>
		</div>
		<div class="content"> 
			<h1>Contact Me</h1><br>
			<?php 
				$nama = $_POST['nama'];
				$blog = $_POST['blog'];
				$saran = $_POST['saran'];
			?>
			<form method="POST" action="kontak.html">
				<table>
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><input type="text" placeholder="Nama Lengkap" name="nama" value="<?php echo $nama;?>" disabled/></td>
					</tr>
					<tr>
						<td>Url Blog</td>
						<td>:</td>
						<td><input type="text" placeholder="Url Blog" name="blog" value="<?php echo $blog;?>" disabled/></td>
					</tr>
					<tr>
						<td>Saran</td>
						<td>:</td>
						<td><textarea placeholder="Tulis Saran mu disini ..." name="saran" required disabled><?php echo $saran; ?></textarea></td>
					</tr>
				</table><br>
				<center><input type="submit" value="Isi Saran Lagi?" /></center>			
			</form><br><hr>
		</div>
		<div class="bottom"> 
			<nav>
			 <a href="index.html">| Home</a> |
			 <a href="#">Contact</a> |
			 <a href="galery.html">Gallery</a> |
			 <a href="about.html">About</a> |
			</nav>
		</div>
	</div>
</body>
		<footer>
			<div class="footer"> 
			<p><B>Pemrograman Internet</B> &copy; 2018 All rights reserved </span><div class="copyright"> Powered by Muhamad Aziz</p>
			</div>
	</footer>
</html