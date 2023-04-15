<!DOCTYPE html>
<html>
<head>
	<title>Biodata Diri</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php

$nama = "Naufal Abdullah";
$tanggal_lahir = "28 September 2001";
$jenis_kelamin = "Laki-laki";
$alamat = "Jl. Halim Perdana Kusuma, Bangkalan, Madura";
$riwayat_pendidikan1 = "S1 Teknik Informatika Universitas Trunojoyo Madura";
$riwayat_pendidikan2 = "SMAN 1 Bangkalan";
$riwayat_pendidikan3 = "SMPN 2 Bangkalan";
$riwayat_pendidikan4 = "SDN 1 Bangkalan";

$hobi1 = "Game";
$hobi2 ="Berenang";
$hobi3 = "Travelling";

?>
<div class="container mt-4">
	<h1 class="text-center mb-4">Biodata Diri</h1>
	<div class="row">
		<div class="col-md-2">
			<img src="./asset/aku.jpg" alt="Foto 3x4" class="img-thumbnail">
		</div>
		<div class="col-md-9">
			<table class="table">
				<tr>
					<th>Nama</th>
					<td><?php echo $nama; ?></td>
				</tr>
				<tr>
					<th>Tanggal Lahir</th>
					<td><?php echo $tanggal_lahir; ?></td>
				</tr>
				<tr>
					<th>Jenis Kelamin</th>
					<td><?php echo $jenis_kelamin; ?></td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td><?php echo $alamat; ?></td>
				</tr>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2>Riwayat Pendidikan</h2>
			<ul>
				<li><?php echo $riwayat_pendidikan1; ?></li>
				<li><?php echo $riwayat_pendidikan2; ?></li>
				<li><?php echo $riwayat_pendidikan3; ?></li>
				<li><?php echo $riwayat_pendidikan4; ?></li>
			</ul>
			<h2>Hobi</h2>
			<ul>
				<li><?php echo $hobi1; ?></li>
				<li><?php echo $hobi2; ?></li>
				<li><?php echo $hobi3; ?></li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>