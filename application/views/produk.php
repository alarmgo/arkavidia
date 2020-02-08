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
	<div class="container-fluid px-0 pt-5">
		<div class="row mt-4 pl-5 pt-4 ml-5" style="width:100vw; height: 50vh;">

			<div class="col-3 mt-2">
				<div class="row">
					<div class="col" style="width: 20vw; height: 20vw;">
						<img src="assets/images/c1.jpeg" style="border-radius: 15px; width:20vw; height: 20vw;">
					</div>
				</div>
				<div class="row mt-2" style="width: 25vw;">
					<div class="col-3 mx-2">
						<a href="#">
							<img src="assets/images/placehold.png" style="border-radius: 0.5em; width:5vw; height: 5vw;">
						</a>
					</div>
					<div class="col-3 mx-1">
						<a href="#">
							<img src="assets/images/placehold.png" style="border-radius: 0.5em; width:5vw; height: 5vw;">
						</a>
					</div>
					<div class="col-3 mx-1">
						<a href="#">
							<img src="assets/images/placehold.png" style="border-radius: 0.5em; width:5vw; height: 5vw;">
						</a>
					</div>
				</div>
			</div>

			<div class="col-4 ml-5">
				<div class="row">
					<div class="col text-left">
						<div style="font-size: 2em">Sapi Limousine</div>
					</div>
				</div>
				<div class="row text-left">
					<hr align="left" style="height: 1px; background: gray; width:80%; " />
				</div>
				<div class="row">
					<div class="col text-left">
						<div class="row">
							<div class="col">
								<div class="mt-1" style="font-size: 1em">Harga</div>
								<div class="mt-1" style="font-size: 1em">Jenis kelamin</div>
								<div class="mt-1" style="font-size: 1em">Umur</div>
								<div class="mt-1" style="font-size: 1em">Stok</div>
								<div class="mt-1" style="font-size: 1em">Lokasi</div>
							</div>
							<div class="col text-right mr-5 pr-5">
								<div class="mt-1" style="font-size: 1em"><b>Rp14.000.000</b></div>
								<div class="mt-1" style="font-size: 1em"><b>Jantan</b></div>
								<div class="mt-1" style="font-size: 1em"><b>3 Tahun</b></div>
								<div class="mt-1" style="font-size: 1em"><b>5 Ekor</b></div>
								<div class="mt-1" style="font-size: 1em"><b>Desa Kawedusan, Kec. Ponggok</b></div>
							</div>
						</div>
						<hr align="left" style="height: 1px; background: gray; width:80%; " />
						<div class="row">
							<div class="col">
								<a href="invoice" class="btn btn-beli text-center" style="width:80%;">Buat Pesanan</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-4 ml-4">
				<div class="row">
					<div class="col text-left">
						<div style="font-size: 2em">Penjual</div>
					</div>
				</div>
				<div class="row text-left">
					<hr align="left" style="height: 1px; background: gray; width:80%; " />
				</div>
				<div class="row">
					<div class="col text-left">
						<div class="row">
							<div class="col">
								<div class="mt-1" style="font-size: 1em">Pemilik</div>
								<div class="mt-1" style="font-size: 1em">Alamat</div>
								<div class="mt-1" style="font-size: 1em">Kontak/Wa</div>
							</div>
							<div class="col text-right mr-5 pr-5">
								<div class="mt-1" style="font-size: 1em"><b>Ardan</b></div>
								<div class="mt-1" style="font-size: 1em"><b>Madiun</b></div>
								<div class="mt-1" style="font-size: 1em"><b>085796541236</b></div>
							</div>
						</div>
					</div>
					<hr align="left" style="height: 1px; background: gray; width:80%; " />
						<div class="row">
							<img src="assets/images/ad.png" style="width:25vw; height:20vh;" class="bg-info ml-3">
						</div>
				</div>
			</div>

			<div class="row  mt-2 ml-3 w-100">
				<div class="row">
					<div style="font-size: 2em">Deskripsi</div>
				</div>
			</div>
			<hr align="left" style="height: 1px; background: gray; width:90%; " />
			<div class="w-75">
				Sapi adalah hewan ternak anggota suku Bovidae dan anak suku Bovinae. Sapi yang telah dikebiri dan biasanya digunakan untuk membajak sawah dinamakan lembu. 
				Sapi dipelihara terutama untuk dimanfaatkan susu dan dagingnya sebagai pangan manusia. Hasil sampingannya seperti kulit, jeroan, tanduk, dan kotorannya juga dimanfaatkan untuk berbagai keperluan manusia.
			</div>
		</div>

	</div>
</body>

</html>
