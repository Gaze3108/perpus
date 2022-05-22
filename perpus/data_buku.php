<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="disain web.css">
	<!-- link css belum ada -->
	<title>perpustakaan bersama</title>
</head>
<body>
<div id="container">
<div class="header"><img src="images/logo.png" width="100" height="100"><h1>Perpustakaan Universitas BSI</h1></div>
<h4>Selamat Datang <?=$_GET["username"] ?></h4>

<div class="main">
<div class="left">
<h3 align="center">MENU</h3>
<ul>
<li><a href="http://localhost/perpus/index.php">Logout</a></li>
<li><a href="http://localhost/perpus/home.php">Home</a></li>
<div class="tengah">
	<h2 align="center">DAFTAR BUKU</h2><br>
	<div align="center">		
	</div>
<!-- belum selesai -->
</div>

<div class="buku">
<div class="foto">
<img src="gambar/belajar css">	
<div class="judul">belajar css beginer to pro</div>
</div>
</div>

<div class="buku">
<div class="foto">
<img src="gambar/belajar gitar">	
<div class="judul">learn and master fingerstyle guitar</div>
</div>
</div>

<div class="buku">
<div class="foto">
<img src="gambar/cinderela">	
<div class="judul">Cinderela take the stage</div>
</div>
</div>

<div class="buku">
<div class="foto">
<img src="gambar/teori manusia">	
<div class="judul">the origin of the species</div>
</div>
</div>
</body>
</html>