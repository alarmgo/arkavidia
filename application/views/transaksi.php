<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

	<?php $this->load->view('_parts/resources.php') ?>
</head>

<body>
	<?php $this->load->view('_parts/navbar.php') ?>
	<div class="container-fluid px-0" style="height:100vh;">
		<div class="col-8 shadow-sm" style="border:1px solid #999999;  height: 85vh; width: 30vw; position: relative; top: 12%; left: 35%;">
			<div class="row">
				<div class="col text-center mt-3">
					[INV/013020/001032]<br>
					<h5>Sapi Limousine</h5>
				</div>
			</div>
			<hr align="left" style="height: 1px; background: gray; width:100%; " />
			<div class="col text-center mt-3">
				<div class="row">
					<div class="col text-left">
						Nama Pembeli
					</div>
					<div class="col text-right">
						<b>Dummy User</b>
					</div>
				</div>
				<hr align="left" style="height: 1px; background: gray; width:100%; " />
				<div class="row">
					<div class="col text-left">
						Total Pembayaran
					</div>
					<div class="col text-right">
						<b>Rp28.000.000</b>
					</div>
				</div>
			
				<hr align="left" style="height: 1px; background: gray; width:100%; " />
				<div class="row">
					<div class="col text-left">
						Lokasi Tujuan
					</div>
					<div class="col text-right">
						<b>Desa Pojok,<br>
							Kec Ponggok,</b>
					</div>
				</div>
				<hr align="left" style="height: 1px; background: gray; width:100%; " />
				<div class="row">
					<div class="col text-center">
						Daftar Rekening a/n KoncoTernak
					</div>
				</div>
				<div class="row mt-2">
					<div class="col text-left">
						<b>BNI</b>
					</div>
					<div class="col text-right">
						123456789
					</div>
				</div>
				<div class="row mt-2">
					<div class="col text-left">
						<b>BCA</b>
					</div>
					<div class="col text-right">
						123456789
					</div>
				</div>
				<div class="row mt-2">
					<div class="col text-left">
						<b>Mandiri</b>
					</div>
					<div class="col text-right">
						123456789
					</div>
				</div>
				<div class="row mt-2">
					<div class="col text-left">
						<b>BRI</b>
					</div>
					<div class="col text-right">
						123456789
					</div>
				</div>
				<div class="row mt-3">
					<div class="col text-left">
						<a href="berhasil" class="btn btn-outline-dark text-center w-100 mt-4">Konfirmasi Pembayaran</a>
					</div>
				</div>
			</div>
</body>

</html>
