<!DOCTYPE html>
<html>
	<head>
		<title>WARUNG PATI BUMI MINA TANI</title>
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<div class="wrapper">
			<header>
				<h1>WARUNG PATI BUMI MINA TANI</h1>
				<nav>
					<ul>
						<li><a href="index.html" class="current">BERANDA</a></li>
						<li><a href="artikel.html">ARTIKEL</a></li>
						<li><a href="https://dinus.ac.id/mahasiswa/A11.2017.10571">PROFIL</a></li>
						<li><a href="multimedia.html">MULTIMEDIA</a></li>
						<li><a href="krs.html">KRS</a></li>
						<li><a href="https://api.whatsapp.com/send?phone=6285741245540">KONTAK</a></li>
					</ul>
				</nav>
			</header>
			<section class="courses">
				<article align="center">
					<h3>Data pendaftar</h3>
		<?php
		{
			echo"Nama: ".$_GET['nama']. "</br>";
			echo"Password: ".$_GET['password']."</br>";
			echo"Jenis kelamin: ".$_GET['jenis_kelamin']."</br>";
			echo"Keahlian: ".$_GET['keahlian']."</br>";
			echo"Tempat lahir: ".$_GET['tempat_lahir']."</br>";
			echo"Deskripsi Diri: ".$_GET['deskripsi']."</br>";
		}
		?>
				</article>
			</section>
			<aside>
				<section class="popular-recipes">
					<h2>Masakan Populer</h2>
					Populer semua
				</section>
				<section class="contact-details">
					<h2>Kontak</h2>
					<p>Whatsapp : 085741245540<br />
					
				</section>
			</aside>
			<footer>
				&copy; 2018 Warung Pati Bumi Mina Tani
			</footer>
		</div>
	</body>
</html>
<html>
	<head>
		<title>Keluaran Form</title>
	</head>
	<body align="center">
		<h3>Data pendaftar</h3>
		<?php
		{
			echo"Nama: ".$_GET['nama']. "</br>";
			echo"Password: ".$_GET['password']."</br>";
			echo"Jenis kelamin: ".$_GET['jenis_kelamin']."</br>";
			echo"Keahlian: ".$_GET['keahlian']."</br>";
			echo"Tempat lahir: ".$_GET['tempat_lahir']."</br>";
			echo"Deskripsi Diri: ".$_GET['deskripsi']."</br>";
		}
		?>
	</body>
</html>