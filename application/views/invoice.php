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
		<div class="col-8 bg-konco shadow-lg" style="border:1px solid black; border-radius: 1rem; height: 85vh; width: 30vw; position: relative; top: 12%; left: 35%;">
			<div class="row">
				<div class="col text-center mt-3">
					<h5>Sapi Limousine</h5>
				</div>
			</div>
			<hr align="left" style="height: 1px; background: gray; width:100%; " />
			<div class="col text-center mt-3">
				<div class="row">
					<div class="col text-left">
						Harga
					</div>
					<div class="col text-right">
						<b>Rp14.000.000</b>
					</div>
				</div>
				<hr align="left" style="height: 1px; background: gray; width:100%; " />
				<div class="row">
					<div class="col text-left">
						Jenis Kelamin
					</div>
					<div class="col text-right">
						<b>Jantan</b>
					</div>
				</div>
				<hr align="left" style="height: 1px; background: gray; width:100%; " />
				<div class="row">
					<div class="col text-left">
						Umur
					</div>
					<div class="col text-right">
						<b>3 Tahun</b>
					</div>
				</div>
				<hr align="left" style="height: 1px; background: gray; width:100%; " />
				<div class="row">
					<div class="col text-left">
						Jumlah
					</div>
					<div class="col text-right">
						<button type="button" class="btn btn-light text-center" name="tambah" style="border-radius:50%; height: 30px; width: 30px; line-height: 15px; margin: auto;"><span>-</span></button>
						<input type="text" class="bg-konco text-center" name="email" placeholder="2" style="height: 1rem; width: 10%; height: 30px;;border: 0; outline: 0; border-bottom: 1px solid gray">
						<button type="button" class="btn btn-light text-center" name="tambah" style="border-radius:50%; height: 30px; width: 30px; line-height: 15px; margin: auto;"><span>+</span></button>
					</div>
				</div>
				<hr align="left" style="height: 1px; background: gray; width:100%; " />
				<div class="row">
					<div class="col text-left">
						Total
					</div>
					<div class="col text-right">
						<b>Rp28.000.000</b>
					</div>
				</div>
				<hr align="left" style="height: 1px; background: gray; width:100%; " />
				<div class="row">
					<div class="col text-left">
						Lokasi Asal
					</div>
					<div class="col text-right">
						<b>Desa Kawedusan,
							Kec Ponggok,</b>
					</div>
				</div>
				<div class="row">
					<div class="col text-left">
						Lokasi Tujuan
					</div>
					<div class="col text-right">
						<b>Desa Pojok,
							Kec Ponggok,</b>
					</div>
				</div>
				<div class="row">
					<div class="col text-left">
						<a href="transaksi" class="btn btn-outline-dark text-center w-100 mt-4">Buat Pesanan</a>
					</div>
				</div>
			</div>

		</div>
</body>

</html>
